<?php /* Smarty version Smarty-3.1.11, created on 2015-04-19 10:24:43
         compiled from "D:\xampp\htdocs\rpijava\templates\main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:397654f9b0da6d9009-96956713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd709d65caaf3cd093a23ce20251a02d21a1724aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rpijava\\templates\\main\\main.tpl',
      1 => 1427136175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '397654f9b0da6d9009-96956713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54f9b0da7091c2_41633639',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9b0da7091c2_41633639')) {function content_54f9b0da7091c2_41633639($_smarty_tpl) {?><?php if (!is_callable('smarty_function_nest')) include 'D:/xampp/htdocs/rpijava/classes/lib/smarty/plugins\\function.nest.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/headerControls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>    
    <body>
        <a style="visibility: hidden;position: fixed" href="https://plus.google.com/104486041980261075638" rel="publisher">Google+</a>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
        <?php echo smarty_function_nest(array('ns'=>'content'),$_smarty_tpl);?>
                        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <input type="hidden" id="initialLoad" name="initialLoad" value="main" />
        <input type="hidden" id="contentLoad" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['contentLoad'];?>
" />	
    </body>


</html><?php }} ?>