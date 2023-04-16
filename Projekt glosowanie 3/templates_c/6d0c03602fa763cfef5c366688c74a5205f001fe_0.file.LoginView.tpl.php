<?php
/* Smarty version 3.1.30, created on 2023-03-09 12:36:30
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Template\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6409c4beddbe02_43273891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d0c03602fa763cfef5c366688c74a5205f001fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Template\\app\\views\\LoginView.tpl',
      1 => 1678361786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6409c4beddbe02_43273891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14405650836409c4beddb7e2_64049169', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_14405650836409c4beddb7e2_64049169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
		<legend>Logowanie do systemu</legend>
		<fieldset>
			<div class="pure-control-group">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" />
			</div>
			<div class="pure-control-group">
				<label for="id_pass">pass: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
			<div class="pure-controls">
				<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
			</div>
		</fieldset>
	</form>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">Nie masz jeszcze konta? zarejestruj się!</a>

	<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
