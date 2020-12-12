<?php include('includes/header.php'); ?>
<?php
include('../config/dbconnection.php'); 

$sql = "select * from contract";

$run = mysqli_query($con,$sql);
?>

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

     <div class="col-md-12">
         <center>
             <h1 class="page-header" style="color:#db465a;"> Contact Form List</h1>

         </center>
         <hr>

         <br>
         <br>
         <div class="row">
             <div class="col-md-12">
                 <table class="table table-bordered">
                     <thead style="background: #20a31d; color: white;">
                         <th>
                             <center>CON NO</center>
                         </th>
                         <th>
                             <center>NAME</center>
                         </th>
                         <th>
                             <center>EMAIL</center>
                         </th>
                          <th>
                             <center>SUBJECT</center>
                         </th>
                          <th>
                             <center>MASSAGE</center>
                         </th>
                         <th>
                             <center>ACTION</center>
                         </th>

                     </thead>                  
                          <?php

                     foreach ($run as $key) {?>
                         <tr>

                         <td>
                             <center><?php echo $key['con_id']?></center>
                         </td>
                         <td>
                             <center><?php echo $key['con_name']?></center>
                         </td>
                         <td>
                             <center><?php echo $key['email']?></center>
                                </td>
                                 <td>
                                    <center><?php echo $key['subject']?></center>
                                </td>
                               <td>
                                    <center><?php echo $key['massage']?></center>
                                </td> 

                                 <td>
                             <center>
                                 <a class="btn btn-danger btn-sm" href="delete_contact_msg.php?id=<?php echo $key['con_id'];?>">delete</a>                               
                           
                             </center>
                         </td>                                               

                     </tr>
                      <?php
                     }
                     ?>
                 </table>
             </div>
         </div>
     </div>

               
             
              
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
