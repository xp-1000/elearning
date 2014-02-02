<?php 

include("database.php"); 

if (isset($_POST['code']) AND isset($_POST['prenom']) AND isset($_POST['nom']) AND isset($_POST['email']))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password, $pdo_options);
		//$bdd->exec('INSERT INTO utilisateurs(code, prenom, nom, courriel, id_type_utilisateur) VALUES(' . $_POST['code'] . ', \'' . $_POST['prenom'] . '\', \'' . $_POST['nom'] . '\', \'' . $_POST['email'] . '\', 2)');
		echo 'INSERT INTO utilisateurs(code, prenom, nom, courriel, id_type_utilisateur) VALUES(' . $_POST['code'] . ', \'' . $_POST['prenom'] . '\', \'' . $_POST['nom'] . '\', \'' . $_POST['email'] . '\', 2)';
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
}
else
	echo "ERREUR UN CHAMPS N'A PAS ETE REMPLI";

?>