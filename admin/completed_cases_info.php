<?php require_once('functions.php');?>

<?php
    $object = new AdminConstruct();
    if (isset($_POST['com_info_tbtn'])) {
        $object->CompletedCasesInfo_Insert($_POST);
    }
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
                    <li>Dashboard</li>
                </ul>
            </div>
            <!-- End breadcum -->
           
            
           <section class="ap-sec-wrapper title">
                    <h5 class="title-text text-center">Add Your Complete Info</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>About Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="com_info_title">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>About Description</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="com_info_desc">
                                </div> 
                                <br>
                                <div class="form-group">
                                    <label>Complete Info Image</label>
                                    <input type="file" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="com_info_img">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Sub Tag</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="tag_ttile">
                                </div> 

                                  <br>
                                <button class="btn btn-primary" type="submit" name="com_info_tbtn">Add New</button>
                            </form>

                        </div>
                    </div>
                </section>  

             


        </div>
    </main>



<?php require_once('inc/footer.php');?>