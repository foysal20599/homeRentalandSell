<?php include("includes/header.php") ?>

<body>

    <div class="warpper">
       
              <?php include("includes/menu.php") ?>
        <!-- ------#End Menu-area----- -->
       

       


        <div class="family">
            <div class="container">
                <h2>Relationship Among Landlord Tenant</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-fluid" src="image/relation.png">
                        <h4>
                            It is necessary to maintain relationtionship best among Tenat & Landlord
                        </h4>
                        <p> The landlord vs. tenant dispute is a widespread phenomenon even though there are laws to serve as a blueprint for basic interactions. Despite the laws and acts, there are some primary duties that every landlord or homeowner should perform or follow. Sometimes it seems like there are no rules in this regard since there is no regulatory body for monitoring the impulsive activities of so many landlords. Do’s – The Responsibilities of Landlords… <span id="dots">.....</span><span id="more"> The landlord vs. tenant dispute is a widespread phenomenon even though there are laws to serve as a blueprint for basic interactions. Despite the laws and acts, there are some primary duties that every landlord or homeowner should perform or follow. Sometimes it seems like there are no rules in this regard since there is no regulatory body for monitoring the impulsive activities of so many landlords. Do’s – The Responsibilities of Landlords…  </span></p>
                                 <button type="button" onclick="myFunction()" id="myBtn" class="btn btn-warning">Read More</button>
                    </div>

                </div>
            </div>
        </div><!-- ------#End family ------------- -->




        <!-- --------family1-------- --->

        <div class="family1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <img class="img-fluid img" src="image/neigbour3.jpg">


                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <img class="img-fluid img" src="image/neigbour1.jpg">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <img class="img-fluid img" src="image/neigbour1.jpg">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <img class="img-fluid img" src="image/neigbour3.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>






        <!-- ----------- family2 ----------- --->

        <div class="family2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            Behioviour of the users are under the observation of the website Admin.
                        </h3>
                        <hr>
                        <p>the users who are became the member of this site will get all the facility of viewing home details for renting or sellling house.But we ensure security of the information of the landlord from the users.the users information will be varified for fake activities and ensure security.<span id="dots1">.....</span><span id="more1">Landlords are naturally very curious about the residents they choose as tenants. Being curious extends to the responsibilities of landlords since it involves ensuring the safety and security of a building. But landlords should be aware of where to draw the line. Questioning guests, peeking through their windows, and conducting surveillance are an infringement of tenancy rights on privacy and might expose landlords to potential lawsuits </span></p>
                                 <button type="button" onclick="myFunction1()" id="myBtn1" class="btn btn-warning">Read More</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- ---------- family3 ------------ --->

        <div class="family3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="image/progress.gif">
                    </div>
                </div>
            </div>
        </div>


    
      <?php include("includes/media_bar.php") ?>
          <!-- #End social-media-bar -->

   
    <?php include("includes/get_post.php") ?>
        <!-- #End Get_Post -->

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


        <style>

            #more{
                display: none;
            }
             #more1{
                display: none;
             }
			.img{
				height: 300px;
				width: 250px;
			}

        </style>

    <script>
            function myFunction() {
              var dots = document.getElementById("dots");
              var moreText = document.getElementById("more");
              var btnText = document.getElementById("myBtn");

              if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more"; 
                moreText.style.display = "none";
              } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less"; 
                moreText.style.display = "inline";
              }
            }

              function myFunction1() {
              var dots1 = document.getElementById("dots1");
              var more1Text = document.getElementById("more1");
              var btn1Text = document.getElementById("myBtn1");

              if (dots1.style.display === "none") {
                dots1.style.display = "inline";
                btn1Text.innerHTML = "Read more"; 
                more1Text.style.display = "none";
              } else {
                dots1.style.display = "none";
                btn1Text.innerHTML = "Read Less"; 
                more1Text.style.display = "inline";
              }
            }

</script>


    