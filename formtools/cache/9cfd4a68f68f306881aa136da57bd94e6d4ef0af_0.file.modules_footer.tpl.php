<?php
/* Smarty version 3.1.31, created on 2022-08-29 22:55:30
  from "/home/federico/formtools/formtools/themes/default/modules_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630d27c20b2628_26136245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cfd4a68f68f306881aa136da57bd94e6d4ef0af' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/modules_footer.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630d27c20b2628_26136245 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.show_page_load_time.php';
?>

    </td>
  </tr>
  </table>

</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div class="footer">
    <?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
