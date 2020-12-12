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
                            <form action="">
                                <h1>Sign in for Admin </h1>

                                <div class="form-group">
                                    <input class="form-control" id="name1" type="username" name="username" placeholder="Email/Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="name1" type="Password" name="userpassword" placeholder="Enter Password">
                                </div>

                                <!--Check Box-->

                                <div class="checkbox">
                                    <input type="checkbox" id="check" name="usercheckbox" value="I accept terms of services and Privacy Policy More details">
                                    <label for="check">Rememberd me </label>

                                </div>
                                 <div class="forgot">
                                  <a href=""> If forgot password?</a>
                                  </div>
                                <div class="Button">
                                    <Button type="Button"> Sign In </Button>
                                </div>
                            </form>
                        </div>
                        <div class="others-signup">
                            <p id="others-signup1">
                                Not a member yet? Get Sign Up Now ID.
                                <a href="signup.php"> <Button type="Button" class="btn"> Sign Up </Button></a>
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



