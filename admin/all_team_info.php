<?php require_once('functions.php');?>

<?php
    $object = new AdminConstruct();
    $teaminfoshow = $object->Team_Title_Info_Show();
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
                    <li>All Teams Information</li>
                </ul>
            </div>
            <!-- End breadcum -->
           

                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="title-text text-center">All Teams Informations</h3>
                        <div class="table-responsive">
                            <table class="table f-border-none">
                                <thead>
                                    <tr>
                                        <th>SI No</th>
                                        <th>Teams Title</th>
                                        <th>Teams Designation</th>
                                        <th>Teams Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php while ($result=mysqli_fetch_assoc($teaminfoshow)) {
                                  ?>
                                    <tr>
                                        <td><?php echo $result['id'];?></td>
                                        <td><?php echo $result['the_title'];?></td>
                                        <td><?php echo $result['the_degnation'];?></td>
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