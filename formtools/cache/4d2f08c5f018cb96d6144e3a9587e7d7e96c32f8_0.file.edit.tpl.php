<?php
/* Smarty version 3.1.31, created on 2022-08-29 21:15:07
  from "/home/federico/formtools/formtools/themes/default/admin/forms/option_lists/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d103b3c3535_23574491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d2f08c5f018cb96d6144e3a9587e7d7e96c32f8' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/forms/option_lists/edit.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d103b3c3535_23574491 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_option_lists.gif" width="34" height="34" border="0" /></a></td>
    <td class="title">
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_option_lists'];?>
</a> <span class="joiner">&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['list_info']->value['option_list_name'];?>

    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/forms/option_lists/tab_main.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "form_fields") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/forms/option_lists/tab_form_fields.tpl'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/forms/option_lists/tab_main.tpl'),$_smarty_tpl);?>

    <?php }?>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);
}
}
