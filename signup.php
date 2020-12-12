<?php include("includes/header.php") ?>

<body>

    <div class="warpper">


        <?php include("includes/menu.php") ?>
        <!-- ------#End Menu-area----- -->

        <div class="our-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <form action="">

                                <h1>
                                    Sign Up to Continue
                                </h1>      

                                <div class="form-group">
                                    <input class="form-control inputID" id="nameId" type="text" name="username" placeholder="Your Username">
                                    <label for="nameId" id="nameIdErrMgs" class="col-form-label text-danger pull-right"></label>
                                </div>


                                <div class="form-group">
                                    <input class="form-control inputID" id="emailId" type="E_mail" name="Email" placeholder="Your Email">
                                    <label for="emailId" id="emailIdErrMgs" class="col-form-label text-danger pull-right"></label>

                                </div>

                                <div class="form-group">
                                    <input class="form-control inputID" id="mobileId" type="Number" name="usernumber" placeholder="Your mobile number">
                                    <label for="mobileId" id="mobileIdErrMgs" class="col-form-label text-danger pull-right"></label>

                                </div>

                                <div class="form-group">
                                    <input class="form-control inputID" id="passwordId" type="Password" name="userpassword" placeholder="Password">
                                    <label for="passwordId" id="passwordIdErrMgs" class="col-form-label text-danger pull-right"> </label>
                                </div>

                                <div class="form-group">
                                    <input class="form-control inputID" id="confPasswordId" type="Password" name="userpassword" placeholder="Confirm Password">
                                    <label for="confPasswordId" id="confPasswordIdErrMgs" class="col-form-label text-success pull-right"></label>
                                    <label for="confPasswordId" id="confPasswordIdErrMgs1" class="col-form-label text-danger pull-right"></label>
                                </div>
                                <div class="form-check">

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input CheckRadio" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input CheckRadio" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div><label for="passwordId" id="radioIdErrMgs" class="col-form-label text-danger pull-right"> Please select gender...!</label></div>
                                    

                                </div>

                                <!--Check Box-->

                                <div class="form-check">
                                    <input  for="check" type="checkbox" id="checkId" name="usercheckbox" value="I accept terms of services and Privacy Policy More details">
                                    <label for="check">I accept terms of services and Privacy Policy <a href="">More details</a> </label>
                                   <div><label for="nameId" id="checkIdErrMgs" class="col-form-label text-danger pull-right">Please Tick the Agree to Terms of Use...!</label></div> 
                                </div>


                                <div class="Button">
                                    <Button id="btnSignUp" type="button"> Sign Up </Button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -----#End our-form ------ -->

<div class="success">
         <img class="loader" src="image/loading.gif" alt="" style="display:none; " >
          

