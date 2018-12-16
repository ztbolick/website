<?
include 'includes/db.php';
include 'includes/functions.php';

// These values are needed for the pagination method to work correctly
$start = 0;
$recordsPerPage = 5;
// $userid = $_GET['upid'];
$deleteid = $_GET['deleteid'];
if (isset($_GET['start'])) {
  $start= $_GET['start'];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8">
        <title>Summernote</title>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
      </head>
      <body>
        <?php
        pag($dbh,$start,$recordsPerPage,$url);
        ?>
      </body>
    </html>
  </head>
  <body>
  </body>
</html>