<?php /* Smarty version Smarty-3.1.11, created on 2015-03-06 17:51:25
         compiled from "D:\xampp\htdocs\rpijava\templates\admin\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3140054f9b0ddb5bcb7-27034491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a7732996e781e2475f8eecc5aaff664652d7ac' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rpijava\\templates\\admin\\util\\header.tpl',
      1 => 1422970115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3140054f9b0ddb5bcb7-27034491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54f9b0ddb68fc6_15370166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9b0ddb68fc6_15370166')) {function content_54f9b0ddb68fc6_15370166($_smarty_tpl) {?><a class="main_logo" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
">Admin Panel</a>
<?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsAdmin']){?>
    <a class="logout button grey" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/admin/do_logout">Logout</a>
<?php }?>
<div class="clear"></div>

<?php }} ?>