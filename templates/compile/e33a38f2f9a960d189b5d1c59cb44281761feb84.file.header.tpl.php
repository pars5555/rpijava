<?php /* Smarty version Smarty-3.1.11, created on 2015-02-14 22:44:49
         compiled from "D:\xampp\htdocs\visitka\templates\main\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1945054df97a1e2d2b9-50765828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33a38f2f9a960d189b5d1c59cb44281761feb84' => 
    array (
      0 => 'D:\\xampp\\htdocs\\visitka\\templates\\main\\util\\header.tpl',
      1 => 1416483090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1945054df97a1e2d2b9-50765828',
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
  'unifunc' => 'content_54df97a1e6c882_73733486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df97a1e6c882_73733486')) {function content_54df97a1e6c882_73733486($_smarty_tpl) {?>main header
<?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsUser']){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/user/do_logout">logout</a>    
<?php }?>
</br><?php }} ?>