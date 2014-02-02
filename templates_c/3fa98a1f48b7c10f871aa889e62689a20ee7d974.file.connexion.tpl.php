<?php /* Smarty version Smarty-3.1.7, created on 2012-01-04 10:32:55
         compiled from "templates/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20771967374f04189585cb26-35761535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fa98a1f48b7c10f871aa889e62689a20ee7d974' => 
    array (
      0 => 'templates/connexion.tpl',
      1 => 1325669574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20771967374f04189585cb26-35761535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0418958600f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0418958600f')) {function content_4f0418958600f($_smarty_tpl) {?><div id="formulaire">
	<form name="form_inscription" action="inscription.php" method="get">

	<fieldset>

	<legend>Connexion</legend>

	Num&eacute;ro &eacute;tudiant : <input type="text" name="numeroetu" value="" /> <br/>

	Date de naissance : <br/>



	<br/><br/>

	<label><input type="checkbox" name="memoire" value="1"/>Se rappeler de mes identifiants</label><br/>

	<br/><br/>

	<table summary="envoi" cellspacing="3">
		<tr>
		<td><input type="submit" class="btn primary">VALIDER</button></td>
		<td><button type="reset">ANNULER</button></td>
		</tr>
	</table>

	</form>
</div><?php }} ?>