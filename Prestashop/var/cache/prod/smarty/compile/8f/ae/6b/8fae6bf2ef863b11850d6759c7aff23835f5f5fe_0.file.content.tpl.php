<?php
/* Smarty version 4.3.1, created on 2023-11-11 10:22:43
  from '/var/www/html/admin147fswq9o4qcew1s72f/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_654f47e37fb415_65372929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fae6bf2ef863b11850d6759c7aff23835f5f5fe' => 
    array (
      0 => '/var/www/html/admin147fswq9o4qcew1s72f/themes/new-theme/template/content.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654f47e37fb415_65372929 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
