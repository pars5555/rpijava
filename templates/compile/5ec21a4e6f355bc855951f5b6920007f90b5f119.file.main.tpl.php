<?php /* Smarty version Smarty-3.1.11, created on 2015-03-06 17:51:25
         compiled from "D:\xampp\htdocs\rpijava\templates\admin\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2293854f9b0dda81331-28281823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec21a4e6f355bc855951f5b6920007f90b5f119' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rpijava\\templates\\admin\\main.tpl',
      1 => 1422969547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2293854f9b0dda81331-28281823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54f9b0ddab56a8_43300879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9b0ddab56a8_43300879')) {function content_54f9b0ddab56a8_43300879($_smarty_tpl) {?><?php if (!is_callable('smarty_function_nest')) include 'D:/xampp/htdocs/rpijava/classes/lib/smarty/plugins\\function.nest.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/admin/util/headerControls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
            <header>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/admin/util/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </header>
        <div class="wrapper">
            <input type="hidden" id="initialLoad" name="initialLoad" value="admin_main" />		
            <input type="hidden" id="contentLoad" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['contentLoad'];?>
" />
            <div id="main_content">
                <?php echo smarty_function_nest(array('ns'=>'content'),$_smarty_tpl);?>

            </div>

        </div>
            <footer>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/admin/util/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </footer>
    </body>
</html><?php }} ?>