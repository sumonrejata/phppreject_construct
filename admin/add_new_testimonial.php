<?php require_once('functions.php');?>





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
                    <h5 class="title-text text-center">All Testimonials</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Employe Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="testi_title">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Employe Description</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="testi_desc" width="50%" height="50%">
                                </div> 
                                <br>
                                <div class="form-group">
                                    <label>Employe Name</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="emp_name" width="50%" height="50%">
                                </div> 
                                <br>
                                <div class="form-group">
                                    <label>Employe Designation</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="emp_desig" width="50%" height="50%">
                                </div> 
                                <br>
                                <div class="form-group">
                                    <label>Employe Image</label>
                                    <input type="file" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="testi_img">
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit" name="testibtn">Add New</button>
                            </form>

                        </div>
                    </div>
                </section> 



        </div>
    </main>



<?php require_once('inc/footer.php');?>