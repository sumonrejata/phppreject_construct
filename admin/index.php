<?php require_once('inc/header.php');?>
<?php require_once('functions.php');?>
<?php 
    $obj = new AdminConstruct();
    if (isset($_POST['admin_login'])) {
        $obj->Admin_Login($_POST);
    }
 ?>



<section class="login-content">
        <div class="login-box">
            <form class="login-form" action="" method="POST">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Log In</h3>
                <div class="mb-3">
                    <label class="control-label" for="username">USERNAME</label>
                    <input class="form-control" name="username" type="text" placeholder="User Name" autofocus>
                </div>
                <div class="mb-3">
                    <label class="control-label" for="password">PASSWORD</label>
                    <input class="form-control" name="password" type="password" placeholder="Password">
                </div>
             
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block w-100" name="admin_login"><i class="fa fa-sign-in fa-lg fa-fw"></i>Log In</button>
                </div>
            </form>
          
        </div>
    </section>
    <?php require_once('inc/footer.php'); ?>