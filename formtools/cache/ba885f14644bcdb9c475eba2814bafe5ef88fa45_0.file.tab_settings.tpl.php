<?php
/* Smarty version 3.1.31, created on 2022-08-29 20:58:03
  from "/home/federico/formtools/formtools/themes/default/admin/clients/tab_settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d0c3b439970_59381433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba885f14644bcdb9c475eba2814bafe5ef88fa45' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/clients/tab_settings.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d0c3b439970_59381433 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_themes_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.themes_dropdown.php';
if (!is_callable('smarty_function_menus_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.menus_dropdown.php';
if (!is_callable('smarty_function_pages_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.pages_dropdown.php';
if (!is_callable('smarty_function_languages_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.languages_dropdown.php';
if (!is_callable('smarty_function_timezone_offset_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.timezone_offset_dropdown.php';
?>
    <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


    <form method="post" id="settings_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return rsv.validate(this, rules)">
      <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
" />
      <input type="hidden" name="page" value="settings" />

      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_settings_top"),$_smarty_tpl);?>


      <table class="list_table check_areas" cellpadding="0" cellspacing="1">
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_setting'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_setting_value'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_client_may_edit'];?>
</th>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_page_titles'];?>
</td>
        <td><input type="text" name="page_titles" id="page_titles" style="width:98%" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_info']->value['settings']['page_titles'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_page_titles" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_page_titles'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_footer_text'];?>
</td>
        <td><input type="text" name="footer_text" style="width:98%" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_info']->value['settings']['footer_text'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_footer_text" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_footer_text'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_theme'];?>
</td>
        <td><?php echo smarty_function_themes_dropdown(array('name_id'=>"theme",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['theme'],'default_swatch'=>$_smarty_tpl->tpl_vars['client_info']->value['swatch']),$_smarty_tpl);?>
</td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_theme" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_theme'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_menu'];?>
</td>
        <td><?php echo smarty_function_menus_dropdown(array('type'=>"client",'name_id'=>"menu_id",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['menu_id']),$_smarty_tpl);?>
</td>
        <td> </td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_login_page'];?>
</td>
        <td><?php echo smarty_function_pages_dropdown(array('menu_type'=>"client",'name_id'=>"login_page",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['login_page'],'omit_pages'=>"logout,custom_url,client_form_submissions"),$_smarty_tpl);?>
</td>
        <td align="center"> </td>
      </tr>
      <tr>
        <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_logout_url'];?>
</td>
        <td><input type="text" name="logout_url" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['logout_url'];?>
" style="width: 98%" /></td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_logout_url" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_logout_url'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_language'];?>
</td>
        <td>
          <?php echo smarty_function_languages_dropdown(array('name_id'=>"ui_language",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['ui_language']),$_smarty_tpl);?>

          <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_refresh_list'];?>
" onclick="window.location='edit.php?client_id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
&page=settings&refresh_lang_list'" />
        </td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_language" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_language'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_system_time_offset'];?>
</td>
        <td><?php echo smarty_function_timezone_offset_dropdown(array('name_id'=>"timezone_offset",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['timezone_offset']),$_smarty_tpl);?>
</td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_timezone_offset" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_timezone_offset'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_sessions_timeout'];?>
</td>
        <td><input type="text" name="sessions_timeout" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['sessions_timeout'];?>
" style="width: 30px" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_minutes'];?>
</td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_sessions_timeout" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_sessions_timeout'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_date_format'];?>
</td>
        <td><input type="text" name="date_format" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['date_format'];?>
" style="width: 80px" /> <span class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['text_date_formatting_link']->value;?>
</span></td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_date_format" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_date_format'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_forms_page_default_message'];?>
</td>
        <td><textarea name="forms_page_default_message" style="width:98%"><?php echo $_smarty_tpl->tpl_vars['client_info']->value['settings']['forms_page_default_message'];?>
</textarea></td>
        <td align="center"></td>
      </tr>
      </table>

      <p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_security_settings'];?>
</p>

      <table class="list_table check_areas" cellpadding="0" cellspacing="1">
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_setting'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_setting_value'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_client_may_edit'];?>
</th>
      </tr>
      <tr>
        <td width="290" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_auto_disable_account'];?>
</td>
        <td>
          <select name="max_failed_login_attempts">
            <option value=""   <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</option>
            <option value="3"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "3") {?>selected<?php }?>>3</option>
            <option value="4"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "4") {?>selected<?php }?>>4</option>
            <option value="5"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "5") {?>selected<?php }?>>5</option>
            <option value="6"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "6") {?>selected<?php }?>>6</option>
            <option value="10" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "10") {?>selected<?php }?>>10</option>
          </select>
        </td>
        <td class="check_area" align="center"><input type="checkbox" name="may_edit_max_failed_login_attempts"
          <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_max_failed_login_attempts'] == "yes") {?>checked="checked"<?php }?> /></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_min_password_length'];?>
</td>
        <td>
          <select name="min_password_length">
            <option value=""   <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</option>
            <option value="4"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "4") {?>selected<?php }?>>4</option>
            <option value="5"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "5") {?>selected<?php }?>>5</option>
            <option value="6"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "6") {?>selected<?php }?>>6</option>
            <option value="7"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "7") {?>selected<?php }?>>7</option>
            <option value="8"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "8") {?>selected<?php }?>>8</option>
            <option value="9"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "9") {?>selected<?php }?>>9</option>
            <option value="10" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "10") {?>selected<?php }?>>10</option>
            <option value="12" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['min_password_length'] == "12") {?>selected<?php }?>>12</option>
          </select>
        </td>
        <td></td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_required_password_chars'];?>
</td>
        <td>
          <?php $_smarty_tpl->_assignInScope('required_password_chars_arr', explode(",",$_smarty_tpl->tpl_vars['client_info']->value['settings']['required_password_chars']));
?>
          <div>
            <input type="checkbox" name="required_password_chars[]" value="uppercase" id="rpc1"
              <?php if (in_array("uppercase",$_smarty_tpl->tpl_vars['required_password_chars_arr']->value)) {?>checked="checked"<?php }?> />
              <label for="rpc1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_one_char_upper'];?>
</label>
          </div>
          <div>
            <input type="checkbox" name="required_password_chars[]" value="number" id="rpc2"
              <?php if (in_array("number",$_smarty_tpl->tpl_vars['required_password_chars_arr']->value)) {?>checked="checked"<?php }?> />
              <label for="rpc2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_one_char_number'];?>
</label>
          </div>
          <div>
            <input type="checkbox" name="required_password_chars[]" value="special_char" id="rpc3"
              <?php if (in_array("special_char",$_smarty_tpl->tpl_vars['required_password_chars_arr']->value)) {?>checked="checked"<?php }?> />
              <label for="rpc3"><?php echo $_smarty_tpl->tpl_vars['phrase_one_special_char']->value;?>
</label>
          </div>
        </td>
        <td>
        </td>
      </tr>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_prevent_password_reuse'];?>
</td>
        <td>
          <select name="num_password_history">
            <option value=""   <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</option>
            <option value="1"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "1") {?>selected<?php }?>>1</option>
            <option value="2"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "2") {?>selected<?php }?>>2</option>
            <option value="3"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "3") {?>selected<?php }?>>3</option>
            <option value="4"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "4") {?>selected<?php }?>>4</option>
            <option value="5"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "5") {?>selected<?php }?>>5</option>
            <option value="6"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "6") {?>selected<?php }?>>6</option>
            <option value="7"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "7") {?>selected<?php }?>>7</option>
            <option value="8"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "8") {?>selected<?php }?>>8</option>
            <option value="9"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "9") {?>selected<?php }?>>9</option>
            <option value="10" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['num_password_history'] == "10") {?>selected<?php }?>>10</option>
          </select>
        </td>
        <td></td>
      </tr>
      </table>

      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_settings_bottom"),$_smarty_tpl);?>


      <p>
        <input type="submit" name="update_client" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
      </p>

    </form>
<?php }
}
