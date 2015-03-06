<?php /* Smarty version Smarty-3.1.11, created on 2015-03-06 17:51:25
         compiled from "D:\xampp\htdocs\rpijava\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:659354f9b0ddb893d4-54160471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd2299ef9d4199cdb585267795cd29552cc4ef31' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rpijava\\templates\\admin\\login.tpl',
      1 => 1422969560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '659354f9b0ddb893d4-54160471',
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
  'unifunc' => 'content_54f9b0ddb93045_91508584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9b0ddb93045_91508584')) {function content_54f9b0ddb93045_91508584($_smarty_tpl) {?><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
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