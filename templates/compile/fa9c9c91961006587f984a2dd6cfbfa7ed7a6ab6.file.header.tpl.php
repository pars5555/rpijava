<?php /* Smarty version Smarty-3.1.11, created on 2015-03-06 17:51:22
         compiled from "D:\xampp\htdocs\rpijava\templates\main\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1773454f9b0da798c87-46924421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa9c9c91961006587f984a2dd6cfbfa7ed7a6ab6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rpijava\\templates\\main\\util\\header.tpl',
      1 => 1416483090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1773454f9b0da798c87-46924421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54f9b0da7a4308_16404122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9b0da7a4308_16404122')) {function content_54f9b0da7a4308_16404122($_smarty_tpl) {?>main header
<?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsUser']){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/user/do_logout">logout</a>    
<?php }?>
</br><?php }} ?>