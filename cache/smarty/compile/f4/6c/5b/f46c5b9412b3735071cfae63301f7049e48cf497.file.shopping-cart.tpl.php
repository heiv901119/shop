<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 16:32:25
         compiled from "C:\xampp\htdocs\tiendita\themes\default-bootstrap\modules\loyalty\views\templates\hook\shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2923457ab3af9dd23e8-22388242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f46c5b9412b3735071cfae63301f7049e48cf497' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendita\\themes\\default-bootstrap\\modules\\loyalty\\views\\templates\\hook\\shopping-cart.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2923457ab3af9dd23e8-22388242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'points' => 0,
    'voucher' => 0,
    'guest_checkout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab3af9df5679_00953524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3af9df5679_00953524')) {function content_57ab3af9df5679_00953524($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<p id="loyalty">
	<i class="icon-flag"></i>
	<?php if ($_smarty_tpl->tpl_vars['points']->value>0) {?>
		<?php echo smartyTranslate(array('s'=>'By checking out this shopping cart you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>
 <b>
		<?php if ($_smarty_tpl->tpl_vars['points']->value>1) {?><?php echo smartyTranslate(array('s'=>'%d loyalty points','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d loyalty point','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>
		<?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['guest_checkout']->value)&&$_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup><?php }?>.<br />
		<?php if (isset($_smarty_tpl->tpl_vars['guest_checkout']->value)&&$_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Not available for Instant checkout order','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?>
	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'Add some products to your shopping cart to collect some loyalty points.','mod'=>'loyalty'),$_smarty_tpl);?>

	<?php }?>
</p>
<!-- END : MODULE Loyalty --><?php }} ?>
