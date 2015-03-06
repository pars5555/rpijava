<?php /* Smarty version Smarty-3.1.11, created on 2015-02-14 22:45:19
         compiled from "D:\xampp\htdocs\visitka\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3062554df97bf4feb87-82918319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ec12131597db8fc112ad77e64320ce28a7a272' => 
    array (
      0 => 'D:\\xampp\\htdocs\\visitka\\templates\\admin\\login.tpl',
      1 => 1422969560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3062554df97bf4feb87-82918319',
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
  'unifunc' => 'content_54df97bf5319d1_59442901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df97bf5319d1_59442901')) {function content_54df97bf5319d1_59442901($_smarty_tpl) {?><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/admin/do_login">
    <div class="login-wrapper">
        <div class="form-group">
            <label class="input_label">Username:</label>
            <input class="text"  type="text" name="username"/>
        </div>
        <div class="form-group">
            <label class="input_label">Password:</label>
            <input class="text" type="password" name="password"/>  
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['ns']->value['error_message'])){?>
            <div class="error" >
                <?php echo $_smarty_tpl->tpl_vars['ns']->value['error_message'];?>

            </div>
        <?php }?>  
        <div class="login_btn">
            <input class="button grey" type="submit" value="Login" />    
        </div>
    </div>
</form><?php }} ?>