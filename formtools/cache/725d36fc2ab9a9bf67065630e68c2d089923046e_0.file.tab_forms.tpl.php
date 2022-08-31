<?php
/* Smarty version 3.1.31, created on 2022-08-29 20:58:34
  from "/home/federico/formtools/formtools/themes/default/admin/clients/tab_forms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d0c5ab381c9_64036540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725d36fc2ab9a9bf67065630e68c2d089923046e' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/clients/tab_forms.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d0c5ab381c9_64036540 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_forms_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.forms_dropdown.php';
echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_client_form_page'];?>

</div>

<form method="post" name="client_forms" id="client_forms" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
"
      onsubmit="return cf_ns.check_fields(this)">
    <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
"/>
    <input type="hidden" name="num_forms" id="num_forms" value="0"/>

    <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_forms_top"),$_smarty_tpl);?>


    <table class="list_table" id="client_forms_table" cellpadding="0" cellspacing="1">
        <tbody>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_form'];?>
</th>
            <th width="160"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_views'];?>
</th>
            <th width="90"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_action'];?>
</th>
            <th width="160"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_selected_views'];?>
</th>
            <th class="del"></th>
        </tr>

        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client_forms']->value, 'form_row', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['form_row']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
            <?php $_smarty_tpl->_assignInScope('form_info', $_smarty_tpl->tpl_vars['form_row']->value);
?>
            <?php $_smarty_tpl->_assignInScope('views', $_smarty_tpl->tpl_vars['form_row']->value['views']);
?>
            <?php $_smarty_tpl->_assignInScope('row', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null));
?>

            <tr id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
">
                <td valign="top">
                    <?php echo smarty_function_forms_dropdown(array('name_id'=>"form_row_".((string)$_smarty_tpl->tpl_vars['row']->value),'include_blank_option'=>true,'default'=>$_smarty_tpl->tpl_vars['form_info']->value['form_id'],'onchange'=>"cf_ns.select_form(".((string)$_smarty_tpl->tpl_vars['row']->value).", this.value)",'class'=>"selected_form",'form_status'=>''),$_smarty_tpl);?>

                </td>
                <td>
             <span id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_available_views_span">
               <select name="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_available_views[]" id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_available_views" multiple size="4">
                 
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_form_views']->value[$_smarty_tpl->tpl_vars['form_info']->value['form_id']], 'view_row', false, NULL, 'vr', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_row']->value) {
?>

                       <?php $_smarty_tpl->_assignInScope('is_found', false);
?>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'client_view_row', false, NULL, 'vr2', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client_view_row']->value) {
?>
                           <?php if ($_smarty_tpl->tpl_vars['client_view_row']->value['view_id'] == $_smarty_tpl->tpl_vars['view_row']->value['view_id']) {?>
                               <?php $_smarty_tpl->_assignInScope('is_found', true);
?>
                           <?php }?>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                       <?php if (!$_smarty_tpl->tpl_vars['is_found']->value) {?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['view_row']->value['view_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['view_row']->value['view_name'];?>
</option>
                       <?php }?>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

               </select>
             </span>
                </td>
                <td valign="center" align="center">
             <span id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_actions">
               <input type="button"
                      onclick="return ft.move_options('row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_available_views', 'row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_selected_views')"
                      value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"/>
               <input type="button"
                      onclick="return ft.move_options('row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_selected_views', 'row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_available_views')"
                      value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"/>
             </span>
                </td>
                <td>
             <span id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_selected_views_span">
               <select name="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_selected_views[]" id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
_selected_views" multiple size="4">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'view_row', false, NULL, 'vr', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_row']->value) {
?>
                   <option value="<?php echo $_smarty_tpl->tpl_vars['view_row']->value['view_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['view_row']->value['view_name'];?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

               </select>
             </span>
                </td>
                <td class="del" onclick="return cf_ns.delete_row(<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
)"></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody>
    </table>

    <?php echo '<script'; ?>
>
		cf_ns.num_rows = <?php echo count($_smarty_tpl->tpl_vars['client_forms']->value);?>
;
        
        <?php if (count($_smarty_tpl->tpl_vars['client_forms']->value) == 0) {?>
		cf_ns.add_form_row();
        <?php }?>
    <?php echo '</script'; ?>
>

    <p>
        <a href="#" onclick="return cf_ns.add_form_row()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_row'];?>
</a>
    </p>

    <?php echo smarty_function_template_hook(array('location'=>"admin_edit_client_forms_bottom"),$_smarty_tpl);?>


    <p>
        <input type="submit" name="update_client" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
    </p>

</form><?php }
}
