<?php
/* Smarty version 3.1.31, created on 2022-08-27 17:54:50
  from "/home/federico/formtools/formtools/themes/default/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630a3e4a5d79e4_92913365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d061f9dea84f5c3592f947f18b686f086429586' => 
    array (
      0 => '/home/federico/formtools/formtools/themes/default/footer.tpl',
      1 => 1571535471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630a3e4a5d79e4_92913365 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.show_page_load_time.php';
?>

      </div>
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
