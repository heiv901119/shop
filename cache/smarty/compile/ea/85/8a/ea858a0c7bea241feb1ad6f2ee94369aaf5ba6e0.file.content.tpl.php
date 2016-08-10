<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 16:32:22
         compiled from "C:\xampp\htdocs\tiendita\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113357ab3af6906f14-73786306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea858a0c7bea241feb1ad6f2ee94369aaf5ba6e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendita\\admin\\themes\\default\\template\\content.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113357ab3af6906f14-73786306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab3af6987db1_91077398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3af6987db1_91077398')) {function content_57ab3af6987db1_91077398($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
