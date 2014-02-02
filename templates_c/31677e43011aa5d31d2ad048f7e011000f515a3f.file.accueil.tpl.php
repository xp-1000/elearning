<?php /* Smarty version Smarty-3.1.7, created on 2012-01-04 10:18:21
         compiled from "templates/accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7330271084f04195da04fc8-38766057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31677e43011aa5d31d2ad048f7e011000f515a3f' => 
    array (
      0 => 'templates/accueil.tpl',
      1 => 1325668683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7330271084f04195da04fc8-38766057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f04195daab58',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f04195daab58')) {function content_4f04195daab58($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['titre']->value)){?><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
<?php }else{ ?>Toto<?php }?></h2>
<p>Bonjour les amis</p><?php }} ?>