<?php

function login($dbh,$uname,$pword){

	if ($_POST['submit'] == 'Log in'){
	    
	    $pword1 = sha1($pword);
	    $sql = $dbh->prepare("SELECT id from user where email = ? and password = ?");
	    $sql->bindParam(1,$uname,PDO::PARAM_STR);
	    $sql->bindParam(2,$pword1,PDO::PARAM_STR);
	    $sql->execute();
	    $row = $sql->fetch();
	    $id = $row[0];
	     
	    
	    if (is_numeric($id)){
	        $_SESSION['auth'] = 'yes';
	        $_SESSION['id'] = $id;
	        header ("Location: admin.php");
	     }else{

	  echo 'Wrong username and password try again<br>';
	  print_r($sql);
	  echo $uname.' '.$pword1;
	}
	  
	}
}


function pag($dbh,$start,$recordsPerPage,$url){

$countSql=$dbh->prepare("Select COUNT(id) from posts");
$countSql->execute();
$row= $countSql->fetch();
$numRecords = $row[0];

$numlinks = ceil($numRecords/$recordsPerPage);
// echo $numlinks;
// echo $start;
$start = $start *5;



$sql = $dbh->prepare("SELECT id, subject, content from posts LIMIT ?, ?");
$sql->bindParam(1,$start,PDO::PARAM_INT);
$sql->bindParam(2,$recordsPerPage,PDO::PARAM_INT);
$sql->execute();
while ($row = $sql->fetch()){
 $id = $row[0];
 $subject = $row[1];
 $content = $row[2];

echo $subject.' <a href="'.$url.'?deleteid='.$id.'" onclick="return confirm(\'Are you sure you want to delete '.$subject.'? \');">Delete</a>  <a href="'.$url.'?upid='.$id.'">Update</a><br>'.$content.'<br>';
//$content.'<br>';
 //or it could equal $fullname = $row['fullname'];
 //or it could equal $id = $row['id'];

}

for($i=0;$i<$numlinks;$i++){
	$y=0;
	$y= $i + 1;
	//if($i==0) $i++;

echo '<a href="'.$url.'?start='.$i.'">'.$y.'</a> ';

}
}

function Delete($dbh,$server,$deleteid) {

if (isset($deleteid) && $_SERVER['PHP_SELF'] == $server){
	$delsql = $dbh->prepare("delete from posts where id = '$deleteid'");
	$delsql->execute();
	echo "Record deleted!<br>";
}

}

function update($dbh,$updateid,$content,$subject){

	if (isset($updateid) && $_SERVER['PHP_SELF'] == '/School/blog/admin.php'){
	
	$upsql = $dbh->prepare("UPDATE posts SET subject= ?, content= ? WHERE id =?");
	$upsql->bindParam(1,$subject,PDO::PARAM_STR);
	$upsql->bindParam(2,$content,PDO::PARAM_STR);
    $upsql->bindParam(3,$updateid,PDO::PARAM_INT);
	$upsql->execute();
	echo "Record Updated!<br>";
}
}

?>