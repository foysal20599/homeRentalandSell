<?php include("includes/header.php") ?>

<body>

    <div class="warpper">
             
             
              <?php include("includes/menu.php") ?>
        <!-- ------#End Menu-area----- -->

       
      

        <!-- #Contact Us -->

        <div class="contact-us">
            <div class="container">
                <h1>Contact Us</h1>
                <hr>
                <div class="line"></div>
             

                <div class="row">
                    <div class="col-md-6">
                        <div class="single-input">
                            <label for="name">Name</label>                           
                            <input id="nameId" class="form-control" type="text">
                            <label for="nameId" id="nmaeIdErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
                            
                        </div>
                        <div class="single-input">
                            <label for="email">Email</label>
                            <input id="emailId" class="form-control" type="text">
                            <label for="emailId" id="emailIdErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
                            
                        </div>
                        <div class="single-input">
                            <label for="Subject">Subject</label>
                            
                            <input id="subjectId" class="form-control" type="text">
                            <label for="subjectId" id="subjectIdtErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
                            
                        </div>
                        <div class="single-input">
                            <label for="Message">Message</label>
                            
                            <textarea class="form-control" name="" id="messageId" cols="30" rows="10"></textarea>
                            <label for="Message" id="messageIdErrMgs" class="col-form-label text-danger pull-right" style="display: none;"></label>
                            
                        </div>
                        <div class="submit-button">
                            <input id="btnSubmit" class="btn" type="submit">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h4>
                            More Information
                        </h4>
                        <ul>
                              <center><i class="fas fa-map-marker-alt"></i></center>  
                            <li> house# 9/1, road# 04, block# b,siddeswary , #Romna, #dhaka -1217 (mouchak market)</li>

                            <div class="icon">
                                <p>
                                  <a href=""><i class="fab fa-facebook-square"></i></a>
                                    <a href=""> <i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="">  <i class="fab fa-instagram"></i></a>
                                    
                                    <a href="">   <i class="fab fa-whatsapp"></i></a>
                                    
                                    <a href="">    <i class="fab fa-twitter"></i></a>
                                    
                                    <a href="">      <i class="fas fa-phone"></i>
                                    </a>
                                    
                                    <a href="">    <i class="far fa-envelope"></i></a>
                        
                                </p>
                                <h5>Business Hour's</h5>

                                <li>
                                    <i class="far fa-clock"></i> Mon. - Sun. 8am to 7pm
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>24 Hour's Service
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>


            </div>
        </div><!-- #End Contact Us -->
     
    <?php include("includes/google_map.php") ?>
        <!-- #End-google-map -->



      <?php include("includes/media_bar.php") ?>
 

        <!-- #End social-media-bar -->


      
    <!--   End Get-post  -->





        <footer>
            <div class="footer-blurb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>
                                Happiness guarentee
                            </h3>
                            <p>"We pride ourselves on the quality of our products. If you have a problem with one of our products, we’ll solve it. Just reach out and we'll make it right.
                            </p>
                            <p>
                                " HM's website"
                            </p>
                        </div>

                        <div class="col-md-6">
                            <h3>
                                Local Expertise,Professional Results
                            </h3>
                            <p>
                                HM management is a locally owned and operated property management company with a fresh perspective to the local market. When you have worked so hard to find a nice home, we understand how important it is to attract and rent to high quality tenants.
                            </p>
                            <p>
                                " HM's website"
                            </p>
                        </div>
                        <div class="designer">
                            <p>
                                The site is develpoed by <a href="">Foysal </a> & <a href=""> Tahmina</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-----#End Footer-- -->

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

<script>
        $(document).ready(function() {
            //$("#divisionId").val($("#divisionId option").eq("4").val());
            $("#btnSubmit").on("click", function() {
                
            

                    var is_invalid = 0;
                    $(".is_invalid").each(function() {
                        is_invalid = 1;

                    });

                    var nameId = $("#nameId").val().trim();
                    var emailId = $("#emailId").val().trim();
                    var subjectId = $("#subjectId").val().trim();
                    var messageId = $("#messageId").val().trim();

    
                    if (nameId == "") {
                        
                        $("#nmaeIdErrMgs").text("Please fill out this fill--!");
                        $("#nmaeIdErrMgs").show();
                        $("#nmaeIdErrMgs").focus();
                        return false;
                    }
                    else if ($("#nameId").hasClass("is_invalid")) {
                        return false;
                    } else {
                        
                        $("#nmaeIdErrMgs").text("");
                        $("#nmaeIdErrMgs").hide();
      


              
                    }


                    if (emailId == "") {
                        
                        $("#emailIdErrMgs").text("Please fill out this fill--!");
                        $("#emailIdErrMgs").show();
                        $("#emailIdErrMgs").focus();
                        return false;
                    } else if ($("#emailId").hasClass("is_invalid")) {
                        return false;
                    } else {
                       
                        $("#emailIdErrMgs").text("");
                        $("#emailIdErrMgs").hide();
                        
                    }



                    if (subjectId == "") {
                       
                        $("#subjectIdtErrMgs").text("Please fill out this fill--!");
                        $("#subjectIdtErrMgs").show();
                        $("#subjectIdtErrMgs").focus();
                        return false;
                    } else if ($("#subjectId").hasClass("is_invalid")) {
                        return false;
                    } else {
                       
                        $("#subjectIdtErrMgs").text("required");
                        $("#subjectIdtErrMgs").hide();
                        
                    }



                    if (messageId == "") {
                        
                        $("#messageIdErrMgs").text("Please fill out this fill--!");
                        $("#messageIdErrMgs").show();
                        $("#messageIdErrMgs").focus();
                        return false;
                    } else if ($("#messageId").hasClass("is_invalid")) {
                        return false;
                    } else {
                       
                        $("#messageIdErrMgs").text("");
                        $("#messageIdErrMgs").hide();
            
                    }



                    if (is_invalid == 1) {
                        return false;
                    }
         $.post("../ajax/contact-us-insert.php",{name:nameId,email:emailId,subject:subjectId,message:messageId},function(data){
            if(data == 1){
                    //alert('ok');  
                 
                      swal("Welcome!", "You Are Successfully Register!", "success")
                            $('#nameId').val('');
                            $('#emailId').val('');
                            $('#subjectId').val('');
                            $('#messageId').val('');
                    
                }                
            });
         return false;

            });
        });
    </script>





