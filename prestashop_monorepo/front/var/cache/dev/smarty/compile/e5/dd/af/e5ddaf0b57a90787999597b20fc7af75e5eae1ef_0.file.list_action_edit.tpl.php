<?php
/* Smarty version 3.1.48, created on 2024-12-15 20:26:54
  from '/var/www/html/admin961m2objh/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675f2d7ec6edc6_56814897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5ddaf0b57a90787999597b20fc7af75e5eae1ef' => 
    array (
      0 => '/var/www/html/admin961m2objh/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1734289980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675f2d7ec6edc6_56814897 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
