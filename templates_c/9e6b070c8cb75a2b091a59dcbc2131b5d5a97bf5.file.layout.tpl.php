<?php /* Smarty version Smarty-3.1.7, created on 2012-01-04 10:32:14
         compiled from "./templates/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8315090014f0418957d5c99-92962346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1325669525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8315090014f0418957d5c99-92962346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f041895856af',
  'variables' => 
  array (
    'titre' => 0,
    'tmpl_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f041895856af')) {function content_4f041895856af($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">

<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>e-learning <?php if (isset($_smarty_tpl->tpl_vars['titre']->value)){?>- <?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
<?php }?></title>
</head>

<body>

<div id="header">e-learning</div>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tmpl_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<a href="connexion.php">Connexion</a>
	


</body>

</html><?php }} ?>