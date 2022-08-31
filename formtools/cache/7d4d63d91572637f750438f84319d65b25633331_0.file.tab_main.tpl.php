<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:56:26
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/tab_main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d27fa743898_65358912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4d63d91572637f750438f84319d65b25633331' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/tab_main.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d27fa743898_65358912 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_field_sizes_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.field_sizes_dropdown.php';
?>
<div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_main_settings'], 'UTF-8');?>
</div>

<?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "no" && !$_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
    <?php $_smarty_tpl->_assignInScope('g_success', true);
?>
    <?php $_smarty_tpl->_assignInScope('g_message', $_smarty_tpl->tpl_vars['L']->value['text_non_editable_field_type']);
}
echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
    <table cellspacing="1" cellpadding="0" class="list_table main_tab_table margin_bottom_large">
        <tr>
            <td class="pad_left_small" valign="top" width="200"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_type_name'];?>
</td>
            <td>
                <input type="text" name="field_type_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_info']->value['field_type_name'], ENT_QUOTES, 'UTF-8', true);?>
"
                       class="full_width"/>
                <div class="hint"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_field_type_name_desc'];?>
</div>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small" valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_type_identifier'];?>
</td>
            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['field_type_info']->value['field_type_identifier'];?>
</td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_type_group'];?>
</td>
            <td>
                <select name="group_id">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_type_groups']->value, 'group_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group_info']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
"
                                <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['group_id'] == $_smarty_tpl->tpl_vars['group_info']->value['group_id']) {?>selected<?php }?>><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['group_info']->value['group_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </select>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_is_file_field'];?>
</td>
            <td>
                <input type="radio" name="is_file_field" value="yes" id="iff1"
                       <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_file_field'] == "yes") {?>checked<?php }?>
                /><label for="iff1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
                <input type="radio" name="is_file_field" value="no" id="iff2"
                       <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_file_field'] == "no") {?>checked<?php }?>
                /><label for="iff2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
                <div class="hint"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_file_field_desc'];?>
</div>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_is_date_field'];?>
</td>
            <td>
                <input type="radio" name="is_date_field" value="yes" id="idf1"
                       <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_date_field'] == "yes") {?>checked<?php }?>
                /><label for="idf1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
                <input type="radio" name="is_date_field" value="no" id="idf2"
                       <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_date_field'] == "no") {?>checked<?php }?>
                /><label for="idf2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
                <div class="hint"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_date_field_desc'];?>
</div>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_compatible_field_sizes'];?>
</td>
            <td>
                <?php echo smarty_function_field_sizes_dropdown(array('name'=>"compatible_field_sizes[]",'multiple'=>"true",'size'=>"5",'default'=>$_smarty_tpl->tpl_vars['compatible_field_sizes']->value),$_smarty_tpl);?>

                <div class="hint"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_field_size_desc'];?>
</div>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_raw_field_type_map'];?>
</td>
            <td>
                <select name="raw_field_type_map" id="raw_field_type_map">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</option>
                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_types'];?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['raw_field_types']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['field_type_info']->value['raw_field_type_map']) {?>selected<?php }?>><?php $_template = new Smarty_Internal_Template('eval:'.((string)$_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['i']->value]), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </optgroup>
                </select>

                <select name="raw_field_type_map_multi_select_id" id="raw_field_type_map_multi_select_id"
                        <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['raw_field_type_map'] != "radio-buttons" && $_smarty_tpl->tpl_vars['field_type_info']->value['raw_field_type_map'] != "checkboxes" && $_smarty_tpl->tpl_vars['field_type_info']->value['raw_field_type_map'] != "select" && $_smarty_tpl->tpl_vars['field_type_info']->value['raw_field_type_map'] != "multi-select") {?>class="hidden"<?php }?>>
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_select_setting_containing_option_list'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_type_info']->value['settings'], 'setting_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['setting_info']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['setting_info']->value['field_type'] == "option_list_or_form_field") {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['setting_info']->value['setting_id'];?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['raw_field_type_map_multi_select_id'] == $_smarty_tpl->tpl_vars['setting_info']->value['setting_id']) {?>selected="selected"<?php }?>>
                                <?php $_template = new Smarty_Internal_Template('eval:'.((string)$_smarty_tpl->tpl_vars['setting_info']->value['field_label']), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
                            </option>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </select>
                <div class="hint"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_raw_field_type_desc'];?>
</div>
            </td>
        </tr>
    </table>

    <div>
        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
            <input type="submit" name="reset_field_type"" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_reset_field_type'];?>
"/>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "yes" || $_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
            <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
        <?php }?>
    </div>
</form>
<?php }
}
