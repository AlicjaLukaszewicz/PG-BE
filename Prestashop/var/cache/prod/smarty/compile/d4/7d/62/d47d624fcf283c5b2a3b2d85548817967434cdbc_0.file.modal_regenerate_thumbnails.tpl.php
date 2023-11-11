<?php
/* Smarty version 4.3.1, created on 2023-11-11 14:27:49
  from '/var/www/html/admin147fswq9o4qcew1s72f/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_654f8155759750_01995995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd47d624fcf283c5b2a3b2d85548817967434cdbc' => 
    array (
      0 => '/var/www/html/admin147fswq9o4qcew1s72f/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654f8155759750_01995995 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
