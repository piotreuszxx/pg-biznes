<?php
/* Smarty version 3.1.48, created on 2024-12-18 12:05:16
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6762ac6c2390a7_96784626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e807335546cfa2360c36327ac89dd2fcb054379' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1733778033,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6762ac6c2390a7_96784626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /var/www/html/modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl --><section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13979564476762ac6c229f07_48295190', 'active_filters_title');
?>


  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13356190636762ac6c233ff9_46814380', 'active_filters_item');
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>
</section>
<!-- end /var/www/html/modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl --><?php }
/* {block 'active_filters_title'} */
class Block_13979564476762ac6c229f07_48295190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_13979564476762ac6c229f07_48295190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p class="h6 <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active-filter-title<?php } else { ?>hidden-xs-up<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
  <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_13356190636762ac6c233ff9_46814380 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_13356190636762ac6c233ff9_46814380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li class="filter-block">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s:','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        <?php
}
}
/* {/block 'active_filters_item'} */
}
