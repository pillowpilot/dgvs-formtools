<?php
require_once("../global/api/API.class.php");
$api = new FormTools\API();
$fields = $api->initFormPage(5);
$params = array(
    "submit_button" => "submit_button_name_attribute",
    "next_page" => "thanks.php",
    "form_data" => $_POST,
    // "file_data" => $_FILES,
    "finalize" => true
);
$api->processFormSubmission($params);
?>

<?php

require_once './widgets/Checkbox.class.php';
require_once './widgets/SingleCheckbox.class.php';
require_once './widgets/ListOfCheckboxes.class.php';
require_once './widgets/Select.class.php';
require_once './widgets/TextInput.class.php';
require_once './widgets/DateInput.class.php';

use Widgets\Checkbox;
use Widgets\SingleCheckbox;
use Widgets\ListOfCheckboxes;
use Widgets\Select;
use Widgets\TextInput;
use Widgets\DateInput;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/form-section.css">
    <!-- Bootstrap v5.2.0 - CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Formulario Botulismo</title>
</head>
<body>
    <form method="post">
        <div class="form-intro"></div>
        <div class="form-section section-paciente">
            <div class="section-header"><h2>Datos Generales del Paciente</h2></div>

            <div class="section-content">
                <label for="paciente-ci" class="form-label">Cédula de Identidad del Paciente</label>
                <input type="number" name="paciente-ci" id="paciente-ci" placeholder="Ingrese la CI del paciente" class="form-control">
                <div class="form-text">Este campo es requerido</div>
            </div>
        </div>

        <div class="form-section section-notificante">
            <div class="section-header"><h2>Datos del Notificante</h2></div>

            <div class="section-content">
                <label for="notificante-ci" class="form-label">Cédula de Identidad del Notificante</label>
                <input type="number" name="notificante-ci" id="notificante-ci" placeholder="Ingrese la CI del notificante" class="form-control">
                <span class="form-text">Este campo es requerido</span>
            </div>
        </div>

        <div class="form-section">
            <div class="section-header"><h2>Antecedentes de Riesgo y Exposición</h2></div>

            <div class="section-content">
                <div class="form-subsection">
                    <div class="subsection-header"><h3>Alimentario</h3></div>
                    <div class="subsection-content">

                        <?php
                            
                            $alimentoSospechoso = new TextInput('Alimentos sospechosos', 'alimentos-sospechosos');
                            echo $alimentoSospechoso->render();

                            $tipoAlimento = new TextInput('Tipo de alimento', 'tipo-alimento');
                            echo $tipoAlimento->render();

                            $dateInput = new DateInput('Fecha de consumo', 'fecha-de-consumo');
                            echo $dateInput->render();

                        ?>
                        
                    </div>
                </div>
                <div class="form-subsection">
                    <div class="subsection-header"><h3>Lactante</h3></div>
                    <div class="subsection-content">

                    <?php

                        $someSelect = new Select('Tipo de alimentacion', 'tipo-de-alimentacion', '');
                        $someSelect->addOption('Solo alimentacio a pecho', 'a-pecho');
                        $someSelect->addOption('Pecho y leche de formula', 'pecho-leche-formula');
                        $someSelect->addOption('Leche de Formula', 'leche-formula');
                        echo $someSelect->render();

                    ?>

                    <?php
                        $formGroupNamespace = 'consumo-de';

                        $someCheckboxes = new ListOfCheckboxes('Consumo de');
                        $someCheckboxes->addCheckbox(new Checkbox('Miel', 'miel', $formGroupNamespace));
                        $someCheckboxes->addCheckbox(new Checkbox('Jarabe de maíz', 'jarabe-de-maiz', $formGroupNamespace));
                        $someCheckboxes->addCheckbox(new Checkbox('Infusiones Caseras', 'infusiones-caseras', $formGroupNamespace));
                        $someCheckboxes->addCheckbox(new Checkbox('Jugo', 'jugo', $formGroupNamespace));
                        $someCheckboxes->addCheckbox(new Checkbox('Cereales', 'cereales', $formGroupNamespace));
                        echo $someCheckboxes->render();
                    ?>
                </div>
                <div class="form-subsection">
                    <div class="subsection-header"><h3>Por heridas</h3></div>
                    <div class="subsection-content">

                    <?php

                        $someSelect = new Select('Tipo de herida', 'tipo-de-herida', 'por-heridas');
                        $someSelect->addOption('Accidental', 'accidental');
                        $someSelect->addOption('Quirurgica', 'quirurgica');
                        $someSelect->addOption('Uso de drogas intravenosas', 'uso-de-drogas-intravenosas');
                        echo $someSelect->render();

                    ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-section">
            <div class="section-header"><h2>Antecedentes Clínicos y de Hospitalización</h2></div>
            <div class="section-content">

                <?php

                $inicioSintomas = new DateInput('Inicio de Sintomas', 'inicio-de-sintomas');
                echo $inicioSintomas->render();

                $primeraConsulta = new DateInput('Primera Consulta', 'primera-consulta');
                echo $primeraConsulta->render();

                $centroPrimeraConsulta = new TextInput('Centro', 'centro-primera-consulta');
                echo $centroPrimeraConsulta->render();

                $hospitalizacion = new SingleCheckbox('Hospitalización', 'hospitalizacion');
                echo $hospitalizacion->render();

                $fechaHospitalizacion = new DateInput('Fecha de Hospitalización', 'fecha-de-hospitalizacion');
                echo $fechaHospitalizacion->render();

                $diagnosticoIngreso = new TextInput('Diagnóstico de Ingreso', 'diagnostico-de-ingreso');
                echo $diagnosticoIngreso->render();

                $signosSintomasNamespace = 'signos-sintomas';
                $signosSintomas = new ListOfCheckboxes('Signos y Sintomas');
                $signosSintomas->addCheckbox(new Checkbox('Visión Borrosa', 'vision-borrosa', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Disfagia', 'disfagia', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Diplopia', 'diplopia', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Ptosis palpebral bilateral', 'ptosis', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Paralisis flacida descendente', 'paralisis', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Ausencia de reflejo fotomotor', 'reflejo-fotomotor', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Conciencia conservada', 'conciencia', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Dificultad respiratoria', 'dificultad-respiratoria', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Inapetencia', 'inapetencia', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Hipotonia', 'hipotonia', $signosSintomasNamespace));
                $signosSintomas->addCheckbox(new Checkbox('Perdida del control cefalico', 'cefalico', $signosSintomasNamespace));
                echo $signosSintomas->render();

                $sintomasPreviosNamespace = 'sintomas-previos';
                $sintomasPrevios = new ListOfCheckboxes('Sintomas Previos al cuadro neurologico');
                $sintomasPrevios->addCheckbox(new Checkbox('Constipacion', 'constipacion', $sintomasPreviosNamespace));
                $sintomasPrevios->addCheckbox(new Checkbox('Vertigo', 'vertigo', $sintomasPreviosNamespace));
                $sintomasPrevios->addCheckbox(new Checkbox('Nauseas/Vomitos', 'nauseas-vomitos', $sintomasPreviosNamespace));
                $sintomasPrevios->addCheckbox(new Checkbox('Fiebre', 'fiebre', $sintomasPreviosNamespace));
                echo $sintomasPrevios->render();

                $usoARM = new SingleCheckbox('Uso de ARM', 'uso-de-arm');
                echo $usoARM->render();

                $empleoAntitoxina = new SingleCheckbox('Empleo de Antitoxina', 'empleo-de-antitoxina');
                echo $empleoAntitoxina->render();

                $demoraAdministracion = new TextInput('Demora en la Administración (horas)', 'demora-en-la-administracion');
                echo $demoraAdministracion->render();

                ?>

            </div>
        </div>
        <div class="form-section">
            <div class="section-header"><h2>Datos de Laboratorio</h2></div>
            <div class="section-content">

                

            </div>
        </div>
        <input type="submit" name="submit_button_name_attribute">
    </form>
    <!-- Bootstrap v5.2.0 - JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
