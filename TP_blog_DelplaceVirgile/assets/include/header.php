<?php error_reporting(0);
include('assets/include/setCookie.php'); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Blog de Delplace Virgile</title>
    <meta name="description" content="Petit blog pour m'initier à PHP">
    <meta name="author" content="Delplace Virgile">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
   
    <link href="assets/css/bootstrap.css" rel="stylesheet">
     <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <link type="text/css" rel="Stylesheet" href="assets/css/bjqs.css" />
    <script type="text/javascript" src="assets/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="assets/js/jsBlog.js"></script>
    <script type="text/javascript" src="assets/js/bjqs-1.3.js"></script>
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
