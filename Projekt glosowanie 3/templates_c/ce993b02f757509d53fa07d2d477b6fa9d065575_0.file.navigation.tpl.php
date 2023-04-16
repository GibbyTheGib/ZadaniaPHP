<?php
/* Smarty version 3.1.30, created on 2023-03-09 12:53:37
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Template\app\views\templates\navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6409c8c1ed8f60_53069667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce993b02f757509d53fa07d2d477b6fa9d065575' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Template\\app\\views\\templates\\navigation.tpl',
      1 => 1678362799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6409c8c1ed8f60_53069667 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainShowAll">mainShowAll</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainShowLike">mainShowLike</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainNew">mainNew</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainEdit">mainEdit</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainSave">mainSave</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainDelete">mainDelete</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personShowAll">Użytkownicy</a></li>
    
</nav><?php }
}
