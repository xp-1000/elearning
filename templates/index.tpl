<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
			<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
			<!-- Feuilles de style -->
			<link href="css/style.css" rel="stylesheet" type="text/css">
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
			
			<!-- Titre-->
			<title>{if isset($titre)}{$titre}{/if}</title>
	</head>
	<body>
{if (isset($smarty.get.action) OR isset($smarty.post.username) OR isset($smarty.post.password))}
		<div class="alert alert-block alert-info">
			<a class="close">×</a>
			<h4 class="alert-heading">Indisponible</h4> La connexion ainsi que la récupération du mot de passe ne sont pas disponibles. Merci de revenir plus tard.
		</div>
{/if}
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
</html>