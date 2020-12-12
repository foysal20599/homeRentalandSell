<?php include("../includes/headerview.php") ?>

<?php
	if(isset($_GET['id']) && $_GET['id'] != ""){
		$AD_NO = $_GET['id'];
	    $sql = "SELECT advertisements.`AD_TITLE`,advertisements.`DATE`,advertisements.`AD_NO`, advertisements.`AD_CATEGORY`,advertisements.`DINING`, advertisements.`BEDS`, advertisements.`RENT_AMOUNT`,advertisements.`RENT_NEGOTIABLE`, advertisements.`ADVANCE_AMOUNT`,advertisements.`ADDRESS`, advertisements.`DIVITION`
	    ,advertisements.`DISTRICT`,advertisements.`AREA`,advertisements.`OTHER_NOTE`,advertisements.`KITCHEN`,advertisements.`BATHS`,advertisements.`BALCONY`,advertisements.`GAS_CONNECTION`,advertisements.`FLOOR`,advertisements.`SIZE`,advertisements.`GARAGE`,advertisements.`EMERGENCY_ENG`,advertisements.`LIFT_SERVICE`,advertisements.`PHONE`,advertisements.`EMAIL`,advertisement_images.`AD_IMAGE_MIN`,advertisement_images.`AD_IMAGE_MAX`,advertisement_images.`AD_IMAGE_AVG` FROM `advertisements`LEFT JOIN advertisement_images ON advertisements.`AD_NO`=advertisement_images.`AD_NO` WHERE advertisements.`ACTIVE` = 1 and advertisements.`AD_NO`='".$AD_NO."'";
	    //echo $sql;
	     $query = mysqli_query($con, $sql);
	    $result = mysqli_fetch_array($query);
	}else{
		echo "<meta http-equiv='Refresh' content='0; url=../Home.php'>";
	}				
?>

