<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:58:23
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/tab_validation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d286f2d5f52_86218570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6802f34be500eba5d34109e952f0ee70bd141a10' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/tab_validation.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d286f2d5f52_86218570 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_display_rsv_rule_name')) require_once '/home/federico/formtools/formtools/modules/custom_fields/smarty_plugins/function.display_rsv_rule_name.php';
?>
  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_validation'], 'UTF-8');?>
</div>

  <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "no" && !$_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
    <?php $_smarty_tpl->_assignInScope('g_success', true);
?>
    <?php $_smarty_tpl->_assignInScope('g_message', $_smarty_tpl->tpl_vars['L']->value['text_non_editable_field_type']);
?>
  <?php }?>

  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
    <input type="hidden" name="field_type_id" value="<?php echo $_smarty_tpl->tpl_vars['field_type_info']->value['field_type_id'];?>
" />

    <div class="margin_bottom_large hint">
      <?php echo $_smarty_tpl->tpl_vars['L']->value['text_validation_tab_intro'];?>

    </div>

    <?php if (count($_smarty_tpl->tpl_vars['field_type_info']->value['validation']) == 0) {?>
      <div class="notify margin_bottom">
        <div style="padding: 6px;">
          <?php echo $_smarty_tpl->tpl_vars['L']->value['text_no_validation_rules_defined'];?>

        </div>
      </div>
    <?php } else { ?>
      <div class="sortable validation_rules" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
        <input type="hidden" class="sortable__custom_delete_handler" value="cf_ns.delete_validation_rule" />
        <ul class="header_row">
          <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
          <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_validation_rule'];?>
</li>
          <li class="col3"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_label'];?>
</li>
          <li class="col4"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_default_error_message'];?>
</li>
          <li class="col5 edit"></li>
          <li class="col6 colN del"></li>
        </ul>
        <div class="clear"></div>
        <ul class="rows">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_type_info']->value['validation'], 'i', false, 'k', 'row', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
            <li class="sortable_row">
              <div class="row_content">
                <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                  <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rule_id'];?>
" />
                  <ul>
                    <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
</li>
                    <li class="col2"><?php echo smarty_function_display_rsv_rule_name(array('rule'=>$_smarty_tpl->tpl_vars['i']->value['rsv_rule'],'L'=>$_smarty_tpl->tpl_vars['L']->value),$_smarty_tpl);?>
</li>
                    <li class="col3"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['i']->value['rule_label'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></li>
                    <li class="col4"><?php $_template = new Smarty_Internal_Template('eval:'.htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['default_error_message'], ENT_QUOTES, 'UTF-8', true), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></li>
                    <li class="col5 edit"><a href="?page=edit_validation_rule&field_type_id=<?php echo $_smarty_tpl->tpl_vars['field_type_id']->value;?>
&rule_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['rule_id'];?>
"></a></li>
                    <li class="col6 colN del"></li>
                  </ul>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ul>
        <div class="clear"></div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "yes" || $_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
    <p>
      <?php if (count($_smarty_tpl->tpl_vars['field_type_info']->value['validation']) > 1) {?>
        <input type="submit" name="update_order" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
      <?php }?>
      <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_add_validation_rule_rightarrow'];?>
" onclick="window.location='?page=add_validation_rule'" />
    </p>
    <?php }?>

  </form>
<?php }
}
