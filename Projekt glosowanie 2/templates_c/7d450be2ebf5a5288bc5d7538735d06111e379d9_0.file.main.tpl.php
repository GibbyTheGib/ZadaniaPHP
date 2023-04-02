<?php
/* Smarty version 3.1.30, created on 2023-03-12 07:46:28
  from "C:\xampp\htdocs\Glosowanie\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640d754426fac1_61162800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d450be2ebf5a5288bc5d7538735d06111e379d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Glosowanie\\app\\views\\templates\\main.tpl',
      1 => 1678487893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640d754426fac1_61162800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

	<head>
		<meta charset="utf-8" />
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "brak tytułu" : $tmp);?>
</title>
		<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
			integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
	</head>

	<body>
		<div style="margin: 1em;">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1249309766640d754426f643_16944463', 'content');
?>

		</div>
	</body>

</html><?php }
/* {block 'content'} */
class Block_1249309766640d754426f643_16944463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
