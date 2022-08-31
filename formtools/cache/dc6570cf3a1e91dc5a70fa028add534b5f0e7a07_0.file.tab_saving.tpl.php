<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:58:10
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/tab_saving.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d28629e4056_67653122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6570cf3a1e91dc5a70fa028add534b5f0e7a07' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/tab_saving.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d28629e4056_67653122 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
?>
  <div class="subtitle underline margin_top_large">STORAGE SETTINGS</div>

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
      <?php echo $_smarty_tpl->tpl_vars['L']->value['text_saving_desc'];?>

    </div>

    <div class="editor">
      <textarea id="php_processing" name="php_processing" style="width: 100%; height: 280px"><?php echo $_smarty_tpl->tpl_vars['field_type_info']->value['php_processing'];?>
</textarea>
    </div>
    <?php echo '<script'; ?>
>
      var codemirror_field = new CodeMirror.fromTextArea(document.getElementById("php_processing"), {
        mode: "php"
      });
    <?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "yes" || $_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
    <div class="margin_top_large">
      <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
    </div>
    <?php }?>

  </form>
<?php }
}
