<?php
/* Smarty version 3.1.30, created on 2021-01-07 18:42:46
  from "C:\xampp\htdocs\zadanie7\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ff74816a2c4c8_78632069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86c6f16fc08758c779f83f2c94c9a975e6b401dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie7\\app\\views\\templates\\main.tpl',
      1 => 1610041363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff74816a2c4c8_78632069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8"/>
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "brak tytułu" : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
		  integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css"/>
</head>
<body>
<div style="margin: 1em;">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_908357675ff74816a2c0f4_81690402', 'content');
?>

</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_908357675ff74816a2c0f4_81690402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Autor:Maciej Drelich <?php
}
}
/* {/block 'content'} */
}
