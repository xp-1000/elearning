<?php

function getConnection()
{
/* Paramètres de connexion à la base de données */
	$host = 'localhost';
	$database = 'elearning';
	$user = 'elearning';
	$password = 'elearningelearning';
	try
	{
		$ressource = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
		return $ressource;
	}
	catch(PDOException $e) // Si une erreur se produit
	{
		return $e -> getMessage();
	}
}
######===============
$ressource = getConnection();
$requete = 'SELECT * FROM type_utilisateur';
$preparation = $ressource -> prepare($requete);
$preparation -> execute();
$data = $preparation -> fetchAll(PDO::FETCH_CLASS);
echo $data[0]->type;
?>
