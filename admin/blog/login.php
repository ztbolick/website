<?php

include 'includes/db.php'; 
include 'includes/functions.php';
session_start();
$uname = $_POST['email'];
$pword = $_POST['pword'];

//$test=sha1($pword);

//echo $test;


login($dbh,$uname,$pword);



?>

<form action = "login.php" method="post">
<input type="text" name ="email" placeholder="e-mail"><br>
<input type="password" name="pword" placeholder="password"><br>    
<input type="submit" name="submit" value="Log in">
</form>