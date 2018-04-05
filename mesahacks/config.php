<?php

/**
 * Configuration for database connection
 *
 */

$host       = "107.180.51.231";
$username   = "mesacsc";
$password   = "c4TBt1tU!";
$dbname     = "mesaHacks"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>
