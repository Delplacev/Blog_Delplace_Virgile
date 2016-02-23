<?php error_reporting(0);
include('assets/include/setCookie.php'); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Blog de Delplace Virgile</title>
    <meta name="description" content="Petit blog pour m'initier à PHP">
    <meta name="author" content="Jean-philippe Lannoy">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="assets/js/jsBlog.js"></script>
  </head>

  <body>
      <?php 
      session_start();
      //Si on est connecter
       if(isset($_SESSION["session"])){
        $connect = true ;
      } else {
         $connect = false ;
      }
   
    ?>