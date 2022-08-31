<?php
/* Smarty version 3.1.31, created on 2022-08-29 21:15:07
  from "/home/federico/formtools/formtools/themes/default/admin/forms/option_lists/tab_main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d103b49dad9_45521430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b613ad06ca806bb5b334e6b3b5b81183ed5525a' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/forms/option_lists/tab_main.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d103b49dad9_45521430 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.template_hook.php';
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" id="option_list_form" method="post">
    <input type="hidden" name="update_page" value="1"/>
    <input type="hidden" name="num_rows" id="num_rows" value="<?php echo $_smarty_tpl->tpl_vars['total_options']->value;?>
"/>

    <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['num_fields_using_option_list']->value > 1) {?>
        <div class="hint margin_bottom_large">
            <?php echo $_smarty_tpl->tpl_vars['text_option_list_used_by_fields']->value;?>

        </div>
    <?php }?>

    <table cellspacing="1" cellpadding="1" class="margin_bottom_large">
        <tr>
            <td valign="top" width="160" class="pad_left_small">
                <label for="option_list_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_option_list_name'];?>
</label>
            </td>
            <td>
                <input type="text" name="option_list_name" id="option_list_name" maxlength="100" style="width:300px"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_info']->value['option_list_name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                <div class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_group_name_explanation'];?>
</div>
            </td>
        </tr>
        <tr>
            <td valign="top" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_options_q'];?>
</td>
            <td>
                <input type="radio" name="is_grouped" id="go1" value="yes"
                       <?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "yes") {?>checked<?php }?> />
                <label for="go1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
                <input type="radio" name="is_grouped" id="go2" value="no"
                       <?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "no") {?>checked<?php }?> />
                <label for="go2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
                <div class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_option_list_group_explanation'];?>
</div>
            </td>
        </tr>
    </table>

    <div class="sortable_groups" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
        <input type="hidden" class="sortable__class" value="edit_option_list groupable"/>
        <input type="hidden" class="sortable__delete_tooltip" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_delete_row'];?>
"/>
        <input type="hidden" class="sortable__new_group_name" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_name'];?>
"/>
        <input type="hidden" class="sortable__delete_group_handler" value="sf_ns.delete_group"/>

        
        <?php if (count($_smarty_tpl->tpl_vars['list_info']->value['options']) == 0) {?>
            <div class="sortable_group">
                <div class="sortable_group_header<?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "no") {?> hidden<?php }?>">
                    <div class="sort"></div>
                    <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_name'];?>
</label>
                    <input type="text" name="group_name_NEW1" class="group_name"
                           value="<?php if ($_smarty_tpl->tpl_vars['group_info']->value['group_name']) {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['group_info']->value['group_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>"/>
                    <div class="delete_group"></div>
                    <input type="hidden" class="group_order" value="NEW1"/>
                    <div class="clear"></div>
                </div>
                <div class="sortable groupable edit_option_list">
                    <ul class="header_row">
                        <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
                        <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_value'];?>
</li>
                        <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_text'];?>
</li>
                        <li class="col4 colN del"></li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="rows">
                        <li class="sortable_row empty_group">
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
                <div class="sortable_group_footer padded_footer<?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "no") {?> hidden<?php }?>">
                    <div class="right pad_right pad_bottom">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add'];?>
 <input type="text" class="num_rows_to_add_to_group" size="3" value="1"/>
                        <input type="button" class="add_rows_to_group_button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field_sp'];?>
"/>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('running_row_count', 0);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_info']->value['options'], 'curr_group_info', false, NULL, 'group', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_group_info']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('group_info', $_smarty_tpl->tpl_vars['curr_group_info']->value['group_info']);
?>
        <?php $_smarty_tpl->_assignInScope('options', $_smarty_tpl->tpl_vars['curr_group_info']->value['options']);
?>

        <div class="sortable_group">
            <div class="sortable_group_header<?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "no") {?> hidden<?php }?>">
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
            <div class="sortable groupable edit_option_list">
                <ul class="header_row">
                    <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
                    <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_value'];?>
</li>
                    <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_text'];?>
</li>
                    <li class="col4 colN del"></li>
                </ul>
                <div class="clear"></div>
                <ul class="rows connected_sortable">
                    <li class="sortable_row empty_group<?php if (count($_smarty_tpl->tpl_vars['options']->value) != 0) {?> hidden<?php }?>">
                        <div class="clear"></div>
                    </li>
                    <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, NULL, 'row', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
                    <?php $_smarty_tpl->_assignInScope('running_row_count', $_smarty_tpl->tpl_vars['running_row_count']->value+1);
?>
                    <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
                    <?php if ($_smarty_tpl->tpl_vars['option']->value['is_new_sort_group'] == "yes") {?>
                    <?php if ($_smarty_tpl->tpl_vars['previous_item']->value != '') {?>
            </div>
            <div class="clear"></div>
            </li>
            <?php }?>
            <li class="sortable_row">
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?>
                    <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', "yes");
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', $_smarty_tpl->tpl_vars['options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null)]['is_new_sort_group']);
?>
                <?php }?>
                <div class="row_content<?php if ($_smarty_tpl->tpl_vars['next_item_is_new_sort_group']->value == 'no') {?> grouped_row<?php }?>">
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('previous_item', $_smarty_tpl->tpl_vars['option']->value);
?>

                    <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                        <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['running_row_count']->value;?>
"/>
                        <ul>
                            <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</li>
                            <li class="col2"><input type="text" name="field_option_value_<?php echo $_smarty_tpl->tpl_vars['running_row_count']->value;?>
"
                                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_value'], ENT_QUOTES, 'UTF-8', true);?>
"/></li>
                            <li class="col3"><input type="text" name="field_option_text_<?php echo $_smarty_tpl->tpl_vars['running_row_count']->value;?>
"
                                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'UTF-8', true);?>
"/></li>
                            <li class="col4 colN del"></li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?>
                </div>
                <div class="clear"></div>
            </li>
            <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </ul>
            <div class="clear"></div>
        </div>
        <div class="sortable_group_footer padded_footer<?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "no") {?> hidden<?php }?>">
            <div class="right pad_right pad_bottom">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add'];?>
 <input type="text" class="num_rows_to_add_to_group" size="3" value="1"/>
                <input type="button" class="add_rows_to_group_button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field_sp'];?>
"/>
            </div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <div class="clear"></div>
    </div>

    <div class="add_group_section <?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "no") {?> hidden<?php }?>">
        <a href="#" class="add_group_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_new_group_rightarrow'];?>
</a>
    </div>

    <div style="float: left" class="margin_top_large">
        <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
        <?php echo smarty_function_template_hook(array('location'=>"edit_option_list_main"),$_smarty_tpl);?>

    </div>
</form>

<div class="margin_top right add_ungrouped_rows<?php if ($_smarty_tpl->tpl_vars['list_info']->value['is_grouped'] == "yes") {?> hidden<?php }?>">
    <form action="" method="post">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add'];?>
 <input type="text" id="num_rows_to_add" size="3" value="1"/>
        <input type="submit" id="add_rows_button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field_sp'];?>
"/>
    </form>
</div>


<div class="clear"></div>

<div class="grey_box margin_top_large">
    <div><a href="#" id="option_lists_advanced_settings_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_import_option_list_rightarrow'];?>
</a></div>
    <div class="hidden" id="option_lists_advanced_settings">
        <div id="smart_fill_messages"></div>
        <table cellspacing="1" cellpadding="0" width="100%" class="margin_bottom_large" height="40">
            <tr>
                <td></td>
                <td class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_field_name'];?>
</td>
                <td class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_url'];?>
</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td nowrap><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_smart_fill_fields_from_c'];?>
</td>
                <td><input type="text" name="smart_fill_source_form_field" id="smart_fill_source_form_field"
                           style="width:150px"/></td>
                <td><input type="text" name="smart_fill_source_url" id="smart_fill_source_url" style="width:250px"/>
                </td>
                <td><input type="button" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_smart_fill'], 'UTF-8');?>
" onclick="sf_ns.smart_fill_field()"/>
                </td>
                <td width="50" align="center">
                    <div id="ajax_activity" style="display:none"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/ajax_activity_light_grey.gif"/>
                    </div>
                    <div id="ajax_no_activity"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/ajax_no_activity_light_grey.gif"/></div>
                </td>
            </tr>
        </table>

        <div class="margin_top_large">
            <div style="float:right"><a href="https://docs.formtools.org/userdoc/form_management/option_lists/"
                                        target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_smart_fill_user_documentation'];?>
</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div id="upload_files_text" style="display:none">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_smart_fill_option_list_problem'];?>


    <form action="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/code/actions.php?action=upload_scraped_page_for_smart_fill"
          target="hidden_iframe" method="post" enctype="multipart/form-data"
          onsubmit="return sf_ns.validate_upload_file(this)">
        <input type="hidden" name="num_pages" value="1"/>

        <table cellspacing="0" cellpadding="0" class="margin_top margin_bottom">
            <tr>
                <td width="90"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_page'];?>
</td>
                <td><input type="file" name="form_page_1"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_upload_file'];?>
" class="margin_top_small"/></td>
            </tr>
        </table>
    </form>
</div>

<div class="hidden add_group_popup" id="add_group_popup">
    <input type="hidden" class="add_group_popup_title" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_new_option_list_group'];?>
"/>
    <input type="hidden" class="sortable__add_group_handler" value="sf_ns.add_group"/>
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
        <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_value'];?>
</li>
        <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_text'];?>
</li>
        <li class="col4 colN del"></li>
    </ul>
</div>
<div id="sortable__new_group_footer" class="hidden">
    <div class="sortable_group_footer padded_footer">
        <div class="right pad_right pad_bottom">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add'];?>
 <input type="text" class="num_rows_to_add_to_group" size="3" value="1"/>
            <input type="button" class="add_rows_to_group_button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field_sp'];?>
"/>
        </div>
    </div>
</div>

<iframe name="hidden_iframe" id="hidden_iframe" src="" style="width: 0px; height: 0px" frameborder="0"
        onload="sf_ns.log_form_page_as_loaded()"></iframe>

<?php }
}
