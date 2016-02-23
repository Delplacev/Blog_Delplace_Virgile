<?php

$server_name = "localhost";
$user = "root";
$mdp = "root";

//Connexion
$link = mysql_connect($server_name, $user, $mdp );

//Si connection fail
if (!$link) {
	die('Connexion impossible : ' . mysql_error());
}
		

//select de la base 
$db_selected = mysql_select_db('BDD_TP_LANNOY', $link);
if (!$db_selected) {
	die ('Impossible de sélectionner la base de données : ' . mysql_error());
}