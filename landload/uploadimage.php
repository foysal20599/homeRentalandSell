<?php
session_start();
if(!isset($_SESSION['last_id'])){
	header("location:adpost-family.php");
}
 include("includes/header.php") ?>

<?php
if(isset($_POST['submit']))
{
	$AD_NO=$_SESSION['last_id'];
	 unset($_SESSION['last_id']);
    $target = "image/uploads/".basename(($_FILES['AD_IMAGE_MIN']['name']));
     $target2 = "image/uploads/".basename(($_FILES['AD_IMAGE_MAX']['name']));
     $target3 = "image/uploads/".basename(($_FILES['AD_IMAGE_AVG']['name']));

    // $print_r($target);
    $image = $_FILES['AD_IMAGE_MIN']['name'];
    $image2 = $_FILES['AD_IMAGE_MAX']['name'];
    $image3 = $_FILES['AD_IMAGE_AVG']['name'];
    if($image !="" && $image2 !="" && $image3 !=""){

    $sql = "INSERT INTO `advertisement_images`(`AD_IMAGE_MIN`,`AD_IMAGE_MAX`,`AD_IMAGE_AVG`,`AD_NO`) VALUES ('$image','$image2','$image3','$AD_NO')";
    
    mysqli_query($con, $sql);

    if((move_uploaded_file($_FILES['AD_IMAGE_MIN']['tmp_name'], $target)) &&
    	(move_uploaded_file($_FILES['AD_IMAGE_MAX']['tmp_name'], $target2))&& 
    	(move_uploaded_file($_FILES['AD_IMAGE_AVG']['tmp_name'], $target3)))   {
        $msg = "Image upload successfull";
    }
    else{
        $msg = "There was a problem";
    }
}else{
 echo "please select three images";
}
}

?>
<body>


	<div class="warpper">

		<?php include("includes/menu.php") ?>

		<!-- ------#End Menu-area----- -->



		<div class="uploadimage">
			<div class="container">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<form action="" method="post" enctype="multipart/form-data">


							<div class="form-group">
								<h4>
									Upload Your Maximum Size
								</h4>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="AD_IMAGE_MIN" id="Image1Id">
									<label id="customId" class="custom-file-label" for="customFile">Choose file</label>

									<label for="customId" id="customErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<h4>
									Upload Your Avarage Size
								</h4>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="AD_IMAGE_MAX" id="Image1Id">
									<label id="customId" class="custom-file-label" for="customFile">Choose file</label>

									<label for="customId" id="customErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<h4>
									Upload Your Minimum Size
								</h4>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="AD_IMAGE_AVG" id="Image1Id">
									<label id="customId" class="custom-file-label" for="customFile">Choose file</label>

									<label for="customId" id="customErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
								</div>
							</div>
							<br><br> <br>
							<hr>
		
                                <div class="button">
                            <center>
                                <a href="adpost-family.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                                <!-- <input type="submit" name="submit"> -->
                        <button id="btnSubmit" type="submit" class="btn btn-info" name="submit">Submit</button>
                                
                            </center>
						</form>
						

						</div>
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
		.uploadimage {
			padding: 70px;
		}

		.form-group {
			padding: 70px;
		}

		h4 {
			padding: 10px;
		}

		.button {
			margin-top: 50px;
			padding: 20px;
		}
	</style>



	<?php include("includes/footer.php") ?>


	<script>
		

            $("#btnSubmit").on("click", function() {
                var is_invalid = 0;
                $(".is-invalid").each(function() {
                    is_invalid = 1;
                });
                var customId = $("#customId").val().trim();
                
                if (customId == "0") {
                    $("#customId").addClass("is-invalid");
                    $("#customErrMgs").text("Please upload Image--!!");
                    $("#customErrMgs").show();
                    $("#customErrMgs").focus();
                    return false;
                } else if ($("#customId").hasClass("is-invalid")) {
                    return false;
                } else {
                	$("#customId").removeClass("is-invalid");
                    $("#customErrMgs").text("");
                    $("#customErrMgs").hide();
                }
            });
	</script>
