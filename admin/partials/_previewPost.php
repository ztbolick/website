<?php 
$start= 0;
$recordsPerPage = 5;
$url = $_SERVER['PHP_SELF'];
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Posts</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <?php	adminPagination($dbh,$start,$recordsPerPage,$url); ?>
    </div>
</main>
