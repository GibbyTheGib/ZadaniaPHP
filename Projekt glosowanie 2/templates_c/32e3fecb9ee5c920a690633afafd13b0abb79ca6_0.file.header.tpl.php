<?php
/* Smarty version 3.1.30, created on 2023-03-10 20:50:09
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Notatnik\app\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640b89f1eedb02_79230378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e3fecb9ee5c920a690633afafd13b0abb79ca6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Notatnik\\app\\views\\templates\\header.tpl',
      1 => 1678287692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640b89f1eedb02_79230378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-menu pure-menu-horizontal bottom-margin">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div><?php }
}
