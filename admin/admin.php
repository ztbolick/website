<?php
include 'includes/db.php';
include 'includes/functions.php';
$url = 'admin.php';
session_start();
// Authentication section
$subject = $_POST['subject'];
$content = $_POST['content'];
$recordsPerPage = 5;
$start= 0;
// $userid = $_GET['upid'];
$deleteid = $_GET['deleteid'];
if (isset($_GET['start'])) {
	$start= $_GET['start'];
}
$updateid = $_POST['userid'];
$server = '/admin/blog/admin.php';
if ($_SESSION['auth'] =! 'yes' ) {
		
		header ("Location: index.php");
}
/// set post in db
if ($_POST['submit'] == 'post' &&  $_SERVER['PHP_SELF'] == '/admin/blog/admin.php') {
	$insertsql = $dbh->prepare("INSERT INTO posts(subject, content) VALUES (?, ?) ");
	$insertsql->bindParam(1,$subject,PDO::PARAM_STR);
	$insertsql->bindParam(2,$content,PDO::PARAM_STR);
	$insertsql->execute();
}
//delete post in db
Delete($dbh,$server,$deleteid)
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
	</head>
	<body>
		<form action="admin.php" method="post">
			<input type="hidden" name = "userid" value = "<?php echo $id;?>">
			<input type="text" name ="subject" value = "<?php echo $subject;?>" placeholder="Subject"><br>
			<textarea class="FormElement" name="content" placeholder="write the new post here" value="<?php echo $content;?>" id="term" cols="40" rows="4"></textarea>
			<input type="submit" name="submit" value="post">
		</form>
		<br>
		<h1> last 5 Posts </h1>
		<?php
		pag($dbh,$start,$recordsPerPage,$url);
		?>
	</body>
</html>