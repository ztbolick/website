<?php
    include('./partials/_head.php');
    include('./partials/_nav.php');
?>
<div class="row">
    <?php
    include('./partials/_sidebar.php');
    ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome to Your Admin Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <p>This section is designed to allow easy access to important club features. Each and every one of you make the club work and play an important role.</p>
    </div>
</main>
</div>
</body>
<style type="text/css">
.sidebar .nav-link {
font-weight: 500;
color: #333;
}
.sidebar .nav-link.active {
color: #007bff;
}
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
z-index: 100;
padding: 70px 0 0;
box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}
.navbar-top {
z-index: 1030;
}
.form-signin {
width: 100%;
max-width: 330px;
padding: 15px;
margin: auto;
}
input {
display: block;
padding-left: 7px;
}
</style>
</html>