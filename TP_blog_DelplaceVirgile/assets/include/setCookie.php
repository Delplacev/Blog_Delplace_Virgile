<?php
//Création du cookie avec le nom pour 365 jours
setcookie("nom","delplace",time() + 365*24*3600);

// Cookie qui compte le nombre de chargement
if(isset($_COOKIE["nbChargement"])){
	setcookie("nbChargement",$_COOKIE["nbChargement"] +1 ,time() + 365*24*3600);
} else{
	setcookie("nbChargement","1" ,time() + 365*24*3600);
}