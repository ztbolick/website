<?php

include 'db.php';
session_start();
// take in the user name and password
$username = $_POST['email'];
$password = sha1($_POST['password']);

// check if the user hit login
if ($_POST['submit'] == 'log in') {
    
    // The variables here need to be bound to prevent SQL injection
    $sql = $dbh->prepare("SELECT * from user where email = '$username' and pword = '$password'");
    $sql->execute();

    while ($row = $sql->fetch()) {
      echo $row;
    }
    
    if (is_numeric($id)) {
      header("Location: ../admin.php");
    } else {
      $_SESSION['message'] = 'Wrong email or password.';
      header("Location: ../index.php");
    }
}
?>