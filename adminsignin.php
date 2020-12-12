<?php include("includes/header.php") ?>

<body>

	<div class="warpper">


		<?php include("includes/menu.php") ?>
		<!-- ------#End Menu-area----- -->





		<div class="our_form login">
			<div class="container">
				<div class="row">

					<div class="col-md-6 offset-md-3">
						<div class="card">
							<form class="logIn" action="user_login/check_admin_signin.php">
								<h1>Sign in for Admin </h1>

								<div class="form-group">
									<input class="form-control " id="usernameMailId" type="username" name="username" placeholder="Email/Username">
									<label for="usernameId" id="usernamedIdErrMgs" class="col-form-label text-danger pull-right"> </label>
								</div>
								<div class="form-group">
									<input class="form-control" id="passwordId" type="Password" name="userpassword" placeholder="Enter Password">
									<label for="passwordId" id="passwordIdErrMgs" class="col-form-label text-danger pull-right"> </label>
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
									<Button id="btnSignUp" type="Button"> Sign In </Button>
								</div>
								
							</form>
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



	<?php include("includes/footer.php")?>

	<style>
		#usernamedIdErrMgs {
			display: none;
		}

		#passwordIdErrMgs {
			display: none;
 
		}

	
	</style>


	 <script>
		 $(document).ready(function() {
			$("#btnSignUp").on("click", function() {
		
				 var is_invalid = 0;
                $("is_invalid").each(function() {
                    is_invalid = 1;
								
                });
				var usernameMailId = $("#usernameMailId").val().trim();
					var passwordId = $("#passwordId").val().trim();
			if(usernameMailId == ""){
				 $("#usernameMailId").addClass("is-invalid");
				$("#usernamedIdErrMgs").text("Enter your email or mobile phone number");
				$("#usernamedIdErrMgs").show();
				$("#usernamedIdErrMgs").focus();
				return false;
			}else if($("#usernameMailId").hasClass("is-invalid")){
				 return false;
			}else{
				$("#usernamedIdErrMgs").text(" ");
					$("#usernamedIdErrMgs").hide();
			}
				
				if(passwordId == ""){
				$("#passwordId").addClass("is-invalid");
				$("#passwordIdErrMgs").text("Enter your password");
				$("#passwordIdErrMgs").show();
				$("#passwordIdErrMgs").focus();
				return false;
			}else if($("#passwordId").hasClass("is-invalid")){
				 return false;
			}else{
				$("#passwordIdErrMgs").text("");
					$("#passwordIdErrMgs").hide();
			}
				if(is_invalid == 1){
                return false;
            }
				


			
			$.post("user_login/check_admin_signin.php",{username:usernameMailId,userpassword:passwordId},function(data){
				if(data == 1){
					 
					window.location.href="admin/index.php";
	 
				}else{
					alert("Invalid username or Password");
				}
				
			});
			



			});
		 
		}); 



</script>
	
	




