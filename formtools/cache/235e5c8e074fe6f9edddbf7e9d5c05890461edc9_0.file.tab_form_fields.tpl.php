<?php
/* Smarty version 3.1.31, created on 2022-08-29 21:17:48
  from "/home/federico/formtools/formtools/themes/default/admin/forms/option_lists/tab_form_fields.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d10dc9cb9a7_03034268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '235e5c8e074fe6f9edddbf7e9d5c05890461edc9' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/forms/option_lists/tab_form_fields.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d10dc9cb9a7_03034268 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_display_field_type_name')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.display_field_type_name.php';
?>
  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <?php if (count($_smarty_tpl->tpl_vars['form_fields']->value) == 0) {?>

    <div class="notify margin_bottom_large">
      <div style="padding:6px">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_unused_option_list'];?>

      </div>
    </div>

  <?php } else { ?>

    <div class="margin_bottom_large">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_used_option_list'];?>

    </div>

    <table cellspacing="1" cellpadding="0" class="list_table margin_bottom_large">
    <tr>
      <th width="40"> </th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_form'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</th>
      <th width="100"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_field'], 'UTF-8');?>
</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_fields']->value, 'field_info', false, NULL, 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_info']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
      <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
      <tr>
        <td align="center" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</td>
        <td class="pad_left_small">
          <?php echo $_smarty_tpl->tpl_vars['field_info']->value['form_name'];?>

          <?php if (in_array($_smarty_tpl->tpl_vars['field_info']->value['form_id'],$_smarty_tpl->tpl_vars['incomplete_forms']->value)) {?>
            <span class="red">(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_incomplete'];?>
)</span>
          <?php }?>
        </td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['field_info']->value['field_title'];?>
</td>
        <td class="pad_left_small"><?php echo smarty_function_display_field_type_name(array('field_type_id'=>$_smarty_tpl->tpl_vars['field_info']->value['field_type_id']),$_smarty_tpl);?>
</td>
        <td align="center">
          <?php if (in_array($_smarty_tpl->tpl_vars['field_info']->value['form_id'],$_smarty_tpl->tpl_vars['incomplete_forms']->value)) {?>
            <span class="light_grey"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_field'], 'UTF-8');?>
</span>
          <?php } else { ?>
            <a href="../edit/?page=fields&field_id=<?php echo $_smarty_tpl->tpl_vars['field_info']->value['field_id'];?>
&form_id=<?php echo $_smarty_tpl->tpl_vars['field_info']->value['form_id'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_field'], 'UTF-8');?>
</a>
          <?php }?>
        </td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </table>

  <?php }
}
}
