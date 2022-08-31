<?php

/*
 * Reverse Proxy Script
 * 
 * This script echo the request to the MBPBS server for a citizen data from its id (cedula).
 * It first check if the request has proper authorization, then it responds with a json object.
 * The json always contains the field "success" with a boolean value indicating if the request was successful.
 * If the request was successful, the json also contains the field "data" with the citizen data.
 * If the request was not successful, the json also contains the field "message" with the error message.
 * With the json, the response also contains the appropriate http status code.
 * 
 * Core::$user->checkAuth() verify if user is logged in
 */

require_once('./global/api/API.class.php');

use FormTools\Core;

$minimum_user_permission = 'client';

Core::init();
Core::$user->checkAuth($minimum_user_permission);

header('Content-Type: application/json; charset=utf-8'); // Set response content type to JSON

$url_ci_parm_name = 'cedula';
if(!isset($_GET[$url_ci_parm_name]))
{
    http_response_code(400); // 400 - Bad Request
    echo '{"success": false, "message": "No se ha especificado el campo cedula"}';
}
else
{
    $cedula = $_GET[$url_ci_parm_name];

    $URL = 'https://ws.mspbs.gov.py/api/getPersonas.php?cedula=' . $cedula;
    $USER = 'personas';
    $PASS = '@g3137c0120'; // TODO Move credentials into ENV VARS

    $token = base64_encode($USER . ':' . $PASS);

    try
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // https://en.wikipedia.org/wiki/Basic_access_authentication
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $token));
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Use insecure SSL (-k option in CLI)

        $result = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if($status === 200)
        {
            if($result !== 'null')
            {
                $result_json = json_decode($result, true);
                http_response_code(200); // 200 - OK
                echo '{"success": true, "data": ' . json_encode($result_json) . '}';
            }
            else
            {
                http_response_code(404); // 404 - Not Found
                echo '{"success": false, "message": "No se encontraron resultados"}';
            }
        }
        else if($status === 401)
        {
            http_response_code(401); // 401 - Unauthorized
            echo '{"success": false, "message": "Sin autorizacion"}';
        }
        else
        {
            http_response_code(500); // 500 - Internal Server Error
            echo '{"success": false, "message": "Ocurrio un error"}';
        }

    }
    catch(Exception $e)
    {
        http_response_code(500); // 500 - Internal Server Error
        echo '{"success": false, "message": "' . $e->getMessage() . '"}';
    }
}
?>
