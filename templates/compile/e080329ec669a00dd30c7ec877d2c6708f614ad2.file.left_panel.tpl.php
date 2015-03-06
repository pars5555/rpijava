<?php /* Smarty version Smarty-3.1.11, created on 2015-02-14 22:44:53
         compiled from "D:\xampp\htdocs\visitka\templates\admin\left_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99154df97a5edaba5-74171607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e080329ec669a00dd30c7ec877d2c6708f614ad2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\visitka\\templates\\admin\\left_panel.tpl',
      1 => 1422970157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99154df97a5edaba5-74171607',
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
  'unifunc' => 'content_54df97a5ee8b72_45121875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df97a5ee8b72_45121875')) {function content_54df97a5ee8b72_45121875($_smarty_tpl) {?><div id="mainLeftPanel"  class="left-panel">
    <div class="left-panel_content">    
        <h1 class="any_categories"><span class="glyphicon"></span> Categories</h1>            
        <ul>
            <li>
                <a class="<?php if ($_smarty_tpl->tpl_vars['ns']->value['load_name']=='copters'){?>selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/admin/copters">Category</a>
            </li>
            <li>
                <a href="#">Category</a>
            </li>
            <li>
                <a href="#">Category</a>
            </li>
            <li>
                <a href="#">Category</a>
            </li>
        </ul>
    </div>
</div><?php }} ?>