<?php require_once('functions.php');?>
<?php 
    $obj = new AdminConstruct();
    if (isset($_POST['aboutbtn'])) {
        $datareturn = $obj->AboutDataInsert($_POST);
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
                    <h5 class="title-text">Add Your About information</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST">
                                <div class="form-group">
                                    <label>About Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="about_title">
                                </div>

                                <div class="form-group">
                                    <label>About Sub Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="about_sub_title">
                                </div>

                                <div class="form-group">
                                    <label>About Sub Description</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="about_sub_desc">
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
                        <h3 class="title-text">Responsive Table</h3>
                        <div class="table-responsive">
                            <table class="table f-border-none">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


        </div>
    </main>



<?php require_once('inc/footer.php');?>