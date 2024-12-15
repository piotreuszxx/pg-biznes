<?php
/* Smarty version 3.1.48, created on 2024-12-15 20:43:25
  from '/var/www/html/admin961m2objh/themes/default/template/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675f315d604324_71698053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8de8e7263045d9ed24dbdbf390532d0d90215d99' => 
    array (
      0 => '/var/www/html/admin961m2objh/themes/default/template/helpers/view/view.tpl',
      1 => 1734289980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675f315d604324_71698053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_336773359675f315d578db5_47339659', "leadin");
?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_802943172675f315d579516_09831086', "override_tpl");
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminView'),$_smarty_tpl ) );?>

<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif ((isset($_GET['controller']))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }
}
/* {block "leadin"} */
class Block_336773359675f315d578db5_47339659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_336773359675f315d578db5_47339659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
/* {block "override_tpl"} */
class Block_802943172675f315d579516_09831086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_802943172675f315d579516_09831086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_tpl"} */
}
