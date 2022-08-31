<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:57:07
  from "/home/federico/formtools/formtools/modules/custom_fields/templates/tab_displaying.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d2823bad2c9_92455757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12f0606d4468c5df96d71a95f14ae4c2e62f579f' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/custom_fields/templates/tab_displaying.tpl',
      1 => 1546059763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./available_variables.tpl' => 2,
  ),
),false)) {
function content_630d2823bad2c9_92455757 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
?>
  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_display_settings'], 'UTF-8');?>
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

    <div class="inner_tabset" id="custom_fields_edit_field_displaying">
      <div class="tab_row fourCols">
        <div class="inner_tab1 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value == 1) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_view_field'];?>
</div>
        <div class="inner_tab2 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value == 2) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_edit_field'];?>
</div>
        <div class="inner_tab3 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value == 3) {?>selected<?php }?>">CSS</div>
        <div class="inner_tab4 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value == 4) {?>selected<?php }?>">Javascript</div>
      </div>
      <div class="inner_tab_content">
        <div class="inner_tab_content1 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value != 1 && $_smarty_tpl->tpl_vars['current_inner_tab']->value != '') {?>hidden<?php }?>">

          <table width="100%">
          <tr>
            <td width="140" valign="top" rowspan="3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_rendering_type'];?>
</td>
            <td width="80" class="italic green"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_fastest'];?>
</td>
            <td colspan="2">
              <input type="radio" name="rendering_type" id="rt1" value="none"
                <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_rendering_type'] == "none") {?>checked<?php }?> />
                <label for="rt1"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_output_db_value_directly'];?>
</label>
            </td>
          </tr>
          <tr>
            <td width="80" class="italic green" valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_fast'];?>
</td>
            <td width="160" valign="top">
              <input type="radio" name="rendering_type" id="rt2" value="php"
                <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_rendering_type'] == "php") {?>checked<?php }?> />
                <label for="rt2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_php_function'];?>
</label>
            </td>
            <td>
              <select name="view_field_php_function_source">
                <option value="core" <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_php_function_source'] == "core") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['word_core'];?>
</option>
                <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module_info']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['module_info']->value['module_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_php_function_source'] == $_smarty_tpl->tpl_vars['module_info']->value['module_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['module_info']->value['module_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </optgroup>
              </select><br />

              <input type="text" name="function_name" id="function_name" style="width:100%" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_php_function'], ENT_QUOTES, 'UTF-8', true);?>
" />
            </td>
          </tr>
          <tr>
            <td width="80" class="italic orange"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_slower'];?>
</td>
            <td colspan="2">
              <input type="radio" name="rendering_type" id="rt3" value="smarty"
                <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_rendering_type'] == "smarty") {?>checked<?php }?> />
                <label for="rt3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_smarty_content'];?>
</label>
            </td>
          </tr>
          </table>

          <div id="view_field_smarty_markup_section" <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_rendering_type'] != "smarty") {?>style="display: none"<?php }?>>
            <div class="hint margin_bottom_large">
              <?php echo $_smarty_tpl->tpl_vars['L']->value['text_view_field_smarty_desc'];?>

            </div>
            <div class="editor">
              <textarea id="view_field_smarty_markup" name="view_field_smarty_markup" style="height: 300px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_info']->value['view_field_smarty_markup'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">
              
              var view_field_smarty_markup_field = new CodeMirror.fromTextArea(document.getElementById("view_field_smarty_markup"), {
                mode: {
                  name: "smarty",
                  baseMode: "text/html",
                  version: 3
                }
              });
              
            <?php echo '</script'; ?>
>
            <?php $_smarty_tpl->_assignInScope('context', "view");
?>
            <?php $_smarty_tpl->_subTemplateRender("file:./available_variables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        </div>
        <div class="inner_tab_content2 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value != 2) {?>hidden<?php }?>">
          <div class="hint margin_bottom_large">
            <?php echo $_smarty_tpl->tpl_vars['L']->value['text_edit_field_smarty_desc'];?>

          </div>
          <div class="editor">
            <textarea id="edit_field_smarty_markup" name="edit_field_smarty_markup" style="height: 300px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_info']->value['edit_field_smarty_markup'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
          </div>
          <?php echo '<script'; ?>
>
            var edit_field_markup_field = new CodeMirror.fromTextArea(document.getElementById("edit_field_smarty_markup"), {
              mode: {
                name: "smarty",
                baseMode: "text/html",
                version: 3
              }
            });
          <?php echo '</script'; ?>
>
          <?php $_smarty_tpl->_assignInScope('context', "edit");
?>
          <?php $_smarty_tpl->_subTemplateRender("file:./available_variables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>
        <div class="inner_tab_content3 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value != 3) {?>hidden<?php }?>">
          <div class="hint margin_bottom_large"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_css_desc'];?>
</div>
          <div class="editor">
            <textarea id="resources_css" name="resources_css" style="height: 400px"><?php echo $_smarty_tpl->tpl_vars['field_type_info']->value['resources_css'];?>
</textarea>
          </div>
          <?php echo '<script'; ?>
>
            var include_css_field = new CodeMirror.fromTextArea(document.getElementById("resources_css"), {
              mode: "css"
            });
          <?php echo '</script'; ?>
>
        </div>
        <div class="inner_tab_content4 <?php if ($_smarty_tpl->tpl_vars['current_inner_tab']->value != 4) {?>hidden<?php }?>">
          <div class="hint margin_bottom_large"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_js_desc'];?>
</div>
          <div class="editor">
            <textarea id="resources_js" name="resources_js" style="height: 400px"><?php echo $_smarty_tpl->tpl_vars['field_type_info']->value['resources_js'];?>
</textarea>
          </div>
          <?php echo '<script'; ?>
 type="text/javascript">
            var include_js_field = new CodeMirror.fromTextArea(document.getElementById("resources_js"), {
              mode: "javascript"
            });
          <?php echo '</script'; ?>
>
        </div>
      </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['field_type_info']->value['is_editable'] == "yes" || $_smarty_tpl->tpl_vars['g_cf_allow_editing_of_non_editable_fields']->value) {?>
    <div class="margin_top_large">
      <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
    </div>
    <?php }?>

  </form>
<?php }
}
