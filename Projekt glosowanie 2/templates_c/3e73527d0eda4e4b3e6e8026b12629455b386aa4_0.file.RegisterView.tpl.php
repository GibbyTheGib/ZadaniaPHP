<?php
/* Smarty version 3.1.30, created on 2023-03-09 12:40:50
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Template\app\views\RegisterView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6409c5c2d26f65_30610145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e73527d0eda4e4b3e6e8026b12629455b386aa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Template\\app\\views\\RegisterView.tpl',
      1 => 1678362046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6409c5c2d26f65_30610145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5039215896409c5c2d26986_13762632', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_5039215896409c5c2d26986_13762632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend>Rejestracja do systemu</legend>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_login">name: </label>
                <input id="id_login" type="text" name="name" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">surname: </label>
                <input id="id_pass" type="text" name="surname" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">mail: </label>
                <input id="id_pass" type="text" name="mail" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password: </label>
                <input id="id_pass" type="password" name="pass" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password repeat: </label>
                <input id="id_pass" type="password" name="pass2" /><br />
            </div>
            <div class="pure-controls">
                <input type="submit" value="zarejestruj" class="pure-button pure-button-primary" />
            </div>
        </fieldset>
    </form>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Masz już konto? zaloguj się!</a>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
