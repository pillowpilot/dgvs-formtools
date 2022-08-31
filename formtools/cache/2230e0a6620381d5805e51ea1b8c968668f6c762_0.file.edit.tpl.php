<?php
/* Smarty version 3.1.31, created on 2022-08-29 20:57:53
  from "/home/federico/formtools/formtools/themes/default/admin/clients/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d0c31556608_23660663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2230e0a6620381d5805e51ea1b8c968668f6c762' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/clients/edit.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d0c31556608_23660663 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.template_hook.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table width="100%" cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_accounts.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_clients'];?>
</a>
      <span class="joiner">&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['client_info']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['client_info']->value['last_name'];?>

      (<span class="identifier"><?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
</span>)
    </td>
    <td align="right">
      <a href="index.php?login=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_login_as_user'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/login.png" border="0" /></a>
    </td>
  </tr>
  </table>

  <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_pages_top"),$_smarty_tpl);?>


  <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/clients/tab_main.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/clients/tab_settings.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "forms") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/clients/tab_forms.tpl'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/clients/tab_main.tpl'),$_smarty_tpl);?>

    <?php }?>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


  <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_pages_bottom"),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);
}
}
