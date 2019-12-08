<?php
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 5/12/19
[  Info   ] ;- Handle login form operations
*/
?>
<!------------------------------------------------------------------------------------->
<?php require_once( 'header.php');?>


<?php
 ob_start();
session_start();

// Get form informations
if(isset($_POST['login'])){
    $username  =$_POST['username'];
    $password = $_POST['password'];

if(isset($username) && isset($password)){
    echo $username;
    echo$password;
} else {
    header('location:index.php');
    exit();
}
}

?>

<div class="row">
    <div class="col-sm-8 col-md-8 mx-auto mt-5">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <input type="submit" value="Login" name="login" class="btn btn-secondary btn-block">
                </form>
            </div>
        </div>
    </div>
</div>




<?php require_once ('footer.php');?>