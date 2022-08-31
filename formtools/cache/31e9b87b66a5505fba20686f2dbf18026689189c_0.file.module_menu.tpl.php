<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:55:30
  from "/home/federico/formtools/formtools/themes/default/module_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d27c20386d6_29673687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e9b87b66a5505fba20686f2dbf18026689189c' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/module_menu.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d27c20386d6_29673687 (Smarty_Internal_Template $_smarty_tpl) {
?>


  <div class="menu_items">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_nav']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['i']->value['is_submenu'] == "no") {?>
      <div class="nav_link"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"<?php echo (($tmp = @$_smarty_tpl->tpl_vars['link_id']->value)===null||$tmp==='' ? '' : $tmp);?>
><?php echo $_smarty_tpl->tpl_vars['i']->value['display_text'];?>
</a></div>
    <?php } else { ?>
      <div class="nav_link_submenu"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
">&#8212; <?php echo $_smarty_tpl->tpl_vars['i']->value['display_text'];?>
</a></div>
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </div>
<?php }
}