</div>


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
        #emailIdErrMgs {
            display: none;
        }

        #nameIdErrMgs {
            display: none;
        }

        #passwordIdErrMgs {
            display: none;
        }

        #mobileIdErrMgs {
            display: none;
        }
        #checkIdErrMgs{
            display: none;
        }
        #radioIdErrMgs{
            display: none;
        }
    </style>


    <script>
        $(document).ready(function(){
            function isName(name) {
                var regex = /^[a-z0-9]*$/; // /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(name);
            }
            $("#nameId").on("change", function() {
                var USER_NAME = $(this).val().trim();
                var name = isName(USER_NAME);
                if (name == false) {
                    $("#nameId").addClass("is-invalid");
                    $("#nameIdErrMgs").text("Invalid username! small latter & digit..");
                    $("#nameIdErrMgs").show();
                    $("#nameId").focus();
                } else {
                    $("#nameId").removeClass("is-invalid");
                    $("#nameIdErrMgs").hide();
                    $.post("ajax/check_duplicate_name.php", {
                        USER_NAME: USER_NAME
                    }, function(data) {
                        if (data == 1) {
                            $("#nameId").addClass("is-invalid");
                            $("#nameIdErrMgs").text("Duplicate NAME!");
                            $("#nameIdErrMgs").show();
                        }
                    });
                }
            });

            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
            $("#emailId").on("change", function() {
                var USER_EMAIL = $(this).val().trim();
                var email = isEmail(USER_EMAIL);
                if (email == false) {
                    $("#emailId").addClass("is-invalid");
                    $("#emailIdErrMgs").text("Invalid Email Address! ..'@'");
                    $("#emailIdErrMgs").show();
                    $("#emailId").focus();
                } else {
                    $("#emailId").removeClass("is-invalid");
                    $("#emailIdErrMgs").hide();
                    $.post("ajax/check_duplicate_email.php", {
                        USER_EMAIL: USER_EMAIL
                    }, function(data) {
                        if (data == 1) {
                            $("#emailId").addClass("is-invalid");
                            $("#emailIdErrMgs").text("Duplicate Email!");
                            $("#emailIdErrMgs").show();
                        } else {
                            $.post("ajax/send_verification_code.php", {
                                USER_EMAIL: USER_EMAIL
                            }, function(data) {});
                        }
                    });
                }
            });

            function isMobile(mobile) {
                var regex = /^([+]\d{2}[ ])?\d{11}$/;
                return regex.test(mobile);
            }
            $("#mobileId").on("change", function() {
                var USER_PHONE = $(this).val().trim();
                var mobile = isMobile(USER_PHONE);
                if (mobile == false) {
                    $("#mobileId").addClass("is-invalid");
                    $("#mobileIdErrMgs").text("Invalid Mobile No!");
                    $("#mobileIdErrMgs").show();
                    $("#mobileId").focus();
                } else {
                    $("#mobileId").removeClass("is-invalid");
                    $("#mobileIdErrMgs").hide();
                    $.post("ajax/check_duplicate_number.php", {
                        USER_PHONE: USER_PHONE
                    }, function(data) {
                        if (data == 1) {
                            $("#mobileId").addClass("is-invalid");
                            $("#mobileIdErrMgs").text("Duplicate Number!");
                            $("#mobileIdErrMgs").show();

                        }
                    });
                }

            });

            function isPassword(password) {
                var regex = /^(?=.*[a-z])[A-Za-z0-9\d=!\-@._*]+$/
                return regex.test(password);
            }
            function passwordCheck(){
                var USER_PASSWORD = $("#passwordId").val().trim();
                var USER_CONF_PASSWORD = $("#confPasswordId").val().trim();
                var password = isPassword(USER_PASSWORD);
                if (password == false) {
                    $("#passwordId").addClass("is-invalid");
                    $("#passwordIdErrMgs").text("Invalid password! Minimum one latter.8 character.. .");
                    $("#passwordIdErrMgs").show();
                    $("#passwordId").focus();
                    return false;
                } else {
                    $("#passwordId").removeClass("is-invalid");
                    $("#passwordIdErrMgs").hide();

                }
                if (USER_CONF_PASSWORD != USER_PASSWORD && USER_CONF_PASSWORD.length > 0) {
                    $("#confPasswordId").addClass("is-invalid");
                    $("#confPasswordIdErrMgs1").text("Don't Match!");
                    $("#confPasswordIdErrMgs").hide();
                    $("#confPasswordIdErrMgs1").show();
                    $("#confPasswordId").focus();
                    return false;
                } else {
                    if(USER_CONF_PASSWORD.length > 0){
                        $("#confPasswordIdErrMgs").hide();
                        $("#confPasswordIdErrMgs1").hide();
                        $("#confPasswordId").addClass("valid");
                        $("#confPasswordId").removeClass("is-invalid");
                        $("#confPasswordIdErrMgs").text("Password Match!");
                        $("#confPasswordIdErrMgs").show();
                        $("#confPasswordId").focus();
                    }
                }
            }
            $("#passwordId").on("change", function() {
                passwordCheck();
            });
            $("#confPasswordId").on("change", function() {
                passwordCheck();
            });
            
            
            
            

            $("#btnSignUp").on("click", function() {
                var is_invalid = 0;
                $(".is-invalid").each(function() {
                    is_invalid = 1;
                });
                var nameId = $("#nameId").val().trim();
                var emailId = $("#emailId").val().trim();
                var passwordId = $("#passwordId").val().trim();
                var confPasswordId = $("#confPasswordId").val().trim();
                var mobileId = $("#mobileId").val().trim();
                if (nameId == "") {
                    $("#nameIdErrMgs").text("Required!");
                    $("#nameIdErrMgs").show();
                    $("#nameIdErrMgs").focus();
                    return false;
                } else if ($("#nameId").hasClass("is-invalid")) {
                    return false;
                } else {
                    $("#nameIdErrMgs").text("");
                    $("#nameIdErrMgs").hide();
                }
                if (emailId == "") {
                    $("#emailIdErrMgs").text("Required!");
                    $("#emailIdErrMgs").show();
                    $("#emailIdErrMgs").focus();
                    return false;
                } else if ($("#emailId").hasClass("is-invalid")) {
                    return false;
                } else {
                    $("#emailIdErrMgs").text("");
                    $("#emailIdErrMgs").hide();
                }
                if (passwordId == "") {
                    $("#passwordIdErrMgs").text("Required!");
                    $("#passwordIdErrMgs").show();
                    $("#passwordIdErrMgs").focus();
                    return false;
                } else if ($("#passwordId").hasClass("is-invalid")) {
                    return false;
                } else {
                    $("#passwordIdErrMgs").text("");
                    $("#passwordIdErrMgs").hide();
                }
                if (confPasswordId == "") {
                    $("#confPasswordIdErrMgs").text("Required!");
                    $("#confPasswordIdErrMgs").show();
                    $("#confPasswordIdErrMgs").focus();
                    return false;
                } else if ($("#confPasswordId").hasClass("is-invalid")) {
                    return false;
                } else {
                    $("#confPasswordIdErrMgs").text("");
                    $("#confPasswordIdErrMgs").hide();
                }
                if (mobileId == "") {
                    $("#mobileIdErrMgs").text("Required!");
                    $("#mobileIdErrMgs").show();
                    $("#mobileIdErrMgs").focus();
                    return false;
                } else if ($("#mobileId").hasClass("is-invalid")) {
                    return false;
                } else {
                    $("#mobileIdErrMgs").text("");
                    $("#mobileIdErrMgs").hide();
                }
                 if(is_invalid == 1){
                return false;
            }
			var is_radio = 0;
			var gender;
			$(".CheckRadio").each(function(){
				//alert("Select Gender---!");
				if($(this).prop("checked") == true){
					is_radio = 1;
					gender = $(this).val();
				}else{
                      $("#radioIdErrMgs").show();  
                }
			});
			if(is_radio == 0){
                 return false;
            }else{
                      $("#radioIdErrMgs").hide();  
                }
                
					
				var is_check = 0;
				if (!($('#checkId').is(':checked'))) {
               is_check = 1;
					  $("#checkIdErrMgs").show(); 
              }else{
				   $("#checkIdErrMgs").show();   
			  }
				if (is_check){
            return false;
        } else{
           
			 $("#checkIdErrMgs").hide(); 
        }
		
				
					
				
				$(".loader").show();
				 $(".our-form").hide(); 
			$.post("ajax/insert.php",{name:nameId,email:emailId,password:passwordId,mobile:mobileId,gen:gender},function(data){
		
				if(data == 1){
					//alert('ok');	
				
						 $(".our-form").hide(); 
					  swal("Welcome!", "You Are Successfully Register!", "success")
					window.location.href="lanloadsignin.php";
					
				}else{
					$(".our-form").show(); 
				
				}
				
				$(".loader").hide();
			});
			      $('input.class').removeAttr('value');
                  $('.inputID').removeAttr('value');
                
            });

        });
    </script>