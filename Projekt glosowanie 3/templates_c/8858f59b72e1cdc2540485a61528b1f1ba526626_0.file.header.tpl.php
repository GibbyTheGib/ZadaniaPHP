<?php
/* Smarty version 3.1.30, created on 2023-03-12 11:48:00
  from "C:\xampp\htdocs\Glosowanie\app\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640dade0149a55_98621296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8858f59b72e1cdc2540485a61528b1f1ba526626' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Glosowanie\\app\\views\\templates\\header.tpl',
      1 => 1678595074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640dade0149a55_98621296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-menu pure-menu-horizontal bottom-margin">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
VotesShowLike" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
        <input type="submit" value="My Votess" class="pure-menu-heading pure-menu-link" />
    </form>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
        <input type="submit" value="My profile" class="pure-menu-heading pure-menu-link" />
    </form>

    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin")) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
VotesNew" method="post" class="pure-menu-heading pure-menu-link">
            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
            <input type="submit" value="New Questionnaire" class="pure-menu-heading pure-menu-link" />
        </form>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personShowAll" class="pure-menu-heading pure-menu-link">Users</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
" class="pure-menu-heading pure-menu-link">Show All Votes</a>

    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "moderator")) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
VotesNew" method="post" class="pure-menu-heading pure-menu-link">
            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
            <input type="submit" value="New Questionnaire" class="pure-menu-heading pure-menu-link" />
        </form>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
" class="pure-menu-heading pure-menu-link">Show All Votes</a>

    <?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->privilege;?>
</span>
</div><?php }
}
