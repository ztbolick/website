<?php
include '../includes/db.php';
include '../includes/functions.php';
if(isset($_GET['id'])) {
	$id = $_GET['id'];
}
show($dbh, $id);
//adminPagination($dbh,$start,$recordsPerPage,$url); 
?>