<?php require_once('functions.php');?>

<?php 
    $object = new AdminConstruct();
    if (isset($_POST['com_btn'])) {
        $object->CompletedCasesInsert($_POST);
    }
    $completeshow = $object->CompletedCasesShow();
    
?>



<?php require_once('inc/header.php');?>
<?php require_once('inc/header_topbar.php');?>
<?php require_once('inc/left_sidebar.php');?>


<main class="adminpopular-wrapper">
        <div class="container-fluid">
            <!-- breadcum -->
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li>
                        <a href="home.php"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>Completed Cases</li>
                </ul>
            </div>
            <!-- End breadcum -->
           
            
            <section class="ap-sec-wrapper title">
                    <h5 class="title-text text-center">Add Your Completed Cases information</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST">
                                <div class="form-group">
                                    <label>Completed Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="com_title">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Completed Description</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="com_desc" width="50%" height="50%">
                                </div> 
                                <br>
                                <div class="form-group">
                                    <label>See More</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="see_more">
                                </div> 

                                  <br>
                                <button class="btn btn-primary" type="submit" name="com_btn">Add New</button>
                            </form>

                        </div>
                    </div>
                </section> 

        </div>
    </main>



<?php require_once('inc/footer.php');?>