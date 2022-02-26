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
                    <h5 class="title-text text-center">Add Your About information</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>About Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="about_title">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>About Description</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="about_desc" width="50%" height="50%">
                                </div> 
                                <br>
                                <div class="form-group">
                                    <label>About Image</label>
                                    <input type="file" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="about_img">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Learn More</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="read_more">
                                </div> 

                                  <br>
                                <button class="btn btn-primary" type="submit" name="aboutbtn">Add New About</button>
                            </form>

                        </div>
                    </div>
                </section> 

                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="title-text text-center">Responsive Table</h3>
                        <div class="table-responsive">
                            <table class="table f-border-none">
                                <thead>
                                    <tr>
                                        <th>SI No</th>
                                        <th>About Title</th>
                                        <th>About Description</th>
                                        <th>About Image</th>
                                        <th>Read More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <tr>
                                        <td>Service Title</td>
                                    </tr>
                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


        </div>
    </main>



<?php require_once('inc/footer.php');?>