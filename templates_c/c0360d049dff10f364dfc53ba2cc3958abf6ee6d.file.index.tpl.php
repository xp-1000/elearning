<?php /* Smarty version Smarty-3.1.7, created on 2012-02-06 23:51:48
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7313914324f30545d151ce0-40121789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1328568742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7313914324f30545d151ce0-40121789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f30545d1db0c',
  'variables' => 
  array (
    'titre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f30545d1db0c')) {function content_4f30545d1db0c($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
			<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
			<!-- Feuilles de style -->
			<link href="css/style.css" rel="stylesheet" type="text/css">
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
			
			<!-- Titre-->
			<title><?php if (isset($_smarty_tpl->tpl_vars['titre']->value)){?><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
<?php }?></title>
	</head>
	<body>
<?php if ((isset($_GET['action'])||isset($_POST['username'])||isset($_POST['password']))){?>
		<div class="alert alert-block alert-info">
			<a class="close">×</a>
			<h4 class="alert-heading">Indisponible</h4> La connexion ainsi que la récupération du mot de passe ne sont pas disponibles. Merci de revenir plus tard.
		</div>
<?php }?>
		<div id="global">

			<div class="well" id="contenu">
			<h2>Accès restreint</h2>
				<form action="" method="post">
					<fieldset>					
						<div class="controls" id="form">
							<input type="text" id="username" class="span3" placeholder="Nom d'utilisateur" name="username"/>
							<input type="password" id="password" class="span3" placeholder="Mot de passe" name="password"/>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary"/>Connexion</button>&nbsp<a href="?action=lost_password" class="btn">J'ai oublié mon mot de passe</a>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html><?php }} ?>