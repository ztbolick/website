<?php
function login ($dbh, $uname, $pword) {
    
    if ($_POST['submit'] == 'Log in') {
        $pword1 = sha1($pword);
        $sql    = $dbh->prepare("SELECT id from user where email = ? and password = ?");
        $sql->bindParam(1, $uname, PDO::PARAM_STR);
        $sql->bindParam(2, $pword1, PDO::PARAM_STR);
        $sql->execute();
        $row = $sql->fetch();
        $id  = $row[0];

        if (is_numeric($id)) {
            $_SESSION['auth'] = 'yes';
            $_SESSION['id']   = $id;
            header("Location: admin.php");
        } else {
            echo 'Wrong username and password try again<br>';
            print_r($sql);
            echo $uname . ' ' . $pword1;
        }
    }
}

function adminPagination ($dbh, $start, $recordsPerPage, $url) {
    $countSql = $dbh->prepare("Select COUNT(id) from posts");
    $countSql->execute();
    $row        = $countSql->fetch();
    $numRecords = $row[0];
    
    $numlinks = ceil($numRecords / $recordsPerPage);
    $start    = $start * 5;

    $sql = $dbh->prepare("SELECT id, subject, content from posts LIMIT ?, ?");
    $sql->bindParam(1, $start, PDO::PARAM_INT);
    $sql->bindParam(2, $recordsPerPage, PDO::PARAM_INT);
    $sql->execute();
    while ($row = $sql->fetch()) {
        $id      = $row[0];
        $subject = $row[1];
        $content = $row[2];
        
        echo '
            <div class="row">
                <div class="col">
                    <h2>' . $subject . '</h2>
                    <p>' . $content . '</p>
                <div class="col">
                    <a href="deletePost.php?deleteid=' . $id . '" onclick="">Delete</a>
                    <a href="updatePost.php?upid=' . $id . '">Update</a>
                </div>
                </div>
            </div>
            ';
    }
    for ($i = 0; $i < $numlinks; $i++) {
        $y = 0;
        $y = $i + 1;
        if ($i > 0) {
            echo '
            <div class="row">
                <div class="col-md-12">
                    <a href="previewPost.php?start=' . $i . '">' . $y . ' ,</a>
                </div>
            </div>
            ';
        } else {
            echo '
            <div class="row">
                <div class="col-md-12">
                    <a href="previewPost.php?start=' . $i . '">' . $y . '</a>
                </div>
            </div>
            ';
        }
    }
}

function PostPagination ($dbh, $start, $recordsPerPage, $url) {
    $countSql = $dbh->prepare("Select COUNT(id) from posts");
    $countSql->execute();
    $row        = $countSql->fetch();
    $numRecords = $row[0];
    
    $numlinks = ceil($numRecords / $recordsPerPage);
    $start    = $start * 5;

    $sql = $dbh->prepare("SELECT id, subject, content from posts LIMIT ?, ?");
    $sql->bindParam(1, $start, PDO::PARAM_INT);
    $sql->bindParam(2, $recordsPerPage, PDO::PARAM_INT);
    $sql->execute();
    while ($row = $sql->fetch()) {
        $id      = $row[0];
        $subject = $row[1];
        $content = $row[2];
        
        echo '
            <div class="row my-4">
                <div class="col-md-12">
                    <h2>' . $subject . '</h2>
                    <p>' . $content . '</p>
                </div>
            </div>
            ';
    }
    for ($i = 0; $i < $numlinks; $i++) {
        $y = 0;
        $y = $i + 1;
        if ($i > 0) {
            echo '
            <div class="row my-2">
                <div class="col-md-12">
                    <a href="#' . $i . '">' . $y . ' ,</a>
                </div>
            </div>
            ';
        } else {
            echo '
            <div class="row my-2">
                <div class="col-md-12">
                    <a href="#' . $i . '">' . $y . '</a>
                </div>
            </div>
            ';
        }
    }
}

function Delete ($dbh, $server, $deleteid){
    if (isset($deleteid) && $_SERVER['PHP_SELF'] == $server) {
        $delsql = $dbh->prepare("delete from posts where id = '$deleteid'");
        $delsql->execute();
        echo "Record deleted!<br>";
    }
}

function update ($dbh, $updateid, $content, $subject) {
    if (isset($updateid) && $_SERVER['PHP_SELF'] == '/School/blog/admin.php') {
        $upsql = $dbh->prepare("UPDATE posts SET subject= ?, content= ? WHERE id =?");
        $upsql->bindParam(1, $subject, PDO::PARAM_STR);
        $upsql->bindParam(2, $content, PDO::PARAM_STR);
        $upsql->bindParam(3, $updateid, PDO::PARAM_INT);
        $upsql->execute();
        echo "Record Updated!<br>";
    }
}

function show ($dbh, $updateid) {
        $upsql = $dbh->prepare("SELECT * FROM posts WHERE id = 1");
        $upsql->execute();
       $row = $upsql->fetch());
            echo $row;
}










?>