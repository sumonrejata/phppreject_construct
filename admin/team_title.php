<?php require_once('functions.php');?>

<?php
    $object = new AdminConstruct();
    if (isset($_POST['teamtbtn'])) {
        $object->Team_Title_Insert($_POST);
    }
    $temashow = $object->Team_Title_Show();
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
                    <li>Team Title</li>
                </ul>
            </div>
            <!-- End breadcum -->
           
            
            <section class="ap-sec-wrapper title">
                    <h5 class="title-text text-center">Team Title info</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="mb-30" action="" method="POST">
                                <div class="form-group">
                                    <label>About Title</label>
                                    <input type="text" class="form-control"
                                    aria-describedby="passwordHelpBlock" name="team_title">
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit" name="teamtbtn">Add New</button>
                            </form>

                        </div>
                    </div>
                </section> 

                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="title-text text-center">Team Title Information</h3>
                        <div class="table-responsive">
                            <table class="table f-border-none">
                                <thead>
                                    <tr>
                                        <th>SI No</th>
                                        <th>Team Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php while ($result=mysqli_fetch_assoc($temashow)) {
                                  ?>
                                    <tr>
                                        <td><?php echo $result['id'];?></td>
                                        <td><?php echo $result['the_title'];?></td>
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