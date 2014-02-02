<?php

include('lib/Smarty.class.php');
$titre = 'Accueil';
$tmpl = new Smarty;
$tmpl -> assign('titre',$titre);
$tmpl -> assign('tmpl_file','templates/accueil.tpl');
$tmpl -> display('layout.tpl');

?>