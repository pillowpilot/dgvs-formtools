<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:42:00
  from "/home/federico/formtools/formtools/themes/default/admin/modules/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d249852d4a4_85026059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a863e379ce59f596fba73d0730ea7bbecdfc187a' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/admin/modules/about.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d249852d4a4_85026059 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" height="35" class="margin_bottom_large">
  <tr>
    <td width="45"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_modules.gif" width="34" height="34" /></td>
    <td class="title">
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a> <span class="joiner">&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_module_info'];?>

    </td>
  </tr>
  </table>


  <table cellspacing="1" cellpadding="1" class="list_table">
  <tr>
    <td width="140" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_module'];?>
</td>
    <td class="pad_left_small bold"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['module_name'];?>
</td>
  </tr>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_module_description'];?>
</td>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['description'];?>
</td>
  </tr>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_version'];?>
</td>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['version'];?>
</td>
  </tr>
  <tr>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_author'];?>
</td>
    <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['author'];?>

      <?php if ($_smarty_tpl->tpl_vars['module_info']->value['author_email'] != '') {?>
        &#8212; <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['module_info']->value['author_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['author_email'];?>
</a>
      <?php }?>
    </td>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['module_info']->value['author_link'] != '') {?>
    <tr>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_author_link'];?>
</td>
      <td class="pad_left_small"><a href="<?php echo $_smarty_tpl->tpl_vars['module_info']->value['author_link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['author_link'];?>
</a></td>
    </tr>
  <?php }?>
  </table>

  <p>
    <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_back_leftarrow'];?>
</a>
  </p>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
