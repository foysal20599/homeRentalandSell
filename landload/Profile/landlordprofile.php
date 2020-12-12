<?php 


include("../includes/headerview.php") ?>
<body>
  
       <div class="warpper">
              <?php include("../includes/landlordmenu.php") ?>
        <!-- ------#End Menu-area----- -->
        

                
				
                  <div class="container-fluid">
                  	<div class="card">
                  		
                  		
								   
								    <div class="row">
									
									<div class="col-md-4">
									 <img class="img-fluid"   src="image/c10.jpg">
									</div>
									<div class="col-md-4">
									<center><h4>Update Your Profile </h4></center><br>
									 <div class="card">
									  
									<form action="">
                               
								<div class="form-group">
                                    <input class="form-control" id="FirstName" type="FirstName" name="FirstName" placeholder="First Name">
                                </div>
								<div class="form-group">
                                    <input class="form-control" id="LastName" type="" name="LastName" placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" id="MobileNumber" type="number" name="MobileNumber" placeholder="Mobile Number">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="EmailAddress" type="text" name="EmailAddress" placeholder="Email Address">
                                </div>
								 <div class="Button">
								 <center><button type="button" class="btn btn-primary">Update Profile</button></center>
                                 </div>
                              
									 </form></div>
									 </div>
									
									<div class="col-md-4">
									<img class="img-fluid h-100" margin: 0 auto;  src="image/by1.png">
									</div>				   
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
		padding: 10px;
	}
</style>
