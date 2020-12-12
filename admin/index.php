<?php 
session_start();
 if(!isset($_SESSION['admin'])){
    header("location:../adminsignin.php");
 }
// if(!isset($_SESSION['last_id'])){
//     header("location:../Home.php");
// }
include('includes/header.php'); ?>
<?php include('../config/dbconnection.php'); ?>




<body id="page-top">

    <?php include('includes/navbar.php'); ?>

    <div id="wrapper">
  
        <!-- Sidebar -->
     
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
              
               <?php include('includes/Categories1.php'); ?>

               
             
              
                </div>


     <br><br>

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
