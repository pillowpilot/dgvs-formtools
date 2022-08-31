<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:58:25
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/tab_settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d287183e3e6_14909595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8de0a408fb3ef78b834d65430ff6358a895c61d6' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/tab_settings.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d287183e3e6_14909595 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
?>
  <div class="subtitle underline margin_top_large">CUSTOMIZABLE SETTINGS</div>

  <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "no" && !$_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
    <?php $_smarty_tpl->_assignInScope('g_success', true);
?>
    <?php $_smarty_tpl->_assignInScope('g_message', $_smarty_tpl->tpl_vars['L']->value['text_non_editable_field_type']);
?>
  <?php }?>
  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">

    <div class="hint margin_bottom_large">
      <?php echo $_smarty_tpl->tpl_vars['L']->value['text_settings_tab_desc'];?>

    </div>

    <?php if (count($_smarty_tpl->tpl_vars['field_type_settings']->value) == 0) {?>
      <div class="notify">
        <div style="padding: 6px"><?php echo $_smarty_tpl->tpl_vars['L']->value['notify_no_field_type_settings'];?>
</div>
      </div>
      <p>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_add_setting_rightarrow'];?>
" onclick="window.location='?page=add_setting'" />
      </p>
    <?php } else { ?>

      <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
        <input type="hidden" name="field_type_id" value="<?php echo $_smarty_tpl->tpl_vars['field_type_info']->value['field_type_id'];?>
" />
        <div class="sortable list_settings" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
          <ul class="header_row">
            <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
            <li class="col2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_setting_name'];?>
</li>
            <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</li>
            <li class="col4"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_identifier'];?>
</li>
            <li class="col5 edit"></li>
            <li class="col6 colN del"></li>
          </ul>
          <div class="clear"></div>
          <ul class="rows">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_type_settings']->value, 'i', false, 'k', 'row', array (
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
                  <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['setting_id'];?>
" />
                  <ul>
                    <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
</li>
                    <li class="col2"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['i']->value['field_label'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></li>
                    <li class="col3">
                      <?php if ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "textbox") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_textbox'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "textarea") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_textarea'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "password") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_password'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "radios") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_radio_buttons'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "checkboxes") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_checkboxes'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "select") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_dropdown'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "multi-select") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_multi_select'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['field_type'] == "option_list_or_form_field") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_option_list'];?>
 / <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_field'];?>

                      <?php }?>
                    </li>
                    <li class="col4"><?php echo $_smarty_tpl->tpl_vars['i']->value['field_setting_identifier'];?>
</li>
                    <li class="col5 edit"><a href="edit.php?page=edit_setting&setting_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['setting_id'];?>
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

        <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "yes" || $_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
        <p>
          <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
          <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_add_setting_rightarrow'];?>
" onclick="window.location='?page=add_setting'" />
        </p>
        <?php }?>

      </form>

    <?php }?>

  </form>
<?php }
}
