<?php

include('lib/Smarty.class.php');

$tmpl = new Smarty;
$tmpl -> assign('tmpl_file','templates/connexion.tpl');
$tmpl -> display('layout.tpl');

?>