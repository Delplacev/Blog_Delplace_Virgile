<?php 

// Chemin image
// calculer retio taille image
// ouvrir img src 
// creer img dest 
// redim 
// rendre image dest 

if($_GET["imgSrc"] != ""){
	// Creation de l'emplacement de l'image
	$filename = "../images/".$_GET["imgSrc"];
	
	// Définition de la largeur et de la hauteur maximale
	$width = 600;
	$height = 500;

	// Content type
	header('Content-Type: image/jpg');

	// Cacul des nouvelles dimensions
	list($width_orig, $height_orig) = getimagesize($filename);

	$ratio_orig = $width_orig/$height_orig;

	if ($width/$height > $ratio_orig) {
	   $width = $height*$ratio_orig;
	} else {
	   $height = $width/$ratio_orig;
	}

	// Redimensionnement
	$image_p = imagecreatetruecolor($width, $height);
	$image = imagecreatefromjpeg($filename);
	imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

	// Affichage
	imagejpeg($image_p, null, 100);
}
