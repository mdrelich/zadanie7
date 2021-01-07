<?php
/* Smarty version 3.1.30, created on 2021-01-07 18:46:25
  from "C:\xampp\htdocs\zadanie7\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ff748f11cad98_33377879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3587fac797407fea23bf2f304078fba107013fc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie7\\app\\views\\CalcView.tpl',
      1 => 1610041579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5ff748f11cad98_33377879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17325017485ff748f11ca8f0_02501766', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_17325017485ff748f11ca8f0_02501766 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="pure-menu pure-menu-horizontal bottom-margin">
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
		<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
	</div>
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<fieldset>
			<label>Kwota: </label>
			<input type="number" placeholder="Kwota kredytu" min="1" name="creditValue" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->creditValue;?>
"/><br/>
			<label>Ilość lat: </label>
			<input type="number" min="1" placeholder="Ilość lat" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
"/><br/>
			<label>Oprocentowanie</label>
			<input type="number" min="1" placeholder="Oprocntowanie" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
"/><br/>
		</fieldset>
		<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
	</form>
	<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
		<div class="messages info">


			Rata wynosi: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł

		</div>
	<?php }?>

<?php
}
}
/* {/block 'content'} */
}