<body>

	<div class="warpper1">

		<div class="col-md-10 offset-md-1">
			<div class="card card1">
				<a href="../Home.php"><i class="fas fa-window-close" style="color:white; background: blue;padding: 5px;">Back to home</i></a>

				
				<h3 class="text-info">
					<center>Category <?=$result['AD_CATEGORY']?> Details</center>
				</h3>
				<hr>

				<div class="row">
					<div class="col-md-7">
						<div class="card">
							<h4 class="capitan"> 
								<?=$result['AD_TITLE']?>
							</h4>
							
							<div class="my-sliderviewdetail">
								<div id="custom-slider-id" class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#custom-slider-id" data-slide-to="0" class="active"></li>
										<li data-target="#custom-slider-id" data-slide-to="1"></li>
										<li data-target="#custom-slider-id" data-slide-to="2"></li>
										<li data-target="#custom-slider-id" data-slide-to="3"></li>
									</ol>

									<!-- Main content part -->
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="../landload/image/uploads/<?=$result['AD_IMAGE_MIN']?>" class="d-block w-100" alt="...">

										</div>
										<div class="carousel-item">
											<img src="../landload/image/uploads/<?=$result['AD_IMAGE_MAX']?>" class="d-block w-100" alt="...">

										</div>

										<div class="carousel-item">
											<img src="../landload/image/uploads/<?=$result['AD_IMAGE_AVG']?>" class="d-block w-100" alt="...">


										</div>

										<div class="carousel-item">
											<img src="../landload/image/uploads/<?=$result['AD_IMAGE_AVG']?>" class="d-block w-100" alt="...">

										</div>
								

									</div>

									<!-- Next/Prev icon -->
									<a class="carousel-control-prev" href="#custom-slider-id" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
										<span class="custom-hover"></span>
									</a>

									<a class="carousel-control-next" href="#custom-slider-id" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
										<span class="custom-hover"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="card card1">
							<center>
								<h3> CATEGORY AD ID: <?=$result['AD_NO']?> </h3>
							</center>
							<div class="row">
								<div class="col-md-12">
									<table class="table table-hover">

										<tbody>
											<tr>

												<td>Category </td>
												<td><?=$result['AD_CATEGORY']?></td>

											</tr>

											<tr>

												<td>Available Date</td>
												<td><?=$result['DATE']?></td>


											</tr>
											<tr>

												<td>Property Rent</td>
												<td><?=$result['RENT_AMOUNT']?></td>

											</tr>

											<tr>

												<td> Advance Amount</td>
												<td><?=$result['ADVANCE_AMOUNT']?></td>

											</tr>
											<tr>

												<td>Rent Nagotiable</td>
												<td><?=$result['RENT_NEGOTIABLE']?></td>

											</tr>
											<tr>

												<td>Address</td>
												<td><?=$result['ADDRESS']?> </td>

											</tr>

											<tr>

												<td>Division/City</td>
												<td><?=$result['DIVITION']?></td>

											</tr>
											<tr>

												<td>District</td>
												<td><?=$result['DISTRICT']?></td>

											</tr>
											<tr>

												<td>Area</td>
												<td><?=$result['AREA']?></td>

											</tr>

										</tbody>
									</table>
								</div>
							</div>

						</div>
						<div class="card card1">
							<div class="others-facility">
								<h3>
									<center>Others-facilities</center>
								</h3>
								<hr>
								<p>
									<?=$result['OTHER_NOTE']?>
								</p>
							</div>

						</div>

					</div>
					<div class="col-md-5">
						<div class="card card1">
							<h4>

								<center>Additional Information</center>
							</h4>
							<hr>
							<table class="table table-hover">

								<tbody>

									<tr>

										<td>Bedroom</td>
										<td><?=$result['BEDS']?></td>


									</tr>
									<tr>

										<td>Dining</td>
										<td><?=$result['DINING']?></td>

									</tr>
									<tr>

										<td>Kitchen</td>
										<td><?=$result['KITCHEN']?></td>

									</tr>
									<tr>

										<td>Bathroom</td>
										<td><?=$result['BATHS']?></td>

									</tr>
									<tr>

										<td>Balcony</td>
										<td><?=$result['BALCONY']?></td>

									</tr>
									<tr>

										<td>Gas Conneetion</td>
										<td><?=$result['GAS_CONNECTION']?></td>

									</tr>
									<tr>

										<td>Floor No</td>
										<td><?=$result['FLOOR']?></td>

									</tr>
									<tr>

										<td>Size (Square Feet)</td>
										<td><?=$result['SIZE']?></td>

									</tr>
									<tr>

										<td>Garage</td>
										<td><?=$result['GARAGE']?></td>

									</tr>
								
									<tr>

										<td>Emergency Energy</td>
										<td><?=$result['EMERGENCY_ENG']?></td>

									</tr>
									<tr>

										<td> Lift</td>
										<td><?=$result['LIFT_SERVICE']?></td>

									</tr>
								

								</tbody>
							</table>
						</div>

						<div class="card card1 lanloadinformation">
							<h4>
								<center>Lanloard Contract Information </center>
							</h4>
							<hr>

							

							<h5>
								<center>Phone Number :</center>
							</h5>
							<p>
								<center><?=$result['PHONE']?></center>
							</p>

							<h5>
								<center>E-mail Address:</center>
							</h5>
							<p>
								<center><?=$result['EMAIL']?></center>
							</p>

						</div>
						<div class="card card1 teamsupport">
							<h1>
								<center>Helpline:</center>
							</h1>
							<hr>
							<center>
								<p>BARIVARACHI.COM</p>
							</center>
							<center>
								<p>01776920599</p>
							</center>
							<center>
								<p>foysal20599@gmail.com</p>
							</center>



						</div>
					</div>
					
                 <hr>





						<div class="col-md-10 offset-md-1">
						<h4 style="color: #77c7e3;"> <center>If u want to rent this house.please communicate in this address</center> </h4>	
										
						  <br/>
						  <div class="container">

						   <form method="POST" id="comment_form">
						    <div class="form-group">
						     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
						    </div>

						    <div class="form-group">
						     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="3"></textarea>
						    </div>
						    <div class="form-group">
						     <input type="hidden" name="comment_id" id="comment_id" value="0" />	
						     <input type="hidden" id="<?=$_GET['id']?>" name="hidden_id" value="<?=$AD_NO?> " class="adcmnt">		 
						  
						     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
						    </div>
						   </form>
						   <span id="comment_message"></span>
						   <br />
						   
						   <div id="display_comment"></div>
						  </div>
						  </div>
							
						</div>
					</div>

				</div>

			</div>
			<!-----------------    copy-scoll  ----------->
			<?php include("../includes/copy_scroll.php") ?>


			<!-- ----- #End Top to buttom home ----- -->

		</div>

	</div>

	<?php include("../includes/footer.php") ?>
	


<style>
	.capitan{
		text-transform: uppercase;

	}
	.arrow_box {
	position: relative;
	background: #fff;
	border: 1px solid #ded5d8;
		-webkit-appearance: button;
}
.arrow_box:after, .arrow_box:before {
	right: 100%;
	
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.arrow_box:after {
	border-color: rgba(255, 255, 255, 0);
	border-right-color: #fff;
	border-width: 30px;
	margin-top: -30px;
}
.arrow_box:before {
	border-color: rgba(222, 213, 216, 0);
	border-right-color: #ded5d8;
	border-width: 31px;
	margin-top: -31px;
}
</style>

 
<script>
$(document).ready(function(){
var adno=$('.adcmnt').attr('id');

 
 $('#comment_form').on('submit', function(event){
 	
  event.preventDefault();

  var form_data = $(this).serialize();
  $.ajax({

   url:"../ajax/add_comments.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"../ajax/fetch_comments.php",
   method:"POST",
   data:({"adno":adno}),
   dataType:"html",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }
 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
});
</script>
 