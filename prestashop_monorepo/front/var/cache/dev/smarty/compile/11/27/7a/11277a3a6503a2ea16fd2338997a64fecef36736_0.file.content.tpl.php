<?php
/* Smarty version 3.1.48, created on 2024-12-18 12:05:07
  from '/var/www/html/admin961m2objh/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6762ac638545e9_06294656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11277a3a6503a2ea16fd2338997a64fecef36736' => 
    array (
      0 => '/var/www/html/admin961m2objh/themes/default/template/content.tpl',
      1 => 1733778028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6762ac638545e9_06294656 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
