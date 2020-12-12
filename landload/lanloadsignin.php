<?php include("includes/header.php") ?>

<body>

	<div class="warpper">


		<?php include("includes/menu.php") ?>
		<!-- ------#End Menu-area----- -->





		<div class="login">
			<div class="container">
				<div class="row">

					<div class="col-md-6 offset-md-3">
						<div class="card">
							<form class="logIn" action="">
								<h1>Sign in for Lanlord </h1>

								<div class="form-group">
									<input class="form-control " id="usernameMailId" type="username" name="username" placeholder="Email/Username">
									<label for="usernameId" id="usernamedIdErrMgs" class="col-form-label text-danger pull-right">Enter your email or mobile phone number </label>
								</div>
								<div class="form-group">
									<input class="form-control" id="passwordId" type="Password" name="userpassword" placeholder="Enter Password">
									<label for="passwordId" id="passwordIdErrMgs" class="col-form-label text-danger pull-right">
										Enter your password </label>
								</div>

								<!--Check Box-->

								<div class="checkbox">
									<input type="checkbox" id="check" name="usercheckbox" value="I accept terms of services and Privacy Policy More details">
									<label for="check">Rememberd me </label>
									<label for="passwordId" id="passwordIdErrMgs" class="col-form-label text-danger pull-right"> </label>

								</div>
								<div class="forgot">
									<a href=""> If forgot password?</a>
								</div>
								<div class="Button">
									<a href="adpost.php" style="text-decoration:none;"><Button id="btnSignUp" type="Button"> Sign In </Button></a>
								</div>
								<hr>

								<div class="btn-facebook">
									<center><a href="" class="btn btn-lg btn-social btn-facebook">  <i class="fab fa-facebook"></i> Sign in with Facebook </a></center>
								</div>
								
								<div class="btn-gmail">
									<center><a href="" class="btn btn-lg btn-social btn-google">  <i class="fab fa-google"></i> Sign in with Google </a></center>
								</div>
							</form>
						</div>
						<div class="others-signup">
							<p id="others-signup1">
								Not a member yet? Get Sign Up Now ID.
								<a href="signup.php"> <Button  type="Button" class="btn"> Sign Up </Button></a>
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>


		<!-- #End log in - -->

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

	</div>



	<?php include("includes/footer.php") ?>

	<style>
		#usernamedIdErrMgs {
			display: none;
		}

		#passwordIdErrMgs {
			display: none;

		}
		hr{
			margin: 15px;
			padding: 10px 0;	
		}
		.login .btn-facebook{
			background:#3b5998;
			color: wheat;
			margin:0 15px;
			border-radius: 30px;
			
		}
      .login .btn-google{
			background:#DD4B39;
			color: wheat;
			border-radius: 30px;
			margin-bottom: 30px;
			width: 95%;
		
	}
	
	</style>


	 <script>
		 $(document).ready(function() {
			$("#btnSignUp").on("click", function() {
		
				 var is_invalid = 0;
                $(".is_invalid").each(function() {
                    is_invalid = 1;
								
                });
				var usernameMailId = $("#usernameMailId").val().trim();
					var usernameMailId = $("#passwordId").val().trim();
			if(usernameMailId == ""){
				$("#usernameMailId").text("Required...!");
				$("#usernamedIdErrMgs").show();
				$("#usernamedIdErrMgs").focus();
				return false;
			}else if($("#usernameMailId").hasClass("is-invalid")){
				 return false;
			}else{
				$("#usernamedIdErrMgs").text(" Required");
					$("#usernamedIdErrMgs").hide();
			}
				
				if(passwordId == " "){
				$("#passwordId").text("Required...!");
				$("#passwordIdErrMgs").show();
				$("#passwordIdErrMgs").focus();
				return false;
			}else if($("#passwordId").hasClass("is-invalid")){
				 return false;
			}else{
				$("#passwordIdErrMgs").text("Required");
					$("#passwordIdErrMgs").hide();
			}
				if(is_invalid == 1){
                return false;
            }
				

			});
		}); 
		 
		/* $(document).ready(function() {
			$("#btnSignUp").on("click", function(){	
				
					
                $(".login").each(function(){
					
					//alert("ok");
              var usernameMailId;
					if(usernameMailId == 1){
						$("#usernamedIdErrMgs").show()
					}else{
						$("#usernamedIdErrMgs").hide();
					}
				if(passwordIdErrMgs == 1){
						$("#passwordIdErrMgs").show()
					}else{
						$("#passwordIdErrMgs").hide();
					}
					
					
                });
				
				

			});
		});
	*/


</script>
	
	




