<?php
/* Smarty version 3.1.31, created on 2022-08-27 18:04:35
  from "/home/federico/formtools/formtools/modules/form_builder/templates/preview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630a40938fd767_61101214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ae9d6c0fb4461d729b7c73093fb019e8c8d97e' => 
    array (
      0 => '/home/federico/formtools/formtools/modules/form_builder/templates/preview.tpl',
      1 => 1528562873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630a40938fd767_61101214 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_views_dropdown')) require_once '/home/federico/formtools/formtools/global/smarty_plugins/function.views_dropdown.php';
if (!is_callable('smarty_function_template_sets')) require_once '/home/federico/formtools/formtools/modules/form_builder/smarty_plugins/function.template_sets.php';
if (!is_callable('smarty_function_display_template_set_templates')) require_once '/home/federico/formtools/formtools/modules/form_builder/smarty_plugins/function.display_template_set_templates.php';
if (!is_callable('smarty_function_display_template_set_placeholders')) require_once '/home/federico/formtools/formtools/modules/form_builder/smarty_plugins/function.display_template_set_placeholders.php';
?>
<!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</title>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/modules/form_builder/css/builder.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/themes/default/scripts/jquery-ui-1.8.6.custom.min.js"><?php echo '</script'; ?>
>
    <link href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/themes/default/css/smoothness/jquery-ui-1.8.6.custom.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/general.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/jquery-ui-timepicker-addon.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/modules/form_builder/scripts/builder.js?d=20160609"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    
    var g = {
        error_colours:  ["ffbfbf", "ffb5b5"],
        notify_colours: ["c6e2ff", "97c7ff"],
        messages: {}
    };
    
    g.root_url = "<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
";
    g.sidebar_width = <?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
;
    g.header_height = <?php echo $_smarty_tpl->tpl_vars['header_height']->value;?>
;
    g.footer_height = <?php echo $_smarty_tpl->tpl_vars['footer_height']->value;?>
;
    g.iframe_header_height = <?php echo $_smarty_tpl->tpl_vars['iframe_header_height']->value;?>
;
    g.demo_mode = <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>true<?php } else { ?>false<?php }?>;
    g.messages = {
    word_cancel: "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_cancel'];?>
",
    word_update: "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
",
    word_help: "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_help'];?>
",
    word_review: "<?php echo $_smarty_tpl->tpl_vars['L']->value['word_review'];?>
",
    word_thanks: "<?php echo $_smarty_tpl->tpl_vars['L']->value['word_thanks'];?>
",
    word_close: "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_close'];?>
",
    word_saved: "<?php echo $_smarty_tpl->tpl_vars['L']->value['word_saved'];?>
",
    word_loading_p: "<?php echo $_smarty_tpl->tpl_vars['L']->value['word_loading_p'];?>
",
    word_publish: "<?php echo $_smarty_tpl->tpl_vars['L']->value['word_publish'];?>
",
    phrase_thankyou_page_content: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_thankyou_page_content'];?>
",
    phrase_form_offline_page_content: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_edit_form_offline_page_content'];?>
",
    phrase_hide_sidebar: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_hide_sidebar'];?>
",
    phrase_show_sidebar: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_show_sidebar'];?>
",
    phrase_update_and_show: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_update_and_show'];?>
",
    phrase_close_window: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_close_window'];?>
",
    phrase_return_to_form_builder: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_return_to_form_builder'];?>
",
    phrase_form_offline_page: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_form_offline_page'];?>
",
    phrase_publish_form: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_publish_form'];?>
",
    phrase_open_form_in_new_window: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_open_form_in_new_window'];?>
",
    phrase_publish_settings: "<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_publish_settings'];?>
",
    notify_form_config_saved: "<?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_config_saved'];?>
",
    notify_form_published: "<?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_published'];?>
",
    notify_form_republished: "<?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_republished'];?>
",
    validation_no_filename: "<?php echo $_smarty_tpl->tpl_vars['L']->value['validation_no_filename'];?>
",
    validation_filename_not_alpha: "<?php echo $_smarty_tpl->tpl_vars['L']->value['validation_filename_not_alpha'];?>
",
    validation_no_folder_url: "<?php echo $_smarty_tpl->tpl_vars['L']->value['validation_no_folder_url'];?>
",
    validation_no_folder_path: "<?php echo $_smarty_tpl->tpl_vars['L']->value['validation_no_folder_path'];?>
",
    validation_no_publish_setting_changes: "<?php echo $_smarty_tpl->tpl_vars['L']->value['validation_no_publish_setting_changes'];?>
"
    }
    g.loading = new Image();
    g.loading.src = "<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/modules/form_builder/images/sidebar_section_loading.gif";
    <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

    <?php echo '</script'; ?>
>

    <style>
    #header {
        height: <?php echo $_smarty_tpl->tpl_vars['header_height']->value;?>
px;
    }
    #footer {
        height: <?php echo $_smarty_tpl->tpl_vars['footer_height']->value;?>
px;
    }
    #sidebar {
        width: <?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px;
        height: <?php echo $_smarty_tpl->tpl_vars['content_height']->value;?>
px;
        top: <?php echo $_smarty_tpl->tpl_vars['header_height']->value;?>
px;
    }
    #preview_iframe {
        left: <?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px;
        top: <?php echo $_smarty_tpl->tpl_vars['iframe_header_height']->value+$_smarty_tpl->tpl_vars['header_height']->value;?>
px;
        height: <?php echo $_smarty_tpl->tpl_vars['content_height']->value-$_smarty_tpl->tpl_vars['iframe_header_height']->value;?>
px;
        width: <?php echo $_smarty_tpl->tpl_vars['iframe_width']->value;?>
px;
    }
    #iframe_header {
        left: <?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px;
        height: <?php echo $_smarty_tpl->tpl_vars['iframe_header_height']->value;?>
px;
        width: <?php echo $_smarty_tpl->tpl_vars['iframe_width']->value;?>
px;
    }
    </style>
</head>
<body class="body">

<?php if ($_smarty_tpl->tpl_vars['major_error']->value) {?>

    <div id="header">
        <h1><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</h1>
    </div>
    <div class="clear"></div>

    <div id="major_error">
        <div><?php echo $_smarty_tpl->tpl_vars['major_error']->value;?>
</div>
        <span class="close"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_close_window'];?>
</span>
        <span class="goto_form_builder"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_go_to_form_builder'];?>
</span>
    </div>

<?php } else { ?>

    <div id="header">
        <h1><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</h1>
        <a class="close_window ui-widget-header ui-icon"><span class="ui-icon ui-icon-closethick"></span></a>
        <div id="publish_url" <?php if ($_smarty_tpl->tpl_vars['is_published']->value == "no") {?>class="hidden"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['published_folder_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['published_filename']->value;?>
.php" target="_blank"><?php echo $_smarty_tpl->tpl_vars['published_folder_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['published_filename']->value;?>
.php</a>
        </div>
    </div>
    <div id="sidebar">

        <form action="preview_form.php" id="f" method="post" target="preview_iframe">
            <input type="hidden" name="published_form_id" id="published_form_id" value="<?php echo $_smarty_tpl->tpl_vars['published_form_id']->value;?>
" />
            <input type="hidden" name="form_id" id="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
            <input type="hidden" name="page" id="page" value="1" />

            <div class="section">
                <h2 id="main_settings_heading" class="first"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_main_settings'], 'UTF-8');?>
</h2>
                <div class="section_options" id="main_settings">
                    <div>
                        <label for="view_id"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_view'];?>
</label>
                        <?php echo smarty_function_views_dropdown(array('name_id'=>"view_id",'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'selected'=>$_smarty_tpl->tpl_vars['view_id']->value,'class'=>"full"),$_smarty_tpl);?>

                    </div>
                    <div>
                        <label for="template_set_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_template_set'];?>
</label>
                        <div><?php echo smarty_function_template_sets(array('name_id'=>"template_set_id",'default'=>$_smarty_tpl->tpl_vars['set_id']->value,'class'=>"full"),$_smarty_tpl);?>
</div>
                    </div>
                    <div>
                        <input type="checkbox" name="is_online" id="is_online" <?php if ($_smarty_tpl->tpl_vars['is_online']->value == "yes") {?>checked="checked"<?php }?> />
                        <label for="is_online"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_form_is_online'];?>
</label>
                    </div>
                    <div>
                        <input type="checkbox" name="include_review_page" id="irp" <?php if ($_smarty_tpl->tpl_vars['include_review_page']->value == "yes") {?>checked="checked"<?php }?> />
                        <label for="irp"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_include_review_page'];?>
</label>
                    </div>
                    <div>
                        <input type="checkbox" name="include_thanks_page_in_nav" id="itpin" <?php if ($_smarty_tpl->tpl_vars['include_thanks_page_in_nav']->value == "yes") {?>checked="checked"<?php }?> />
                        <label for="itpin"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_include_thanks_page_in_nav'];?>
</label>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 id="template_settings_heading">
                    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['word_templates'], 'UTF-8');?>

                    <span id="template_count">(N)</span>
                    <span class="section_loading"></span>
                </h2>
                <div class="section_options" id="template_settings" style="display:none">
                    <?php echo smarty_function_display_template_set_templates(array('set_id'=>$_smarty_tpl->tpl_vars['set_id']->value,'selected_templates'=>$_smarty_tpl->tpl_vars['selected_templates']->value),$_smarty_tpl);?>

                </div>
            </div>

            <div class="section">
                <h2 id="placeholders_heading">
                    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['word_placeholders'], 'UTF-8');?>

                    <span id="placeholder_count">(<?php echo count($_smarty_tpl->tpl_vars['placeholders']->value);?>
)</span>
                    <span class="section_loading"></span>
                </h2>
                <div class="section_options" id="placeholders" style="display:none">
                    <?php echo smarty_function_display_template_set_placeholders(array('set_id'=>$_smarty_tpl->tpl_vars['set_id']->value,'placeholders'=>$_smarty_tpl->tpl_vars['placeholders']->value,'placeholder_hash'=>$_smarty_tpl->tpl_vars['placeholder_hash']->value),$_smarty_tpl);?>

                </div>
            </div>

            <div class="section">
                <h2 id="thankyou_page_heading"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_thankyou_page_content'], 'UTF-8');?>
</h2>
                <div id="thankyou_page" style="display:none">
                    <textarea name="thankyou_page_content" id="thankyou_page_content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thankyou_page_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    <div id="thankyou_page_edit_full_screen">edit full screen</div>
                </div>
            </div>

            <div class="section">
                <h2 id="form_offline_heading"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_form_offline_page_content'], 'UTF-8');?>
</h2>
                <div id="form_offline" style="display:none">
                    <textarea name="form_offline_page_content" class="monospace" id="form_offline_page_content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_offline_page_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    <div id="form_offline_page_edit_full_screen">edit full screen</div>
                </div>
            </div>

            <div class="section">
                <h2 id="advanced_heading"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_other_settings'], 'UTF-8');?>
</h2>
                <div id="advanced" class="section_options" style="display:none">
                    <div>
                        <label for="fod"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_automatically_take_form_offline_on_c'];?>
</label>
                        <div>
                            <input type="text" name="offline_date" id="fod" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['offline_date']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                            <img class="ui-datepicker-trigger" src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/images/calendar.png" id="fod_icon_id" />
                            <span id="clear_offline_form"<?php if ($_smarty_tpl->tpl_vars['offline_date']->value == '') {?>style="display:none"<?php }?>>clear</span>
                        </div>
                    </div>
                    <div>
                        <label for="rpt"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_review_page_nav_title'];?>
</label>
                        <div><input type="text" name="review_page_title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review_page_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="rpt" class="full" /></div>
                    </div>
                    <div>
                        <label for="tpt"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_thankyou_page_nav_title'];?>
</label>
                        <div><input type="text" name="thankyou_page_title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thankyou_page_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="tpt" class="full" /></div>
                    </div>
                </div>
            </div>

            <div class="btn apply_btn"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_apply_changes'], 'UTF-8');?>
 &raquo;</div>

            
            <input type="hidden" name="filename" id="filename" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_filename']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="folder_url" id="folder_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="folder_path" id="folder_path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_path']->value, ENT_QUOTES, 'UTF-8', true);?>
" />

        </form>
    </div>

    <div id="iframe_header">
        <div id="page_loading"></div>
        <h2><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_preview_page_c'];?>
</h2>
        <div id="pages"></div>
        <div class="clear"></div>
    </div>

    <iframe name="preview_iframe" id="preview_iframe"></iframe>

    <div id="footer">
        <div id="toggle_sidebar"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_hide_sidebar'];?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['is_published']->value == "no") {?>
            <span class="btn publish_btn"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['word_publish'], 'UTF-8');?>
</span>
        <?php } else { ?>
            <span class="btn publish_settings_btn"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_publish_settings'], 'UTF-8');?>
</span>
        <?php }?>
        <span class="btn save_btn"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['word_save'], 'UTF-8');?>
</span>
        <span class="btn help_btn"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_help'], 'UTF-8');?>
</span>
    </div>

    <div class="paged_dialogs" id="edit_thankyou_page_dialog" style="display:none">
        <ul class="main_nav">
            <li class="row1">The Thankyou Page</li>
            <li class="row2 selected">Editor</li>
            <li class="row3">Placeholders</li>
            <li class="rowN"></li>
        </ul>

    <div class="row1_page dialog_page" style="display:none">
      <h3>The Thankyou Page</h3>
      <p>
        Whenever one of your users fills in a form created through the Form Builder, the last page
        they see is a "thankyou" page - so named because that's usually where you thank them for taking the
        time to fill in your form.
      </p>
      <p>
        This dialog lets you edit the content that should appear on that page. It will be outputted as HTML.
        Click on the <b>Editor</b> tab in left navigation to edit the content.
      </p>
      <p>
        To edit the default value that appears in this field, in another window, go to your Modules &raquo; Form
        Builder page and visit the Settings page.
      </p>
      <p>
        When you are done editing, to see how your Thankyou Page looks, click the "Update and View" button below.
      </p>
    </div>

    <div class="row2_page dialog_page" id="thankyou_page_editor_wrapper">
      <textarea id="thankyou_page_editor" name="thankyou_page_editor"></textarea>
    </div>
    <div class="row3_page dialog_page" style="display:none">
      <h3>Placeholders</h3>
      <p>
        Sometimes you may need to display information about the user who just submitted the form, for example,
        thanking them by name for submitting the form. This page contains a list of all placeholders that
        you can use to display that information.
      </p>
      <p>
        <i>Please note that placeholders are only converted to their appropriate values for REAL form
        submissions, not when being displayed by the Form Builder</i>.
      </p>
    </div>
  </div>

  <div class="paged_dialogs" id="edit_form_offline_page_dialog" style="display:none">
    <ul class="main_nav">
      <li class="row1">The Form Offline Page</li>
      <li class="row2 selected">Editor</li>
      <li class="rowN"></li>
    </ul>
    <div class="row1_page dialog_page" style="display:none">
      <h3>The Form Offline Page</h3>
      <p>
        You can take any of your published forms offline by simply unchecking the "Form is online" checkbox
        in the MAIN SETTINGS section of the left sidebar. When you do, any new visitors to your form will
        see the content specified in the "Form Offline Page" field.
      </p>
      <p class="tip">
        <b>Tip</b>: the Form Builder's default behaviour is to <i>only show the Form Offline page content to
        users that weren't already on the form page, or in the middle of putting through a submission</i>. In other words, if you
        have your form open in your browser, then uncheck the "Form is online" option, you'll still see the form!
        This is normal. It prevents accidentally cutting off people already putting through a form submission. If you don't
        like this behaviour, go to the Modules &raquo; Form Builder &raquo; Settings page and change the "Offline Form Behaviour"
        setting to "Immediately prevent all submissions".
      </p>
    </div>
    <div class="row2_page dialog_page" id="thankyou_page_editor_wrapper">
      <textarea id="form_offline_page_editor" name="form_offline_page_editor"></textarea>
    </div>
  </div>

  <div id="form_saved_dialog"></div>

  <div id="publish_form_dialog" style="display:none">

    <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>
      <div class="margin_bottom_large">
        <div class="error">
          <div style="padding: 6px">
            <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_builder_demo_mode'];?>

          </div>
        </div>
      </div>
    <?php } else { ?>
      <div class="margin_bottom_large">
        <?php echo $_smarty_tpl->tpl_vars['L']->value['text_publish_form_intro'];?>

      </div>
    <?php }?>

    <div id="publish_message" class="hidden margin_bottom_large">
      <div id="publish_message_inner" class="error"><div></div></div>
    </div>

    <table class="margin_bottom_large" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td class="medium_grey" width="120"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_filename'];?>
</td>
      <td>
        <input type="text" id="publish_filename" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_filename']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>disabled<?php }?> />.php
      </td>
    </tr>
    <tr>
      <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_folder_path'];?>
</td>
      <td>
        <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td><input type="text" id="publish_folder_path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_path']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>disabled<?php }?> /></td>
          <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] != "on") {?>
          <td width="170">
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_test_folder_permissions'];?>
"
              onclick="ft.test_folder_permissions($('#publish_folder_path').val(), 'publish_permissions_result')" style="width: 170px;" />
          </td>
          <?php }?>
        </tr>
        </table>
        <div id="publish_permissions_result"></div>
      </td>
    </tr>
    <tr>
      <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_folder_url'];?>
</td>
      <td>
        <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td><input type="text" id="publish_folder_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>disabled<?php }?> /></td>
          <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] != "on" && $_smarty_tpl->tpl_vars['allow_url_fopen']->value) {?>
            <td width="170"><input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_confirm_folder_url_match'];?>
"
              onclick="ft.test_folder_url_match($('#publish_folder_path').val(), $('#publish_folder_url').val(), 'publish_folder_match_message_id')" style="width: 170px;" /></td>
          <?php }?>
        </tr>
        </table>
        <div id="publish_folder_match_message_id"></div>
        <input type="hidden" id="old_publish_folder_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
      </td>
    </tr>
    </table>
  </div>

  <div id="publish_settings_form_dialog" style="display:none">
    <div id="publish_settings_display">
      <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>
        <div class="margin_bottom_large">
          <div class="error">
            <div style="padding: 6px">
              <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_builder_demo_mode'];?>

            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="margin_bottom_large">
          <?php echo $_smarty_tpl->tpl_vars['L']->value['text_publish_settings_dialog_intro'];?>

        </div>
      <?php }?>

      <div id="publish_settings_message" class="hidden margin_bottom_large">
        <div id="publish_settings_message_inner" class="error"><div></div></div>
      </div>

      <table class="margin_bottom_large" cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td class="medium_grey" width="120"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_filename'];?>
</td>
        <td>
          <input type="text" id="new_publish_filename" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_filename']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>disabled<?php }?> />.php
          <input type="hidden" id="old_publish_filename" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_filename']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td class="medium_grey" valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_folder_path'];?>
</td>
        <td>
          <table cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td><input type="text" id="new_publish_folder_path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_path']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>disabled<?php }?> /></td>
            <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] != "on") {?>
            <td width="170">
              <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_test_folder_permissions'];?>
"
                onclick="ft.test_folder_permissions($('#new_publish_folder_path').val(), 'publish_settings_permissions_result')" style="width: 170px;" />
            </td>
            <?php }?>
          </tr>
          </table>
          <div id="publish_settings_permissions_result"></div>
          <input type="hidden" id="old_publish_folder_path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_path']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td class="medium_grey" valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_folder_url'];?>
</td>
        <td>
          <table cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td><input type="text" id="new_publish_folder_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>disabled<?php }?> /></td>
            <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] != "on" && $_smarty_tpl->tpl_vars['allow_url_fopen']->value) {?>
              <td width="170"><input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_confirm_folder_url_match'];?>
"
                onclick="ft.test_folder_url_match($('#new_publish_folder_path').val(), $('#new_publish_folder_url').val(), 'folder_match_message_id')" style="width: 170px;" /></td>
            <?php }?>
          </tr>
          </table>
          <div id="folder_match_message_id"></div>
          <input type="hidden" id="old_publish_folder_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['published_folder_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      </table>
    </div>
    <div id="publish_settings_response" style="display:none">
      <div class="margin_bottom"><?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_republished'];?>
</div>
        <input type="text" class="large_textbox" value="" />
        <a href="" target="_blank" id="publish_dialog_open_form_link"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_open_form_in_new_window'];?>
</a>
    </div>
  </div>

  <div class="paged_dialogs" id="help_dialog" style="display:none">
    <ul class="main_nav">
      <li class="row1 selected">Help Documentation</li>
      <li class="row2">How the Module Works</li>
      <li class="row3">The Form Builder window</li>
      <li class="row4">The Sidebar</li>
      <li class="row5">Action Buttons</li>
      <li class="row6">Getting More Help</li>
      <li class="rowN"></li>
    </ul>

    <div class="row1_page dialog_page">
      <h3>Help Documentation</h3>
      <p>
        This section contains some information and tips about the Form Builder window. If you can't find the information you're looking for here,
        you may want to visit the <a href="http://modules.formtools.org/form_builder/" target="_blank">online help documentation</a> for a more
        complete discussion of all aspects of the module.
      </p>
      <p>
        This help section is split into the following sections:
      </p>
      <table cellspacing="0" cellpadding="2" class="list_table">
      <tr>
        <td width="160" valign="top"><span class="dialog_link row2">How the module works</span></td>
        <td>
          This is a great place to start if you've never used the Form Builder module before. It explains all the important things you need to
          know to publish your forms on your site.
        </td>
      </tr>
      <tr>
        <td valign="top"><span class="dialog_link row3">The Form Builder Window</span></td>
        <td>
          This section discusses each panel in the Form Builder window and how it all fits together.
        </td>
      </tr>
      <tr>
        <td valign="top"><span class="dialog_link row4">The Sidebar</span></td>
        <td>
          The sidebar contains all the options to let you visually construct your form. This section explains each feature in fine detail.
        </td>
      </tr>
      <tr>
        <td valign="top" class="rowN"><span class="dialog_link row5">Action Buttons</span></td>
        <td class="rowN">
          The Action Buttons at the bottom right of the Form Builder window let you create your forms on your site, move them to a new location
          and save the .
        </td>
      </tr>
      </table>
    </div>

    <div class="row2_page dialog_page" style="display:none">
      <h3>How the Form Builder works</h3>

      <p>
        The Form Builder works by taking one of your form Views and converting that configuration into an attractive form to publish
        on your website. The module lets you choose a template set (a group of templates, each determining the appearance of
        different aspects of the form) to precisely control the appearance of the published forms. The Form Builder window (which
        you're in right now!) let's you visually build your form by choosing options in the left sidebar. When you're ready to
        publish the form, you click the <i>Publish</i> Action Button at the bottom right to specify where it should get generated,
        then click "Publish" and you're done!
      </p>

      <p>
        In a nutshell, that's how it works!
      </p>

      <h4>A little more info about Views</h4>

      <p>
        A Form Tools form can have any number of <i>Views</i>. The View controls various aspects of your published
        form, for example:
      </p>

      <ol>
        <li>What form fields should appear,</li>
        <li>The order the fields should get listed,</li>
        <li>How the fields are grouped within a page, and</li>
        <li>Whether the fields are arranged into tabs when editing the data in the Form Tools interface.</li>
      </ol>

      <p>
        Since Views already define all this for us, the Form Builder simply takes that information and renders it with templates,
        thus creating your form. Any time you change your form View (e.g. add or remove fields to it), any published form that uses
        it will be <i>automatically updated</i> to show the changes. You don't need to re-save or re-publish the form.
      </p>

      <div class="tip">
        <b>Tip</b>: <b>tabs or pages?</b> The Form Builder converts View <i>tabs</i> into form <i>pages</i>. So if your View groups your fields into two tabs, your published
        form will contain two form pages + an optional Review page, plus the "thankyou" / "receipt" page. It's always a good
        idea to define the tab name, because that controls the page title of the first form page.
      </div>

      <h4>Template Sets</h4>

      <p>
        The template sets govern exactly how your published form will look. The template sets let you customize the HTML, CSS and
        any javascript you wish to include in the form pages.
      </p>

      <p>
        A template set is comprised of multiple templates, each used to generate a particular part of the page. For example, there
        are Header and Footer templates, a Continue Block and Navigation templates. If your template set contains more than one of
        each type, you will be given the option of selecting it in the "TEMPLATES" section of the Form Builder sidebar. In effect, this
        lets you re-use the same template set multiple times, but generate different-looking forms each time.
      </p>

      <p>
        For a more in-depth look at template sets, choose the Form Builder module from your Modules page, select a Template Set and
        click around the interface to see how it's put together. You can also see the
        <a href="http://modules.formtools.org/form_builder/" target="_blank">online documentation</a> for further documentation help.
      </p>
    </div>


    <div class="row3_page dialog_page" style="display:none">
      <h3>The Form Builder window</h3>
      <p>
        The Form Builder window (which you are in right now) is arranged into several panels, each performing a specific purpose.
      </p>

      <h4>1. Top row</h4>
      <p>
        The top row contains the Form Builder title, and window close ("x") icon. When you are editing one of your published forms,
        the form URL will be displayed at the top. Depending on the size of your window, it may get truncated - but you can always
        click on it to open up the form in a separate window.
      </p>

      <h4>2. Sidebar</h4>
      <p>
        The left sidebar contains all the settings for customizing the appearance of your published form. You can just choose whatever
        options you want, then click the "APPLY CHANGES" button. That will refresh the form viewer panel (panel #4) so you can see
        how your changes look.
      </p>
      <p>
        The configurable options in some of the sections will depend on the options available by the Template Set you have selected.
        Just click the separate panel headings in the sidebar (MAIN, TEMPLATES, PLACEHOLDERS and so on) to hide/show that section.
      </p>
      <p>
        There is a tremendous amount of functionality available in the sidebar. See the <span class="dialog_link row4">Sidebar</span>
        documentation page for further information.
      </p>

      <div class="tip">
        <b>Tip</b>: make sure that after you make your changes in the sidebar, you remember to click the "APPLY CHANGES" button. This will ensures
        the content of the Form Viewer panel is always up to date.
      </div>

      <h4>3. Navigation</h4>
      <p>
        The navigation strip lets you see the different pages of your form in the main form viewer panel (section #4). The pages that
        are listed depend on your selections in the sidebar. Specifically: the View, and the "include Review Page" checkbox. Those
        two settings govern the number of pages in your form. As always, after you change anything in the left sidebar, make sure
        you click the "APPLY CHANGES" button to refresh the win form views panel.
      </p>

      <div class="tip">
        <b>Tip</b>: links and buttons within the Form Viewer panel won't work. In order to navigate from page to page, use the navigation strip above the Form Viewer (section #3).
      </div>

      <h4>4. Form Viewer</h4>
      <p>
        This is the largest panel on the page: it shows how your form currently looks, based on what you've selected in the sidebar
        and navigation. The purpose of this panel is to ensure you have a clear idea of how your form looks while you're constructing
        it.
      </p>

      <div class="tip">
        <b>Tip</b>: if your Form Builder window is fairly small due to a limited screen resolution, you can always hide the sidebar (bottom left of the Form Builder window) to temporarily give yourself more space to look over your form.
      </div>

      <h4>5. Action Buttons</h4>
      <p>
        The action buttons are located at the bottom-right of the Form Builder window.
      </p>
      <ul>
        <li><b>HELP</b>. This opens the help dialog.</li>
        <li><b>SAVE</b>. Whenever you click the APPLY CHANGES button in the sidebar, it merely re-draws the main window: nothing is
        actually saved. The SAVE button actually stores the information. If your form is already published, this will update the actual form. If the
        form has not been published, it merely saves your settings.</li>
        <li><b>PUBLISH</b> / <b>PUBLISH SETTINGS</b>. This button lets you publish a newly created form, or update the publish settings for a
        form that's already been published.</li>
      </ul>
    </div>

    <div class="row4_page dialog_page" style="display:none">
      <h3>The Sidebar</h3>

			<p>
			  The Form Builder window contains all the functionality needed to control the appearance and functionality of your form.
			</p>

			<p>
			  The sidebar is arranged into the following sections:
			</p>

			<ul>
			  <li>MAIN SETTINGS</li>
			  <li>TEMPLATES</li>
			  <li>PLACEHOLDERS</li>
			  <li>THANKYOU PAGE CONTENT</li>
			  <li>FORM OFFLINE PAGE CONTENT</li>
			  <li>OTHER SETTINGS</li>
			</ul>

      <p>
        Each of these sections can be opened by clicking on the heading. You may open as many of these sections at the same time
        as you wish, but only the first "MAIN SETTINGS" section is displayed by default.
      </p>

			The following content explains each of the sections in depth.

			<h4>MAIN SETTINGS</h4>

			The main settings section, as you'd expect from the label, contains all the key settings for your published form.

			<h5>View</h5>

      <p>
  		  The first option, the View, as discussed in the <span class="dialog_link row2">How the module works</span> section
  		  controls what fields appear in your form, how many pages (View tabs) it has, their order and how they are grouped.
  		  The View is extremely important in constructing your form. You can edit the View contents through the Edit Form &raquo;
  		  Views tab.
  		</p>

      <p>
        Your form may contain any number of Views, thus letting you publish multiple forms that have a different appearance
        and different fields, but all of which submit to the same location in the database. This is exceedingly powerful!
      </p>

			<h5>Template Set</h5>

			<p>
			  The Template set controls the overall appearance of your form. You can view and edit the details your available
			  Template Sets through the Modules &raquo; Form Builder section, but a quicker, more visual way to see what they look
			  like is just to select them in the Form Builder window, then click the "APPLY CHANGES" button.
			</p>

			<p>
			  Depending on which Template Set you choose, the contents of the next two sections in the Sidebar ("TEMPLATES"
			  and "PLACEHOLDERS") will change. Each Template Set is <i>configurable</i>: you can edit it to get as much use out
			  of it as possible. For example, if you define more than one template for a particular type (e.g. a "Header" template
			  type, or a "Footer" template type), the TEMPLATES section will give you the option to choose which one you want to use
			  for the form you are currently publishing. This is a very convenient way to re-use the majority of the Template Set
			  markup and CSS, but still make each form unique.
			</p>

			<h5>Form is online</h5>

			<p>
			  This setting controls whether or not the form is online or not. When this is unchecked, anyone visiting your form
			  (assuming it's published) will see the contents of the "FORM OFFLINE PAGE CONTENT" section - and not the form itself.
			</p>

			<p class="tip">
			  <b>Tip #1</b>: You can schedule a published form to get automatically taken offline through the setting in the "OTHER SETTINGS"
			  section at the bottom of the Sidebar.
			</p>

      <p class="tip">
        <b>Tip #2</b>: the Form Builder's default behaviour is to <i>only show the Form Offline page content to
        users that weren't already on the form page, or in the middle of putting through a submission</i>. In other words, if you
        have your form open in your browser, then uncheck the "Form is online" option, you'll still see the form!
        This is normal. It prevents accidentally cutting off people already putting through a form submission. If you don't
        like this behaviour, go to the Modules &raquo; Form Builder &raquo; Settings page and change the "Offline Form Behaviour"
        setting to "Immediately prevent all submissions".
      </p>

			<h5>Include Review page</h5>

			<p>
			  For some forms (especially larger ones), you may find it convenient to include a "Review" page where the user submitting
			  the form can examine everything they've entered to confirm it's correct. The Review page contains convenient "EDIT"
			  links that return to the appropriate page, should the user want to re-enter something.
			</p>

			<p>
			  This setting includes or omits that page in your form. After you change this value (like all values in the Sidebar!),
			  make sure you click the "APPLY CHANGES" button to update the visible form.
			</p>

			<h5>Include Thanks page in nav</h5>

			<p>
			  Many forms include a navigation row that outlines what step the user is on. All the default Template Sets provided by
			  Form Builder module contain at least one navigation template. This setting controls whether or not the Thankyou page
			  should appear in the navigation or not. It doesn't affect the actual content of the form (a Thankyou page is always
			  need!), only the content of the navigation.
			</p>

			<p class="tip">
			  <b>Tip</b>: to control the text that appears as the title of the Thanks page in the navigation, see the "Thankyou Page Nav
			  Title" setting in the "OTHER SETTINGS" section at the bottom of the Sidebar.
			</p>


			<h4>TEMPLATES</h4>

			<p>
			  As mentioned above, the contents of the TEMPLATES section depends on the selected Template Set (found in the MAIN
			  SETTINGS section). Template Sets are comprised of multiple Templates, each used to render a different part of the
			  pages. For example, there's a template for the header, footer, navigation and page content (form page, Review page
			  etc). Whenever a Template Set defines more than one Template for a particular type, you will have the option of
			  selecting it here. If you don't see the option to change the header, footer and so on, that means that there's only
			  one template of that type defined - so there's nothing to choose from (and hence it's hidden!).
			</p>

			<p class="tip">
			  <b>Tip</b>: <b>Navigation.</b> All of the default Template Sets include more than one template to control the
			  appearance of the form Navigation. The text that appears as the nav items comes from the View tab names, and
			  whatever values are entered for the Review and Thankyou page settings in the OTHER SETTINGS sidebar section.
			</p>

			<p>
			  Please see our <a href="http://modules.formtools.org/form_builder/" target="_blank">online help documentation</a>
			  for more information about templates.
			</p>

			<h4>PLACEHOLDERS</h4>

			<p>
			  Placeholders are another powerful feature of Template Sets. You can choose arbitrary settings to be used when
			  publishing your form: for example, you could provide the option for the administrator to choose the form font,
			  font size, colour, form width, colours, whether a CAPTCHA should appear and so on. These are all done through
			  placeholders.
			</p>

			<p>
			  As with the Templates section described above, the contents of the Placeholders section depends on the selected
			  Template Set. Different Template Sets offer different placeholders. And you can, of course, customize each Template
			  Set to add your own!
			</p>

			<p>
			  Please see our <a href="http://modules.formtools.org/form_builder/" target="_blank">online help documentation</a>
			  for more information about placeholders.
			</p>

			<h4>THANKYOU PAGE CONTENT</h4>
			<p>
			  This section controls what should appear in the final "Thankyou" page for your form. Every form is likely to have something
			  slightly different for this page, so we chose to provide the functionality right within the Form Builder page. If
			  the (rather small!) textarea isn't big enough, click the "edit full screen" link underneath. That will let you edit the
			  content in a full screen editor.
			</p>

			<p>
			  The content that you enter should be in HTML.
			</p>

			<p class="tip">
			  <b>Tip</b>: to control the default thankyou page content (i.e. what will appear on the thankyou page for all new forms without
			  you customizing it), go to the Modules &raquo; Form Builder &raquo; Settings page. There, choose the second "Thankyou page"
			  tab and enter the appropriate HTML.
			</p>

			<h4>FORM OFFLINE PAGE CONTENT</h4>
      <p>
        You can take any of your published forms offline at any time you want by unchecking the "Form is online" checkbox
        in the MAIN SETTINGS section of the left sidebar. When you do, any new visitors to your form will
        see the content specified in this section. As with the previous "THANKYOU PAGE CONTENT" section, click the "edit full screen"
        link at the bottom of the page to open up a full screen editor.
      </p>

      <p class="tip">
        <b>Tip</b>: the Form Builder's default behaviour is to <i>only show the Form Offline page content to
        users that weren't already on the form page, or in the middle of putting through a submission</i>. In other words, if you
        have your form open in your browser, then uncheck the "Form is online" option, you'll still see the form!
        This is normal. It prevents accidentally cutting off people already putting through a form submission. If you don't
        like this behaviour, go to the Modules &raquo; Form Builder &raquo; Settings page and change the "Offline Form Behaviour"
        setting to "Immediately prevent all submissions".
      </p>

			<h4>OTHER SETTINGS</h4>
			<p>
			  The final sidebar section is entitled "OTHER SETTINGS". It contains all the settings that don't belong anywhere else.
			</p>

			<h5>Automatically take form offline on...</h5>
			<p>
			  This lets you schedule your form to go offline at a particular date and time. After you set it, your published form
			  that's listed on the Edit Form &raquo; Publish tab will show a small clock icon, which, when clicked will tell you what
			  time it's going to be going offline.
			</p>

			<h5>Review Page Title (Nav and Page)</h5>
			<p>
			  This setting controls the text that's used in the form navigation item and the page heading of the Review page. If your
			  form doesn't contain a Review page, this value is not used.
			</p>

			<h5>Thankyou Page Title (Nav Only)</h5>
			<p>
        This setting controls the text that's used in the form navigation for the Thankyou page. If you've unchecked the "Include Thanks page in nav"
        option in the MAIN SETTINGS section, this value is not used.
			</p>
    </div>

    <div class="row5_page dialog_page" style="display:none">
      <h3>The Action Buttons</h3>
      <p>
        The Action Buttons are found at the bottom right of the page. They provide the most important functionality in the Form
        Builder window: namely, saving and publishing your forms. Here's what each button does.
      </p>

      <ul>
        <li><b>HELP</b>. This opens the help dialog.</li>
        <li><b>SAVE</b>. Whenever you click the APPLY CHANGES button in the sidebar, it merely re-draws the main window: nothing is
        actually saved. The SAVE button actually stores the information. If your form is already published, this will update the actual form. If the
        form has not been published, it merely saves your settings.</li>
        <li><b>PUBLISH</b> / <b>PUBLISH SETTINGS</b>. This button lets you publish a newly created form, or update the publish settings for a
        form that's already been published.</li>
      </ul>

    </div>

    <div class="row6_page dialog_page" style="display:none">
      <h3>Getting More Help</h3>

      <p>
        Still stuck, or have a question? First off, check out our <a href="http://modules.formtools.org/form_builder/" target="_blank">online
        documentation</a> - it contains a lot more information and help. Secondly, feel free to ask a question in
        our <a href="http://forums.formtools.org" target="_blank">forums</a>.
      </p>

    </div>
  </div>

<?php }?>

</body>
</html>
<?php }
}
