<?php
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 5/12/19
[  Info   ] ;- Handle login form operations
*/
?>

<?php require_once( 'header.php');?>


<div class="row">
    <div class="col-sm-6 col-md-8 mx-auto mt-5">
        <div class="card">
            <div class="card-body">
                <form method="get" action="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <label for="emaail">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <input type="submit" value="Login" name="login" class="btn btn-secondary btn-block">
                </form>
            </div>
        </div>
    </div>
</div>




<?php require_once ('footer.php');?>