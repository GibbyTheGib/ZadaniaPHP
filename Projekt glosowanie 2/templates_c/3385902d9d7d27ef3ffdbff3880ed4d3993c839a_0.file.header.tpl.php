<?php
/* Smarty version 3.1.30, created on 2023-03-08 16:02:15
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Template\app\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6408a377abc5f8_97574727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3385902d9d7d27ef3ffdbff3880ed4d3993c839a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Template\\app\\views\\templates\\header.tpl',
      1 => 1678287692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408a377abc5f8_97574727 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-menu pure-menu-horizontal bottom-margin">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div><?php }
}
