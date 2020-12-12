<?php

$sql = "select * from advertisements";

$run = mysqli_query($con,$sql);
?>



     <div class="col-md-12">
         <center>
             <h1 class="page-header" style="color:#db465a;"> CATEGORIES</h1>

         </center>
         <hr>

         <br>
         <br>
         <div class="row">
             <div class="col-md-12">
                 <table class="table table-bordered">
                     <thead style="background: #20a31d; color: white;">
                         <th>
                             <center>AD NO</center>
                         </th>
                         <th>
                             <center>CATEGORY</center>
                         </th>
                         <th>
                             <center>PHONE</center>
                         </th>
                          <th>
                             <center>EMAIL</center>
                         </th>
                          <th>
                             <center>USER ID</center>
                         </th>
                         <th>
                             <center>DATE</center>
                         </th>
                         <th>
                             <center>ACTIION</center>
                         </th>


                     </thead>
                     <?php
                     foreach ($run as $key) {?>
                         <tr>

                         <td>
                             <center><?php echo $key['AD_NO']?></center>
                         </td>
                         <td>
                             <center><?php echo $key['AD_CATEGORY']?></center>
                         </td>
                         <td>
                             <center><?php echo $key['PHONE']?></center>
                                </td>
                                 <td>
                                    <center><?php echo $key['EMAIL']?></center>
                                </td>
                               <td>
                                    <center><?php echo $key['USER_ID']?></center>
                                </td>
                               
                                <td>
                                    <center><?php echo $key['DATE']?></center>
                                </td>
                         <td>
                             <center>
                                 <a class="btn btn-info btn-sm" href="viewdetail-family_admin.php?id=<?php echo $key['AD_NO'];?>">view </a>

                                 <a class="btn btn-danger btn-sm" href="includes/delete.php?id=<?php echo $key['AD_NO'];?>">delete</a>
                                <?php 
                                if($key['ACTIVE']==1){?>
                                <a class="btn btn-info btn-sm" href="includes/active.php?active=<?php echo $key['AD_NO'];?>">Active</a>
                                
                           <?php
                                }else{?>
                                    <a class="btn btn-success btn-sm" href="includes/active.php?inactive=<?php echo $key['AD_NO'];?>">Inactive</a>
                                    <?php
                                }
                                ?>
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