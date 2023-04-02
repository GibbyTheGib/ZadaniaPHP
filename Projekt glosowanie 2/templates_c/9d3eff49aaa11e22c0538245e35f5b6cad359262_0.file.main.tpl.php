<?php
/* Smarty version 3.1.30, created on 2023-03-10 23:38:14
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Glosowanie\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640bb156ebc5b3_62370160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d3eff49aaa11e22c0538245e35f5b6cad359262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Glosowanie\\app\\views\\templates\\main.tpl',
      1 => 1678487893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640bb156ebc5b3_62370160 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_644952989640bb156ebb064_24128515', 'content');
?>

		</div>
	</body>

</html><?php }
/* {block 'content'} */
class Block_644952989640bb156ebb064_24128515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
