<?php

 include("../includes/headerview.php") ?>


<body>

<div class="warpper">
	<?php include("../includes/landlordmenu.php") ?>
	<!-- ------#End Menu-area----- -->




	<div class="container-fluid">
		<div class="card">
			

		
		<center>
			<h3><b>Update Current & New Password</b> </h3>
		</center><br>
		<hr>
		<div class="row">




			<div class="col-lg-6">

				<div class="card">

					<form action="">

						<div class="form-group">
							<input class="form-control" id="CurrentPassword" type="number" name="CurrentPassword" placeholder="Current Password">
						</div>
						<div class="form-group">
							<input class="form-control" id="Password" type="password" name="Password" placeholder="Password">
						</div>


						<div class="form-group">
							<input class="form-control" id="ConfirmPassword" type="" name="CurrentPassword" placeholder="Confirm Password">
						</div>
						<div class="Button">
							<center><button type="button" class="btn btn-primary">Change Password</button></center>
						</div>
						<!--Check Box-->


						
					</form>
				</div>
			</div>

			<div class="col-sm-6">

				<img class="img-fluid width:100" src="image/b3.png">
			</div>
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
			padding: 50px;
		}
	</style>
	<?php include("../includes/footerview.php") ?>