<?php /* Smarty version 3.0rc1, created on 2018-06-21 07:59:55
         compiled from "templates/sekaimmo\elements/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76935b2b4ceba1cc32-98867456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc928ba647523cdce82ef0c6792d37a121b85e75' => 
    array (
      0 => 'templates/sekaimmo\\elements/info.tpl',
      1 => 1520364431,
    ),
  ),
  'nocache_hash' => '76935b2b4ceba1cc32-98867456',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="title">
	Status: PokeMaster X
</div>
<div class="info">
	<?php  $_smarty_tpl->tpl_vars['world'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('worlds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['world']->key => $_smarty_tpl->tpl_vars['world']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['world']->key;
?>
	
		<b>Status:</b>  
		<?php if ($_smarty_tpl->getVariable('serverOnline')->value[$_smarty_tpl->getVariable('id')->value]){?>
			<font color='green'>Online</font><br />
			<b>Uptime:</b> <?php echo $_smarty_tpl->getVariable('serverUptime')->value[$_smarty_tpl->getVariable('id')->value];?>
 <br />

		<?php }else{ ?>
			<font color='red'>Offline</font><br />
		<?php }?>
	<?php }} ?>
</div>