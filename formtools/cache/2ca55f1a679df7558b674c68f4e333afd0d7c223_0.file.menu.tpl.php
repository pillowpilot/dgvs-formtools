<?php
/* Smarty version 3.1.31, created on 2022-08-27 17:54:50
  from "/home/federico/formtools/formtools/themes/default/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630a3e4a5b2729_62727500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ca55f1a679df7558b674c68f4e333afd0d7c223' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/menu.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630a3e4a5b2729_62727500 (Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php $_smarty_tpl->_assignInScope('is_current_parent_menu', false);
?>

  <div class="menu_items">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_items']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>

    <?php $_smarty_tpl->_assignInScope('link_id', '');
?>

    
    <?php if ($_smarty_tpl->tpl_vars['i']->value['is_submenu'] == "no") {?>

      
      <?php if (isset($_smarty_tpl->tpl_vars['nav_parent_page_url']->value) && $_smarty_tpl->tpl_vars['i']->value['url'] == $_smarty_tpl->tpl_vars['nav_parent_page_url']->value) {?>
        <?php $_smarty_tpl->_assignInScope('is_current_parent_menu', true);
?>
      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('is_current_parent_menu', false);
?>
      <?php }?>

      <div class="nav_link"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"<?php echo $_smarty_tpl->tpl_vars['link_id']->value;?>
 class="no_border"><?php echo $_smarty_tpl->tpl_vars['i']->value['display_text'];?>
</a></div>

    
    <?php } else { ?>
      <div class="nav_link_submenu"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"<?php echo $_smarty_tpl->tpl_vars['link_id']->value;?>
 class="no_border">&#8212; <?php echo $_smarty_tpl->tpl_vars['i']->value['display_text'];?>
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
