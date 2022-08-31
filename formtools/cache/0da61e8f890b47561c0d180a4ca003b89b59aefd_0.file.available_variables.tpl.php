<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:57:07
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/available_variables.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d2823bcaa62_50977182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da61e8f890b47561c0d180a4ca003b89b59aefd' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/available_variables.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d2823bcaa62_50977182 (Smarty_Internal_Template $_smarty_tpl) {
?>
          <table cellspacing="1" cellpadding="0" width="100%" class="var_list_table">
          <tr>
            <th width="50%"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_core_variables'];?>
</th>
            <th width="50%"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_custom_field_setting_variables'];?>
</th>
          </tr>
          <tr>
            <td valign="top">
              <table>
              <tr>
                <td width="120" class="blue">$FORM_ID</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_current_form_id'];?>
</td>
              </tr>
              <tr>
                <td class="blue">$SUBMISSION_ID</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_current_submission_id'];?>
</td>
              </tr>
              <tr>
                <td class="blue">$FIELD_ID</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_current_field_id'];?>
</td>
              </tr>
              <tr>
                <td class="blue">$NAME</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_form_field_name'];?>
</td>
              </tr>
              <tr>
                <td class="blue">$COLNAME</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_db_column_name'];?>
</td>
              </tr>
              <tr>
                <td class="blue">$VALUE</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_value_stored_in_field'];?>
</td>
              </tr>
              
              <?php if ($_smarty_tpl->tpl_vars['context']->value == "view") {?>
              <tr>
                <td class="blue">$CONTEXTPAGE</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_context_desc'];?>
</td>
              </tr>
              <?php }?>
              <tr>
                <td class="blue">$ACCOUNT_INFO</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_account_info_desc'];?>
</td>
              </tr>
              <tr>
                <td class="blue">$g_root_dir</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_from_config_file'];?>
</td>
              </tr>
              <tr>
                <td class="blue">$g_root_url</td>
                <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_from_config_file'];?>
</td>
              </tr>
              </table>
            </td>
            <td valign="top">
              <table>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_type_settings']->value, 'setting');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
?>
              <tr>
                <td class="blue">$<?php echo $_smarty_tpl->tpl_vars['setting']->value['field_setting_identifier'];?>
</td>
                <td></td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

              </table>
            </td>
          </tr>
          </tbody></table>
<?php }
}
