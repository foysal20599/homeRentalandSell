<?php 
session_start();
 if(!isset($_SESSION['admin'])){
    header("location:../adminsignin.php");
 }
include('includes/header.php'); ?>
<?php include('../config/dbconnection.php'); ?>


<meta http-equiv="refresh" content="30">

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
                    <li class="breadcrumb-item active">Chat Details</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-md-12">
                             <center>
                                 <h1 class="page-header"> User Chat Details</h1>
                    
                             </center>
                             <hr>
                    
                             <br>
                             <br>
                             <div class="row">
                                 <div class="col-md-12">
                                     <table class="table table-bordered">
                                         <thead>
                                             <th>
                                                 <center>From User</center>
                                             </th>
                                             <th>
                                                 <center>Message</center>
                                             </th>
                                              <th>
                                                 <center>Replay</center>
                                             </th>
                                         </thead>
                                         <tbody>
                                         <?php
                                         $USER_NO = $_GET['id'];
                                         $sql = "SELECT USER_NAME,CHAT_MGS,SEND_TIME FROM `chats` LEFT JOIN users ON users.USER_NO = chats.`FROM_USER_NO` WHERE `FROM_USER_NO` = $USER_NO OR `TO_USER_NO` = $USER_NO";
                                         $query = mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_array($query)):
                                             $mgs = "";
                                             $replay = "";
                                             $user = "Admin";
                                             if(!empty($row['USER_NAME'])){
                                                 $mgs = $row['CHAT_MGS']."<sub> ".$row['SEND_TIME']."</sub>";
                                                 $user = $row['USER_NAME'];
                                             }else{
                                                 $replay = $row['CHAT_MGS']."<sub> ".$row['SEND_TIME']."</sub>";
                                             }
                                         ?>
                                         <tr>
                                             <td><?=$user?></td>
                                             <td><?=$mgs?></td>
                                             <td><?=$replay?></td>
                                         </tr>
                                         <?php
                                         endwhile;
                                         ?>
                                         </tbody>
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
    <script>
        $(document).ready(function(){
            $(".send_message").on('keypress',function(e) {
                if(e.which == 13) {
                    var CHAT_MGS = $(this).val().trim();
                    var USER_NO = $(this).attr('USER_NO');
                    if(CHAT_MGS.length > 0){
                        $.post("ajax_chat_send.php",{CHAT_MGS:CHAT_MGS,USER_NO:USER_NO},function(data){
                            location.reload();
            			});
                    }
                }
            });
        });
    </script>
