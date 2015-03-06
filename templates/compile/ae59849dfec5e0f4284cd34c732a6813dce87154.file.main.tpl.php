<?php /* Smarty version Smarty-3.1.11, created on 2015-02-14 22:44:49
         compiled from "D:\xampp\htdocs\visitka\templates\main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54054df97a1c3ce54-12640628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae59849dfec5e0f4284cd34c732a6813dce87154' => 
    array (
      0 => 'D:\\xampp\\htdocs\\visitka\\templates\\main\\main.tpl',
      1 => 1404287074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54054df97a1c3ce54-12640628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54df97a1d83c52_24091758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df97a1d83c52_24091758')) {function content_54df97a1d83c52_24091758($_smarty_tpl) {?><?php if (!is_callable('smarty_function_nest')) include 'D:/xampp/htdocs/visitka/classes/lib/smarty/plugins\\function.nest.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/headerControls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>    
    <body>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
        <?php echo smarty_function_nest(array('ns'=>'content'),$_smarty_tpl);?>
                        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <input type="hidden" id="initialLoad" name="initialLoad" value="main" />
        <input type="hidden" id="contentLoad" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['contentLoad'];?>
" />	
    </body>


</html><?php }} ?>