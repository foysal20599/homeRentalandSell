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
                    <li class="breadcrumb-item active">Chat</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                <?php

                    $sql = "SELECT `USER_NO`,`USER_NAME`, `USER_EMAIL`, `USER_PHONE` FROM `users` WHERE `USER_NO` IN (SELECT DISTINCT `FROM_USER_NO` FROM `chats` WHERE `FROM_USER_NO` != -1)";
                    $i = 1;
                    $run = mysqli_query($con,$sql);
                    ?>
                    
                    
                    
                         <div class="col-md-12">
                             <center>
                                 <h1 class="page-header"> User Chat List</h1>
                    
                             </center>
                             <hr>
                    
                             <br>
                             <br>
                             <div class="row">
                                 <div class="col-md-12">
                                     <table class="table table-bordered">
                                         <thead>
                                             <th>
                                                 <center>Sl</center>
                                             </th>
                                             <th>
                                                 <center>Name</center>
                                             </th>
                                             <th>
                                                 <center>Email</center>
                                             </th>
                                              <th>
                                                 <center>Phone</center>
                                             </th>
                                              <th>
                                                 <center>Last Message</center>
                                             </th>
                                             <th>
                                                 <center>Replay</center>
                                             </th>
                                             <th>
                                                 <center>History</center>
                                             </th>
                    
                    
                                         </thead>
                                         <?php
                                         foreach ($run as $key) {?>
                                             <tr>
                    
                                             <td>
                                                 <center><?php echo $i++;?></center>
                                             </td>
                                             <td>
                                                 <center><?php echo $key['USER_NAME']?></center>
                                             </td>
                                             <td>
                                                 <center><?php echo $key['USER_EMAIL']?></center>
                                             </td>
                                             <td>
                                                 <center><?php echo $key['USER_PHONE']?></center>
                                            </td>
                                                <?php
                                                    $sql_chat = "SELECT * FROM `chats` WHERE `FROM_USER_NO` = ".$key['USER_NO']." AND `IS_READ` = 0";
                                                    $query_chat = mysqli_query($con,$sql_chat);
                                                    $last_mgs = "";
                                                    while($row_chat = mysqli_fetch_array($query_chat)):
                                                        $last_mgs .= $row_chat['CHAT_MGS']."<sub> ".$row_chat['SEND_TIME']."</sub></br>";
                                                    endwhile;
                                                ?>
                                             <td>
                                                 <?php echo $last_mgs;?>
                                            </td>
                                            <td>
                                                <textarea class="form-control send_message" placeholder="type message & press enter" USER_NO='<?=$key['USER_NO']?>'></textarea>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" target="_blank" href="chat_details.php?id=<?=$key['USER_NO']?>">Chat History</a>
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
