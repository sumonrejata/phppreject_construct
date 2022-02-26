<?php require_once('functions.php');?>
<?php
    $object = new AdminConstruct();
    if (isset($_POST['servicebtn'])) {
        $object->Service_Post_Insert($_POST);
    }

    $service_show = $object->Service_Post_Show();
    
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
                    <li>Our Service</li>
                </ul>
            </div>
            <!-- End breadcum -->
           

                <section class="ap-sec-wrapper title">
                    <h5 class="title-text text-center">Add Your Service Post</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Service Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="service_title">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Service Description</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="service_desc">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Service Image</label>
                                    <input type="file" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="service_img">
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit" name="servicebtn">Add New</button>
                            </form>

                        </div>
                    </div>
                </section> 

                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="title-text text-center">All Service Information</h3>
                        <div class="table-responsive">
                            <table class="table f-border-none">
                                <thead>
                                    <tr>
                                        <th>SI No</th>
                                        <th>Service Title</th>
                                        <th>Service Dercription</th>
                                        <th>Service Image</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php while ($result=mysqli_fetch_assoc($service_show)) { ?>
                                    <tr>
                                        <td><?php echo $result['id'];?></td>
                                        <td><?php echo $result['the_title'];?></td>
                                        <td><?php echo $result['the_content'];?></td>
                                        <td><img src="uploadimage/<?php echo $result['thumbnail'];?>" width="100" height="100"></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


        </div>
    </main>



<?php require_once('inc/footer.php');?>