<!DOCTYPE html>
<html lang="en">
  <head>
  	<?
	include '../admin/includes/db.php';
	include '../admin/includes/functions.php';
	?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114591991-1"></script>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  intial-scale=1, shrink-to-fit=no">
    <meta name="description" content="San Diego Mesa Computer Science Club">
    <meta name="keywords" content="San Diego, SD, Mesa, CSC, MesaCSC, computer, science, club">
    <title>Mesa CSC</title>

    <link rel="icon" href="favicon.ico">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FULLCALENDAR CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- JQUERY -->
    <script src="/js/jquery.min.js"></script>
    <!-- MAIN.JS -->
  </head>

  <body data-spy="scroll" data-target="#navbar" data-offset="30">
    <?php include '../partials/_nav.php'; ?>
    <div class="container my-5">
    		<?php	
				$start = 0;
				$recordsPerPage = 5;
				$url = $_SERVER['PHP_SELF'];
				PostPagination($dbh,$start,$recordsPerPage,$url); 
    		?>
    </div>