<?php /* Smarty version Smarty-3.1.11, created on 2015-02-14 22:44:53
         compiled from "D:\xampp\htdocs\visitka\templates\admin\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132154df97a5e7a020-70467078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ee809fe3c40a5e31e931c63403b91f5953c1d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\visitka\\templates\\admin\\util\\header.tpl',
      1 => 1422970115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132154df97a5e7a020-70467078',
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
  'unifunc' => 'content_54df97a5e91099_73549905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df97a5e91099_73549905')) {function content_54df97a5e91099_73549905($_smarty_tpl) {?><a class="main_logo" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
">Admin Panel</a>
<?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsAdmin']){?>
    <a class="logout button grey" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/admin/do_logout">Logout</a>
<?php }?>
<div class="clear"></div>

<?php }} ?>