<?php
/* Smarty version 3.1.31, created on 2022-08-29 20:57:53
  from "/home/federico/formtools/formtools/themes/default/admin/clients/tab_main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d0c315f1bb4_32804377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c169b16334d9c94951be66765ef9ca3ed84f1b22' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/clients/tab_main.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d0c315f1bb4_32804377 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_modifier_custom_format_date')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/modifier.custom_format_date.php';
?>
    <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


    <form method="post" name="add_client" id="add_client" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return rsv.validate(this, rules)">
      <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
" />
      <input type="hidden" name="update_client" value="1" />

      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_main_top"),$_smarty_tpl);?>


      <table class="list_table" cellpadding="0" cellspacing="1">
      <tr>
        <td width="15"> </td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_logged_in'];?>
</td>
        <td class="pad_left_small medium_grey">
          <?php if ($_smarty_tpl->tpl_vars['client_info']->value['last_logged_in'] != '') {?>
            <?php echo smarty_modifier_custom_format_date($_smarty_tpl->tpl_vars['client_info']->value['last_logged_in'],$_smarty_tpl->tpl_vars['account']->value['timezone_offset'],$_smarty_tpl->tpl_vars['account']->value['date_format']);?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_never'];?>

          <?php }?>
        </td>
      </tr>
      <tr>
        <td width="15" align="center" class="red">*</td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_status'];?>
</td>
        <td>
          <input type="radio" name="account_status" id="as1" value="active" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['account_status'] == "active") {?>checked<?php }?> />
            <label for="as1" class="light_green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_active'];?>
</label>
          <input type="radio" name="account_status" id="as2" value="pending" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['account_status'] == "pending") {?>checked<?php }?> />
            <label for="as2" class="orange"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_pending'];?>
</label>
          <input type="radio" name="account_status" id="as3" value="disabled" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['account_status'] == "disabled") {?>checked<?php }?> />
            <label for="as3" class="red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_disabled'];?>
</label>
        </td>
      </tr>
      <tr>
        <td width="15" align="center" class="red">*</td>
        <td width="180" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</td>
        <td><input type="text" name="first_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_info']->value['first_name'], ENT_QUOTES, 'UTF-8', true);?>
" size="20" /></td>
      </tr>
      <tr>
        <td align="center" class="red">*</td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_name'];?>
</td>
        <td><input type="text" name="last_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_info']->value['last_name'], ENT_QUOTES, 'UTF-8', true);?>
" size="20" /></td>
      </tr>
      <tr>
        <td align="center" class="red">*</td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</td>
        <td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['email'];?>
" size="50" /></td>
      </tr>
      <tr>
        <td class="red"> </td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_company_name'];?>
</td>
        <td><input type="text" name="company_name" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['settings']['company_name'];?>
" style="width: 98%;" /></td>
      </tr>
      <tr>
        <td class="red"></td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_notes'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_not_visible_to_client'];?>
</td>
        <td><textarea name="client_notes" style="width:98%; height: 80px;"><?php echo $_smarty_tpl->tpl_vars['client_info']->value['settings']['client_notes'];?>
</textarea></td>
      </tr>
      </table>

      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_main_middle"),$_smarty_tpl);?>


      <p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_change_login_info'];?>
</p>

      <?php if ($_smarty_tpl->tpl_vars['has_extra_password_requirements']->value) {?>
      <div class="grey_box margin_bottom_large">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_password_requirements_c'];?>

        <ul class="margin_bottom_small margin_top_small">
          <?php if ($_smarty_tpl->tpl_vars['has_min_password_length']->value) {?><li><?php echo $_smarty_tpl->tpl_vars['phrase_password_min']->value;?>
</li><?php }?>
          <?php if (in_array("uppercase",$_smarty_tpl->tpl_vars['required_password_chars']->value)) {?><li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_password_one_uppercase'];?>
</li><?php }?>
          <?php if (in_array("number",$_smarty_tpl->tpl_vars['required_password_chars']->value)) {?><li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_password_one_number'];?>
</li><?php }?>
          <?php if (in_array("special_char",$_smarty_tpl->tpl_vars['required_password_chars']->value)) {?><li><?php echo $_smarty_tpl->tpl_vars['password_special_char']->value;?>
</li><?php }?>
        </ul>
      </div>
      <?php }?>

      <table class="list_table" cellpadding="0" cellspacing="1">
      <tr>
        <td width="15" align="center" class="red">*</td>
        <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_username'];?>
</td>
        <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['username'];?>
" size="20" /></td>
      </tr>
      <tr>
        <td> </td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_new_password'];?>
</td>
        <td><input type="password" name="password" value="" size="20" autocomplete="off" /></td>
      </tr>
      <tr>
        <td> </td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_new_password'];?>
</td>
        <td><input type="password" name="password_2" value="" size="20" autocomplete="off" /></td>
      </tr>
      </table>

      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_main_bottom"),$_smarty_tpl);?>


      <p>
        <input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
      </p>

    </form>
<?php }
}
