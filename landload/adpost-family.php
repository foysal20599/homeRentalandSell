<?php 


include("includes/header.php") ?>
<?php

if(isset($_SESSION['login'])){
$userid = $_SESSION['login'];
$connect = mysqli_connect("localhost", "root", "", "hms");
$DIVISION = '';
$query = "SELECT DIVISION FROM country_state_city GROUP BY DIVISION ORDER BY DIVISION ASC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $DIVISION .= '<option value="'.$row["DIVISION"].'">'.$row["DIVISION"].'</option>';
}
}else{
	header("location:../Home.php");
}
?>

<body>

	<div class="warpper">

		<?php include("includes/menu.php") ?>

		<!-- ------#End Menu-area----- -->



		<div class="adpost-select">
			<div class="container">
				<div class="col-md-12">
					<div class="card shadow">
						<h2> Category Post Your Ads</h2>
						<hr>
						<form class="adpost_select" action="ajax/adpost_family_insert.php">
							<div class="form-group">

								<input type="text" class="form-control" id="titleId" mimlength="20"  maxlength="40" placeholder="Ad Title maximum 30 word *" required>
								<label for="titleId" id="titleErrMgs" class="col-form-label text-danger pull-right" style="display: none;">Please fill out this fill--!</label>
							</div>
							<div class="row">

								<div class="col-md-4">

									<div class="card">

										<div class="form-group">

											<input type="text" class="form-control" id="badroomId" max="1" placeholder="Bedroom* 3">
											<label for="badroomId" id="badroomErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control"  id="drawingId">
												<option value="0">Select Drawing*</option>
												<option >Yes</option>
												<option >No</option>
											</select>
											<label for="drawingId" id="drawingErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">

											<select class="form-control" id="bdthroomId">
												<option value="0">Select Bathroom*</option>
												<option >NO</option>
												<option >1</option>
												<option >2</option>
												<option >3</option>
												<option >4</option>
											</select>
											<label for="bdthroomId" id="bdthroomErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">

											<input type="number" class="form-control" id="floorId" max="2" placeholder="Floor*">
											<label for="floorId" id="floorErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control" id="diningId">
												<option value="0">Select Dining*</option>
												<option >NO</option>
												<option >1</option>
												<option >2</option>
											</select>
											<label for="diningId" id="diningErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control" id="kitchenId">
												<option value="0">Select Kitchen*</option>
												<option >NO</option>
												<option >1</option>
												<option >2</option>
												<option >3</option>
												<option >4</option>
											</select>
											<label for="kitchenId" id="kitchenErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control" id="balconyId">
												<option value="0">Select Balcony*</option>
												<option >NO</option>
												<option >1</option>
												<option >2</option>
												<option >3</option>
											</select>
											<label for="balconyId" id="balconyErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">

											<input type="number" class="form-control" id="squreFeetId" placeholder="Size (Square Feet)*">
											<label for="squreFeetId" id="squreFeetErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										

											<input type="hidden" class="form-control" id="userid" value="<?php echo $userid;?>">
											
										

									</div>
								</div>

								<div class="col-md-4">
									<div class="card position">

										<div class="form-group">
											<select class="form-control" id="liftServiceId">
												<option value="0">Lift Service*</option>
												<option >Yes</option>
												<option >No</option>
											</select>
											<label for="liftServiceId" id="liftServiceErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control" id="gasConnectionId">
												<option value="0">Gas Connection*</option>
												<option >Yes</option>
												<option >No</option>
											</select>
											<label for="gasConnectionId" id="gasConnectionErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control" id="garageId">
												<option value="0">Select Garage</option>
												<option >Yes</option>
												<option >No</option>
											</select>
											<label for="garageId" id="arageErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control" id="emargencyEnergyId">
												<option value="0">Emergency Energy*</option>
												<option >IPS</option>
												<option >Generator</option>
												<option >No </option>
											</select>
											<label for="emargencyEnergyId" id="emargencyEnergyErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">

											<input type="date" name="bday" class="form-control" id="dateId" placeholder="Available From (Enter date)*">
											<label for="dateId" id="dateErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<select class="form-control" id="rentNotiableId">
												<option value="0">Rent Negotiable*</option>
												<option >Yes</option>
												<option >No</option>
											</select>
											<label for="rentNotiableId" id="rentNotiableErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<input type="number" class="form-control" id="rentAmountId" placeholder="Rent Amount*">
											<label for="rentAmountId" id="rentAmountErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<input type="number" class="form-control" id="advanceAmountId" placeholder="Advanc Amount*">
											<label for="advanceAmountId" id="advanceAmountErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>

									</div>
								</div>

								<div class="col-md-4">
									<div class="card position">
									<div class="form-group">
									<select class="form-control"  name="" id="categoryId">
										<option value="0">Select Category</option>
										<option >Family</option>
										<option >Bachelor</option>
										<option >Men's hostel</option>
										<option >Woman's hostel</option>
										<option >Office</option>
										<option >Sub-let</option>
										<option >vehicle garage</option>
										<option >Property sell-flat</option>
										<option >Property sell-land</option>							</select>
									<label for="categoryId" id="categoryErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>	
									</div>

										<div class="form-group">										
										     <select name="DIVISION" id="DIVISION" class="form-control action">
												<option value="0">Select Division</option>
												<?php echo $DIVISION; ?>
									      </select>

											<label for="divisionId" id="divisionErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">

									     <select name="DISTRICT" id="DISTRICT" class="form-control action">
											<option value="0">Select District</option>
										</select>
											
											<label for="districtId" id="districtErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>	
									</div>
										

										<div class="form-group">										
										<select name="AREA" id="AREA" class="form-control">
										<option value="0">Select area</option>
									     </select>
											<label for="areaId" id="areaErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>

										<div class="form-group">
											<input type="address" class="form-control" id="addressId" placeholder="Details Address*">
											<label for="addressId" id="addressErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="emailId" pattern="[^ @]*@[^ @]*"  placeholder="Your Email*">
											<label for="emailId" id="emailErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<input type="number" class="form-control" id="phoneNumberId" placeholder="Your Phone Number*">
											<label for="phoneNumberId" id="phoneNumberErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>
										<div class="form-group">
											<textarea class="form-control" name="" id="otherFacilitireId" cols="30" rows="3.5" placeholder="Other Facilities"></textarea>
											<label for="otherFacilitireId" id="otherFacilitireErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
										</div>


									</div>
								</div>

							</div>

							<div class="button">
								<center>
									<button id="btnCancel" type="button" class="btn btn-danger">Cancel</button>
									<button id="btnSubmit" type="button" class="btn btn-info">Next</button>
								</center>

							</div>
						</form>
					</div>

				</div>
			</div>
		</div>


		<?php include("includes/media_bar.php") ?>
		<!-- #End social-media-bar -->
		<div class="Copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>
							<center>Copyright <i class="far fa-copyright"></i> -2019. All Rights Reserved</center>
						</p>
					</div>

				</div>
			</div>
		</div>
		<!------#End Copyright--- -->

		<div class="butom-home">
			<button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
		</div>

		<!-- ----- #End Top to buttom home ----- -->

	</div>

	<?php include("includes/footer.php") ?>



	<style>
		.position {
			position: relative;
			top: -25px;

		}
		.button{
			margin-top: 30px;
		}
		
	</style>

