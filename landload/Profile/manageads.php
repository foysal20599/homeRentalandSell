<?php 
include("../includes/headerview.php") ?>
<?php
   $sql = "select * from advertisements where USER_ID=".$_SESSION['login'];
   $run = mysqli_query($con,$sql);
?>

<body>

       <div class="warpper">
	<?php include("../includes/landlordmenu.php") ?>
	<!-- ------#End Menu-area----- -->

	<div class="container-fluid">
		<div class="card">
		<center>

			<h2> Your Ads Manage</h2><br>
              <br>
			<div class="spinner-grow text-muted"></div>
			<div class="spinner-grow text-primary"></div>
			<div class="spinner-grow text-success"></div>
			<div class="spinner-grow text-info"></div>
			<div class="spinner-grow text-warning"></div>
			<div class="spinner-grow text-danger"></div>
			<div class="spinner-grow text-secondary"></div>
			<div class="spinner-grow text-dark"></div>
			<div class="spinner-grow text-light"></div><br>
		</center>
		<br>
		<hr>

		<div class="row">

			<div class="col-md-2">

				<img class="img-fluid " src="image/c4.jpg">
			</div>
			<div class="col-md-10">
				<div class="form-group">
					<center>
						<h3>
							Your Product List
						</h3>
					</center>
					<table class="table table-striped">
						<thead>
							<tr style="background: green; color:white;">
								<th scope="col">ID</th>
								<th scope="col">Category</th>
								<th scope="col">Division</th>
								<th scope="col">District</th>
								<th scope="col">Area</th>
								<th scope="col">Featured</th>
								<th scope="col">User Id</th>
								<th scope="col"> <center>Action</center></th>
							</tr>
						</thead>
					<?php 
					foreach ($run as $key) {?>
							<tr>
								<th scope="row"><?php echo $key['AD_NO']?></th>
								<td><?php echo $key['AD_CATEGORY']?></td>
								<td><?php echo $key['DIVITION']?></td>
								<td><?php echo $key['DISTRICT']?></td>
								<td><?php echo $key['AREA']?></td>
								<td>
									<?php 
									$k = "Active";
									$T = "Inactive";
									if ($key['ACTIVE']==1) {?>
										<?php echo $k ?>  
									<?php
									}else{?>
										<?php echo $T ?> 
							    <?php
                                }
                                ?>
                            									
								<td><?php echo $key['USER_ID']?></td>
								<td>
									  <center>
                                        <a class="btn btn-info btn-sm" href="../viewdetail-family_landlord.php?id=<?php echo $key['AD_NO'];?>">view </a>
                                           
                                        <a class="btn btn-danger btn-sm" href="../includes/manageads_delete.php?id=<?php echo $key['AD_NO'];?>">delete</a>
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
	h3{
		margin: 50px;
	}

</style>








		