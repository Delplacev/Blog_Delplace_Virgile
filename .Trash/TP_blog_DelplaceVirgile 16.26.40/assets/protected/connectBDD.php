<?php
$server_name = "localhost";
$user = "userBlog";
$mdp = "userBlog";
//Connexion
$link = mysql_connect($server_name, $user, $mdp );
//Si connection fail
if (!$link) {
	die('Connexion impossible : ' . mysql_error());
}
		
//select de la base 
$db_selected = mysql_select_db('BDD_BLOG_DelplaceVirgile', $link);
if (!$db_selected) {
	die ('Impossible de sélectionner la base de données : ' . mysql_error());
}