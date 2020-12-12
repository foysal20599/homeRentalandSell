<?php
include("../includes/headerview.php") ?>

<?php
  if(isset($_POST['submit'])){
    move_uploaded_file($_FILES['file']['tmp_name'],"image/uploads/".$_FILES['file']['name']);
    $con = mysqli_connect("localhost","root","","hms");
    $q = mysqli_query($con,"UPDATE users SET AD_IMAGE_MIN = '".$_FILES['file']['name']."' WHERE USER_NO = '".$_SESSION['login']."'");
  }
?>
<body>

    
       
           <div class="warpper">
              <?php include("../includes/landlordmenu.php") ?>
        <!-- ------#End Menu-area----- -->
        

                
				
                  <div class="container-fluid">
                  	<div class="card">
                      <form action="../../ajax/landlordphoto_update.php" method="post" enctype="multipart/form-data">


                               <center><h2>Upload Your Photo </h2></center><br>
                               <hr>
							
						  <div class="row">
						  <div class="col-md-6">
                                
                                <img class="img-fluid" style="margin:0 auto;"   src="image/c20.jpg">
	
                            </div>
						  
                         <div class="col-sm-6">
                                
                                
                             <div class="picture-container">
									           <div class="col-md-4 offset-md-1">
                                        <div class="picture">
                                           <img class="img-fluid" margin: 0 auto;  src="image/c21.jpg">
								  
                                            <input type="file" name="file" id="wizard-picture">
											
                                        </div> 

									</div>            
							</div>   
							<button type="submit" name="submit" class="btn btn-warning btn1">Submit </button>                       							
							
	                 </div>
	                             
							</div>
              </form>
     
                  		
                  	</div>
                         </div>
                     </div>


 <?php include("../includes/copyright.php") ?>
<?php include("../includes/footer.php") ?>

<style>
	
.container-fluid{
	padding: 50px;

}
.card{
	padding: 50px;
}
.btn1{
	margin: 300px;
}

</style>
         






							