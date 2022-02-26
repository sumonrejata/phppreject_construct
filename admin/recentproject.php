<?php require_once('functions.php');?>
<?php require_once('inc/header.php');?>
<?php require_once('inc/header_topbar.php');?>
<?php require_once('inc/left_sidebar.php');?>

<?php
    $object = new AdminConstruct();
    if (isset($_POST['recent_btn'])) {
        $reselt = $object->RecentProjectInsert($_POST);
    }

    $reseltshow = $object->RecentProjectShow();
 ?>
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
                    <h5 class="title-text">Add Recent Project information</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Recent Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="recent_title">
                                </div>

                                <div class="form-group">
                                    <label>Recent Image</label>
                                    <input type="file" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="recent_img">
                                </div>

                                <div class="form-group">
                                    <label>Recent Date</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpInline" name="recent_date">
                                </div> 
                                
                                  <br>
                                <button class="btn btn-primary" type="submit" name="recent_btn">Add New Recent</button>
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
                                        <th>SI No</th>
                                        <th>Recent Title</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($rusult=mysqli_fetch_assoc($reseltshow)) { ?>
                                    <tr>
                                        <td><?php echo $rusult['id'];?></td>
                                        <td><?php echo $rusult['the_title'];?></td>
                                        <td><img src="uploadimage/<?php echo $rusult['the_img'];?>" width="100" height="100"></td>
                                        <td><?php echo $rusult['the_date'];?></td>
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