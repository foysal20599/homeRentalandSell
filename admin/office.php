<?php include('includes/header.php'); 
    
   ?>


<body id="page-top">

    <?php include('includes/navbar.php'); ?>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="post.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Post's</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Update password</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Update Profile</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table's</span></a>
            </li>
        </ul>

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



                    <div class="col-md-10 offset-md-1">
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
                                    <center>NUMBER'S OF ROOM</center>
                                </th>
                                <th>
                                    <center>USER ID</center>
                                </th>
                                <th>
                                    <center>ADS ID</center>
                                </th>

                                <th>
                                    <center>SUBMIT DATE</center>
                                </th>
                                <th>
                                    <center>ACTIION'S</center>
                                </th>




                            </thead>
                            <tr>

                                <td>
                                    <center>1</center>
                                </td>
                               <td>
                                    <center>OFFICE</center>
                                </td>
                               <td>
                                    <center>3</center>
                                </td>
                               <td>
                                    <center>10</center>
                                </td>
                                <td>
                                    <center>2</center>
                                </td>
                                <td>
                                    <center>19-07-19</center>
                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-info btn-sm" href="">view </a>
                                            <a class="btn btn-info btn-sm" href="">active </a>
                                        <a class="btn btn-danger btn-sm" href="">delete</a>
                                    </center>

                                </td>
                        </table>

          <?php include('includes/pagination.php'); ?>

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