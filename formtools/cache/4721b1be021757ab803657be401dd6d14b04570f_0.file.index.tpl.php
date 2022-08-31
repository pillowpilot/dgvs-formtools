<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:55:29
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d27c1f05c75_32476913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4721b1be021757ab803657be401dd6d14b04570f' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/index.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d27c1f05c75_32476913 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0">
    <tr>
        <td width="45"><a href="index.php"><img src="images/icon_custom_fields.png" border="0" width="34" height="34"/></a>
        </td>
        <td class="title">
            <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
            <span class="joiner">&raquo;</span>
            <?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>

        </td>
    </tr>
</table>

<?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_module_intro'];?>

</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" id="custom_fields_form">
    <input type="hidden" name="update_page" value="1"/>

    
    <input type="hidden" name="new_field_type_id" id="new_field_type_id" value=""/>

    <div class="sortable_groups" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
        <input type="hidden" class="sortable__custom_delete_handler" value="cf_ns.delete_row"/>
        <input type="hidden" class="sortable__delete_group_handler" value="cf_ns.delete_group"/>
        <input type="hidden" class="sortable__class" value="edit_custom_fields"/>
        <input type="hidden" class="sortable__edit_tooltip" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_edit_field_type'];?>
"/>
        <input type="hidden" class="sortable__delete_tooltip" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_delete_field_type'];?>
"/>
        <input type="hidden" class="sortable__new_group_name" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_name'];?>
"/>
        <input type="hidden" name="disabled_field_types" id="disabled_field_types" value="" />

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_field_types']->value, 'curr_group_info', false, NULL, 'group', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_group_info']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('group_info', $_smarty_tpl->tpl_vars['curr_group_info']->value['group']);
?>
            <?php $_smarty_tpl->_assignInScope('field_types', $_smarty_tpl->tpl_vars['curr_group_info']->value['field_types']);
?>
            <div class="sortable_group">
                <div class="sortable_group_header">
                    <div class="sort"></div>
                    <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_name'];?>
</label>
                    <input type="text" name="group_name_<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
" class="group_name"
                           value="<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['group_info']->value['group_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>"/>
                    <div class="delete_group"></div>
                    <input type="hidden" class="group_order" value="<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
"/>
                    <div class="clear"></div>
                </div>
                <div class="sortable edit_custom_fields">
                    <ul class="header_row">
                        <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
                        <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</li>
                        <li class="col3"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_identifier'];?>
</li>
                        <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_validation'];?>
</li>
                        <li class="col5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_settings'];?>
</li>
                        <li class="col6"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_enabled'];?>
</li>
                        <li class="col7 edit"></li>
                        <li class="col8 colN del"></li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="rows check_areas connected_sortable<?php if (count($_smarty_tpl->tpl_vars['field_types']->value) > 0) {?> has_rows_onload<?php }?>">
                        <li class="sortable_row empty_group<?php if (count($_smarty_tpl->tpl_vars['field_types']->value) != 0) {?> hidden<?php }?>">
                            <div class="clear"></div>
                        </li>
                        <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_types']->value, 'i', false, 'k', 'row', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
                            <li class="sortable_row<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                                <div class="row_content">
                                    <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                                        <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['field_type_id'];?>
"/>
                                        <ul>
                                            <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
</li>
                                            <li class="col2"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['i']->value['field_type_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></li>
                                            <li class="col3"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['i']->value['field_type_identifier'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></li>
                                            <li class="col4 check_area"><a
                                                        href="edit.php?page=validation&field_type_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['field_type_id'];?>
"><?php echo count($_smarty_tpl->tpl_vars['i']->value['validation']);?>
</a>
                                            </li>
                                            <li class="col5 check_area"><a
                                                        href="edit.php?page=settings&field_type_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['field_type_id'];?>
"><?php echo count($_smarty_tpl->tpl_vars['i']->value['settings']);?>
</a>
                                            </li>
                                            <li class="col5 check_area">
                                                <input type="checkbox" name="enabled_field_types[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['field_type_id'];?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['i']->value['is_enabled'] == "yes") {?>checked="checked"<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['i']->value['field_type_identifier'] === "textbox" || $_smarty_tpl->tpl_vars['i']->value['field_type_identifier'] === "date") {?>disabled="disabled"<?php }?> />
                                            </li>
                                            <li class="col7 edit"><a
                                                        href="edit.php?field_type_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['field_type_id'];?>
"></a></li>
                                            <li class="col8 colN <?php if ($_smarty_tpl->tpl_vars['i']->value['is_editable'] == "yes") {?> del<?php }
if ($_smarty_tpl->tpl_vars['i']->value['non_editable_info']) {?> info<?php }?>"></li>
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
                </div>
                <div class="clear"></div>
                <div class="sortable_group_footer">
                    <a href="#" class="add_field_link"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_add_field_type_rightarrow'];?>
</a>
                </div>
            </div>
            <div class="clear"></div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>

    <div class="margin_bottom_large">
        <a href="#" class="add_group_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_new_group_rightarrow'];?>
</a>
    </div>

    <div class="margin_bottom_large">
        <input type="submit" name="update" id="update_field_types" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_update'], 'UTF-8');?>
"/>
    </div>

</form>

<div class="hidden" id="add_field_popup">
    <div class="add_field_error hidden error"></div>
    <table cellspacing="1" cellpadding="3" width="100%">
        <tr>
            <td width="140" valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_name'];?>
</td>
            <td><input type="text" class="field_type_name"/></td>
        </tr>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_type_identifier'];?>
</td>
            <td>
                <input type="text" class="field_type_identifier"/>
                <div class="hint"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_field_type_identifier_desc'];?>
</div>
            </td>
        </tr>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_group'];?>
</td>
            <td>
                <select class="group_id" id="original_field_group_id">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_type_groups']->value, 'group_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group_info']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['group_info']->value['group_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </select>
            </td>
        </tr>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_base_field_type_on'];?>
</td>
            <td>
                <select class="original_field_type_id">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_new_field_b'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_field_types']->value, 'curr_group_info', false, NULL, 'group', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_group_info']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('field_types', $_smarty_tpl->tpl_vars['curr_group_info']->value['field_types']);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_types']->value, 'i', false, 'k', 'row', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['field_type_id'];?>
"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['i']->value['field_type_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </select>
            </td>
        </tr>
    </table>
</div>

<div class="hidden add_group_popup" id="add_group_popup">
    <input type="hidden" class="add_group_popup_title" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_create_new_custom_field_group'];?>
"/>
    <input type="hidden" class="sortable__add_group_handler" value="cf_ns.create_new_group"/>
    <div class="add_field_error hidden error"></div>
    <table cellspacing="1" cellpadding="3" width="100%">
        <tr>
            <td width="140"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_name'];?>
</td>
            <td><input type="text" class="new_group_name"/></td>
        </tr>
    </table>
</div>

<!-- for the add group functionality -->
<div id="sortable__new_group_header" class="hidden">
    <ul class="header_row">
        <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
        <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</li>
        <li class="col3"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_identifier'];?>
</li>
        <li class="col4"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_compatible_field_sizes'];?>
</li>
        <li class="col5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_validation'];?>
</li>
        <li class="col6"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_settings'];?>
</li>
        <li class="col7 edit"></li>
        <li class="col8 colN del"></li>
    </ul>
</div>
<div id="sortable__new_group_footer" class="hidden">
    <div class="sortable_group_footer">
        <a href="#" class="add_field_link"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_add_field_type_rightarrow'];?>
</a>
    </div>
</div>

<div id="delete_group_popup" class="hidden">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_please_wait'];?>

</div>

<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
