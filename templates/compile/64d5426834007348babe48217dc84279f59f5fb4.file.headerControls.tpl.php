<?php /* Smarty version Smarty-3.1.11, created on 2015-03-16 21:00:26
         compiled from "D:\xampp\htdocs\rpijava\templates\main\util\headerControls.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1564954f9b0da736a96-29086955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64d5426834007348babe48217dc84279f59f5fb4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rpijava\\templates\\main\\util\\headerControls.tpl',
      1 => 1426525011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564954f9b0da736a96-29086955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54f9b0da752017_10707777',
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'VERSION' => 0,
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9b0da752017_10707777')) {function content_54f9b0da752017_10707777($_smarty_tpl) {?>

<!-- NGS Theme Styles -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/main/style.css?<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/main/skin.css?<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
" />
<link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/favicon.png" />
<script type="text/javascript">
    
        var ngs = {};
    	        
        var SITE_URL = "<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
";
        var SITE_PATH = "<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
";   
</script>


<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/lib/prototype.js" ></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/lib/jquery/jquery.js" ></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/lib/jquery/jquery-ui-1.9.2.js"></script>
<script type="text/javascript">
    jQuery.noConflict();
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs.js?4_2_6"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs_loads.js?4_2_6"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs_util.js?4_2_6"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs_actions.js?4_2_6"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs_manager.js?4_2_6"></script>

<?php }} ?>