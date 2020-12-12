<?php include('includes/header.php'); ?>

<?php
include("../config/dbconnection.php");

$sql = "select * from advertisements";
$run = mysqli_query($con,$sql);



?>


<body id="page-top">

    <?php include('includes/navbar.php'); ?>

    <div id="wrapper">

      <?php include('includes/sidebar.php'); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                    <?php include('includes/dashboard.php'); ?>

                    <div class="col-md-12">
                        <h1 class="text-danger">
                            <center>Landload Post's List</center>
                        </h1>

                        <hr>
                        <a class="btn btn-primary btn-sm" href="index.php">Back</a>
                        <br>
                        <br>
                        <table class="table table-bordered">
                            <thead class="text-danger">
                                <th>
                                    <center>ID</center>
                                </th>
                                <th>
                                    <center>CATEGORY </center>
                                </th>
                                <th>
                                    <center>PHONE NUMBER</center>
                                </th>
                                <th>
                                    <center>EMAIL</center>
                                </th>
                                <th>
                                    <center>USER ID</center>
                                </th>
                                

                                <th>
                                    <center>SUBMIT DATE</center>
                                </th>
                                <th>
                                    <center>ACTIION</center>
                                </th>


                            </thead>
                            <?php foreach ($$run as $key) {?>
                                 <tr>

                                <td>
                                    <?php echo $key['AD_NO']?>
                                </td>
                               <td>
                                    <?php echo $key['AD_CATEGORY']?>
                                </td>
                               <td>
                                    <?php echo $key['PHONE']?>
                                </td>
                                 <td>
                                    <?php echo $key['EMAIL']?>
                                </td>
                               <td>
                                    <center><?php echo $key['USER_ID']?></center>
                                </td>
                               
                                <td>
                                    <?php echo $key['DATE']?>
                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-info btn-sm" href="">view </a>
                                       <a class="btn btn-info btn-sm" href="">active </a>
                                        <a class="btn btn-danger btn-sm" href="">delete</a>
                                    </center>

                                </td>
                            </tr>
                            
                            } ?>
                            
                        </table>



                    </div>
                </div>



            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('includes/footer.php'); ?>

    <?php include('includes/scoll.php'); ?>