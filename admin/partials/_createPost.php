<?php
echo 
'
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create A Post</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <form action="" method="post">
            <input type="hidden" name = "userid" value = "
';?>
<?php echo $id;?>
<?php echo '
            ">
            <div class="form-group">
                <label for="formGroupExampleInput">Post Title</label>
                <input type="text" name ="subject" placeholder"Awesome Post Title" value = "
';?>
<?php echo $subject;?>
<?php echo 
'
                " placeholder="My Amazing Title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Post Body</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="This message will appear in your post body"></textarea>
            </div>
            <input type="submit" name="submit" value="post">
        </form>
    </div>
</main>
';

?>