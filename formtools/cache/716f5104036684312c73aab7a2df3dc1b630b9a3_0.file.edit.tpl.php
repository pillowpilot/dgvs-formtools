<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:56:26
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d27fa6bf4f0_69780928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716f5104036684312c73aab7a2df3dc1b630b9a3' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/edit.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d27fa6bf4f0_69780928 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_custom_fields.png" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
      <span class="joiner">&raquo;</span>
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</a>
      <span class="joiner">&raquo;</span>
      <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['field_type_info']->value['field_type_name'], $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('field_type_name',$_template->fetch()); ?>
      <?php echo $_smarty_tpl->tpl_vars['field_type_name']->value;?>

    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>

  <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_main.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "displaying") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_displaying.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "saving") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_saving.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "validation") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_validation.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "add_validation_rule") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_add_validation_rule.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "edit_validation_rule") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_edit_validation_rule.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_settings.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "add_setting") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_add_setting.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "edit_setting") {?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_edit_setting.tpl'),$_smarty_tpl);?>

  <?php } else { ?>
    <?php echo smarty_function_ft_include(array('file'=>'../../modules/custom_fields/templates/tab_main.tpl'),$_smarty_tpl);?>

  <?php }?>
  <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
