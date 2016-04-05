<?php
define('TARGET', '../images/');

  if( !empty($_FILES['fichier']['name']) )
  {
  	var_dump($_FILES);
  	$extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
  	//$nomImage = md5(uniqid()) .'.'. $extension;
  	$nomImage = $_FILES['fichier']['name'];
  	var_dump($nomImage);
  	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
            {
              $message = 'Upload réussi !';
             
            }
            else
            {
              // Sinon on affiche une erreur systeme
              $message = 'Erreur';
			 
            }
  }
  echo $message ;