<?php
/* Smarty version 3.1.48, created on 2025-01-28 17:38:19
  from '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_679907fb9b7f22_24018382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b49c940fac8bfd89b21826b353d72f367a02f9bf' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl',
      1 => 1738082265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679907fb9b7f22_24018382 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag(
    'config',
    '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' ));?>
',
    {
      'debug_mode':false
      <?php if ($_smarty_tpl->tpl_vars['gaAnonymizeEnabled']->value) {?>, 'anonymize_ip': true<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['userId']->value && !$_smarty_tpl->tpl_vars['backOffice']->value) {?>, 'user_id': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userId']->value,'htmlall','UTF-8' ));?>
'<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['backOffice']->value && !$_smarty_tpl->tpl_vars['trackBackOffice']->value) {?>, 'non_interaction': true, 'send_page_view': false<?php }?>
    }
  );
<?php echo '</script'; ?>
>

<?php }
}