<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "DIVISION")
   {
    result = 'DISTRICT';

   }
   else 
   {
    result = 'AREA';
    
   }
   $.ajax({
    url:"../ajax/category_search_insert.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
	
});
</script>


	<script>
		$(document).ready(function() {
			//$("#divisionId").val($("#divisionId option").eq("4").val());
			$("#btnSubmit").on("click", function() {
				
			

					var is_invalid = 0;
					$(".is_invalid").each(function() {
						is_invalid = 1;

					});

					var titleId = $("#titleId").val().trim();
					var badroomId = $("#badroomId").val().trim();
					var drawingId = $("#drawingId").val().trim();
					var bdthroomId = $("#bdthroomId").val().trim();
					var floorId = $("#floorId").val().trim();
					var diningId = $("#diningId").val().trim();
					var kitchenId = $("#kitchenId").val().trim();
					var balconyId = $("#balconyId").val().trim();
					var squreFeetId = $("#squreFeetId").val().trim();
					var liftServiceId = $("#liftServiceId").val().trim();
					var gasConnectionId = $("#gasConnectionId").val().trim();
					var garageId = $("#garageId").val().trim();
					var emargencyEnergyId = $("#emargencyEnergyId").val().trim();
					var dateId = $("#dateId").val().trim();
					var rentNotiableId = $("#rentNotiableId").val().trim();
					var rentAmountId = $("#rentAmountId").val().trim();
					var advanceAmountId = $("#advanceAmountId").val().trim();
					var categoryId = $("#categoryId").val().trim();
					var DIVISION = $("#DIVISION").val().trim();
					var DISTRICT = $("#DISTRICT").val().trim();
					var AREA = $("#AREA").val().trim();
					var addressId = $("#addressId").val().trim();
					var emailId = $("#emailId").val().trim();
					var phoneNumberId = $("#phoneNumberId").val().trim();
					var otherFacilitireId = $("#otherFacilitireId").val().trim();
					var user_id = $("#userid").val();
				
				

	
					if (titleId == "") {
						$("#titleId").addClass("is-invalid");
						$("#titleErrMgs").text("Please fill out this fill--!");
						$("#titleErrMgs").show();
						$("#titleErrMgs").focus();
						return false;
					}
					else if ($("#titleId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#titleId").removeClass("is-invalid");
						$("#titleErrMgs").text("");
						$("#titleErrMgs").hide();
					
					}


					if (badroomId == "") {
						$("#badroomId").addClass("is-invalid");
						$("#badroomErrMgs").text("Please fill out this fill--!");
						$("#badroomErrMgs").show();
						$("#badroomErrMgs").focus();
						return false;
					} else if ($("#badroomId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#badroomId").removeClass("is-invalid");
						$("#badroomErrMgs").text("");
						$("#badroomErrMgs").hide();
						
					}



					if (drawingId == "0") {
						$("#drawingId").addClass("is-invalid");
						$("#drawingErrMgs").text("Please fill out this fill--!");
						$("#drawingErrMgs").show();
						$("#drawingErrMgs").focus();
						return false;
					} else if ($("#drawingId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#drawingId").removeClass("is-invalid");
						$("#drawingErrMgs").text("required");
						$("#drawingErrMgs").hide();
						
					}



					if (bdthroomId == "0") {
						$("#bdthroomId").addClass("is-invalid");
						$("#bdthroomErrMgs").text("Please fill out this fill--!");
						$("#bdthroomErrMgs").show();
						$("#bdthroomErrMgs").focus();
						return false;
					} else if ($("#bdthroomId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#bdthroomId").removeClass("is-invalid");
						$("#bdthroomErrMgs").text("");
						$("#bdthroomErrMgs").hide();
			
					}


					if (floorId == "") {
						$("#floorId").addClass("is-invalid");
						$("#floorErrMgs").text("Please fill out this fill--!");
						$("#floorErrMgs").show();
						$("#floorErrMgs").focus();
						return false;
					} else if ($("#floorId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#floorId").removeClass("is-invalid");
						$("#floorErrMgs").text("");
						$("#floorErrMgs").hide();
						
					}


					if (diningId == "0") {
						$("#titleId").addClass("is-invalid");
						$("#diningErrMgs").text("Please fill out this fill--!");
						$("#diningErrMgs").show();
						$("#diningErrMgs").focus();
						return false;
					} else if ($("#diningId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#diningId").removeClass("is-invalid");
						$("#diningErrMgs").text("");
						$("#diningErrMgs").hide();
					
					}

					if (kitchenId == "0") {
						$("#kitchenId").addClass("is-invalid");
						$("#kitchenErrMgs").text("Please fill out this fill--!");
						$("#kitchenErrMgs").show();
						$("#kitchenErrMgs").focus();
						return false;
					} else if ($("#kitchenId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#kitchenId").removeClass("is-invalid");
						$("#kitchenErrMgs").text("");
						$("#kitchenErrMgs").hide();
						
					}


					if (balconyId == "0") {
						$("#balconyId").addClass("is-invalid");
						$("#balconyErrMgs").text("Please fill out this fill--!");
						$("#balconyErrMgs").show();
						$("#balconyErrMgs").focus();
						return false;
					} else if ($("#balconyId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#balconyId").removeClass("is-invalid");
						$("#balconyErrMgs").text("");
						$("#balconyErrMgs").hide();
					
					}


					if (squreFeetId == "") {
						$("#titleId").addClass("is-invalid");
						$("#squreFeetErrMgs").text("Please fill out this fill--!");
						$("#squreFeetErrMgs").show();
						$("#squreFeetErrMgs").focus();
						return false;
					} else if ($("#squreFeetId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#squreFeetId").removeClass("is-invalid");
						$("#squreFeetErrMgs").text("");
						$("#squreFeetErrMgs").hide();
						
					}



					if (liftServiceId =="0") {
						$("#liftServiceId").addClass("is-invalid");
						$("#liftServiceErrMgs").text("Please fill out this fill--!");
						$("#liftServiceErrMgs").show();
						$("#liftServiceErrMgs").focus();
						return false;
					} else if ($("#liftServiceId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#liftServiceId").removeClass("is-invalid");
						$("#liftServiceErrMgs").text("");
						$("#liftServiceErrMgs").hide();
					
					}



					if (gasConnectionId == "0") {
						$("#gasConnectionId").addClass("is-invalid");
						$("#gasConnectionErrMgs").text("Please fill out this fill--!");
						$("#gasConnectionErrMgs").show();
						$("#gasConnectionErrMgs").focus();
						return false;
					} else if ($("#squreFeetId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#gasConnectionId").removeClass("is-invalid");
						$("#gasConnectionErrMgs").text("");
						$("#gasConnectionErrMgs").hide();
						
					}


					if (garageId == "0") {
						$("#garageId").addClass("is-invalid");
						$("#arageErrMgs").text("Please fill out this fill--!");
						$("#arageErrMgs").show();
						$("#arageErrMgs").focus();
						return false;
					} else if ($("#garageId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#garageId").removeClass("is-invalid");
						$("#arageErrMgs").text("");
						$("#arageErrMgs").hide();
				
					}


					if (emargencyEnergyId == "0") {
						$("#emargencyEnergyId").addClass("is-invalid");
						$("#emargencyEnergyErrMgs").text("Please fill out this fill--!");
						$("#emargencyEnergyErrMgs").show();
						$("#emargencyEnergyErrMgs").focus();
						return false;
					} else if ($("#squreFeetId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#emargencyEnergyId").removeClass("is-invalid");
						$("#emargencyEnergyErrMgs").text("");
						$("#emargencyEnergyErrMgs").hide();
						
					}


					if (dateId == "") {
						$("#dateId").addClass("is-invalid");
						$("#dateErrMgs").text("Please fill out this fill--!");
						$("#dateErrMgs").show();
						$("#dateErrMgs").focus();
						return false;
					} else if ($("#dateId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#dateId").removeClass("is-invalid");
						$("#dateErrMgs").text("");
						$("#dateErrMgs").hide();
						
					}


					if (rentNotiableId == "0") {
						$("#rentNotiableId").addClass("is-invalid");
						$("#rentNotiableErrMgs").text("Please fill out this fill--!");
						$("#rentNotiableErrMgs").show();
						$("#rentNotiableErrMgs").focus();
						return false;
					} else if ($("#rentNotiableId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#rentNotiableId").removeClass("is-invalid");
						$("#rentNotiableErrMgs").text("");
						$("#rentNotiableErrMgs").hide();
					
					}


					if (rentAmountId == "") {
						$("#rentAmountId").addClass("is-invalid");
						$("#rentAmountErrMgs").text("Please fill out this fill--!");
						$("#rentAmountErrMgs").show();
						$("#rentAmountErrMgs").focus();
						return false;
					} else if ($("#rentAmountId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#rentAmountId").removeClass("is-invalid");
						$("#rentAmountErrMgs").text("");
						$("#rentAmountErrMgs").hide();
						
					}


					if (advanceAmountId == "") {
						$("#advanceAmountId").addClass("is-invalid");
						$("#advanceAmountErrMgs").text("Please fill out this fill--!");
						$("#advanceAmountErrMgs").show();
						$("#advanceAmountErrMgs").focus();
						return false;
					} else if ($("#advanceAmountId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#advanceAmountId").removeClass("is-invalid");
						$("#advanceAmountErrMgs").text("");
						$("#advanceAmountErrMgs").hide();
						
				}

                    if (categoryId == "0") {
						$("#categoryId").addClass("is-invalid");
						$("#categoryErrMgs").text("Please fill out this fill--!");
						$("#categoryErrMgs").show();
						$("#categoryErrMgs").focus();
						return false;
					} else if ($("#categoryId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#categoryId").removeClass("is-invalid");
						$("#categoryErrMgs").text("");
						$("#categoryErrMgs").hide();
						
					}




					if (DIVISION == "0") {
						$("#DIVISION").addClass("is-invalid");
						$("#divisionErrMgs").text("Please fill out this fill--!");
						$("#divisionErrMgs").show();
						$("#divisionErrMgs").focus();
						return false;
					} else if ($("#DIVISION").hasClass("is_invalid")) {
						return false;
					} else {
						$("#DIVISION").removeClass("is-invalid");
						$("#divisionErrMgs").text("");
						$("#divisionErrMgs").hide();
						
					}

					if (DISTRICT == "0") {
						$("#DISTRICT").addClass("is-invalid");
						$("#districtErrMgs").text("Please fill out this fill--!");
						$("#districtErrMgs").show();
						$("#districtErrMgs").focus();
						return false;
					} else if ($("#DISTRICT").hasClass("is_invalid")) {
						return false;
					} else {
						$("#DISTRICT").removeClass("is-invalid");
						$("#districtErrMgs").text("");
						$("#districtErrMgs").hide();	
					}


					if (AREA == "0") {
						$("#AREA").addClass("is-invalid");
						$("#areaErrMgs").text("Please fill out this fill--!");
						$("#areaErrMgs").show();
						$("#areaErrMgs").focus();
						return false;
					} else if ($("#AREA").hasClass("is_invalid")) {
						return false;
					} else {
						$("#AREA").removeClass("is-invalid");
						$("#areaErrMgs").text("");
						$("#areaErrMgs").hide();
						
					}



					if (addressId == "") {
						$("#addressId").addClass("is-invalid");
						$("#addressErrMgs").text("Please fill out this fill--!");
						$("#addressErrMgs").show();
						$("#addressErrMgs").focus();
						return false;
					} else if ($("#addressId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#addressId").removeClass("is-invalid");
						$("#addressErrMgs").text("");
						$("#addressErrMgs").hide();
						
					}


					if (emailId == "") {
						$("#emailId").addClass("is-invalid");
						$("#emailErrMgs").text("Please fill out this fill--!");
						$("#emailErrMgs").show();
						$("#emailErrMgs").focus();
						return false;
					} else if ($("#emailId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#emailId").removeClass("is-invalid");
						$("#emailErrMgs").text("");
						$("#emailErrMgs").hide();
						
					}

					if (phoneNumberId == "") {
						$("#phoneNumberId").addClass("is-invalid");
						$("#phoneNumberErrMgs").text("Please fill out this fill--!");
						$("#phoneNumberErrMgs").show();
						$("#phoneNumberErrMgs").focus();
						return false;
					} else if ($("#phoneNumberId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#phoneNumberId").removeClass("is-invalid");
						$("#phoneNumberErrMgs").text("");
						$("#phoneNumberErrMgs").hide();
						
					}



					if (otherFacilitireId == "") {
						$("#otherFacilitireId").addClass("is-invalid");
						$("#otherFacilitireErrMgs").text("Please fill out this fill--!");
						$("#otherFacilitireErrMgs").show();
						$("#otherFacilitireErrMgs").focus();
						return false;
					} else if ($("#otherFacilitireId").hasClass("is_invalid")) {
						return false;
					} else {
						$("#otherFacilitireId").removeClass("is-invalid");
						$("#otherFacilitireErrMgs").text("");
						$("#otherFacilitireErrMgs").hide();
						
					}
				

					if (is_invalid == 1) {
						return false;
					}
		 $.post("../ajax/adpost_family_insert.php",{title:titleId,badroom:badroomId,drawing:drawingId,bdthroom:bdthroomId,floor:floorId,dining:diningId,kitchen:kitchenId,balcony:balconyId,squreFeet:squreFeetId,liftService:liftServiceId,gasConnection:gasConnectionId,garage:garageId,emargencyEnergy:emargencyEnergyId,date:dateId,rentNotiable:rentNotiableId,rentAmount:rentAmountId,advanceAmount:advanceAmountId,category:categoryId,division:DIVISION,district:DISTRICT,area:AREA,address:addressId,email:emailId,phoneNumber:phoneNumberId,otherFacilitire:otherFacilitireId,user_id:user_id},function(data){
		
				window.location.href="uploadimage.php";
			});
		 return false;

			});
		});
	</script>
	