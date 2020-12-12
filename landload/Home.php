<?php 
include("includes/header.php");
$connect = mysqli_connect("localhost", "root", "", "hms");
$DIVISION = '';
$query = "SELECT DIVISION FROM country_state_city GROUP BY DIVISION ORDER BY DIVISION ASC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $DIVISION .= '<option value="'.$row["DIVISION"].'">'.$row["DIVISION"].'</option>';
}
?>

<body>

    <div class="warpper">

        <?php include("includes/menu.php") ?>
        <!-- ------#End Menu-area----- -->

        <div class="banner hero-section">


            <!--  ---------#End secrch-section----- -->
            <div class="secrch-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <h1>
                                ... Home is not a place <i class="fas fa-home"></i> It's a feeling ...
                            </h1>
                            <div class="searchBox">
                                <form action="" method="post">


                                    <select class="search" id="CATEGORY" name="CATEGORY" id="">
                                        <option value="0">
                                            Select Category
                                        </option>
                                        <option >
                                            Family
                                        </option>
                                        <option >
                                            Bachelor
                                        </option>
                                        <option >
                                            Men hostel
                                        </option>
                                        <option >
                                            Woman hostel
                                        </option>
                                        <option >
                                            Office
                                        </option>
                                        <option >
                                            Sub-let
                                        </option>
                                        <option >
                                            vehicle garage
                                        </option>
                                        <option >
                                            Property sell-flat
                                        </option>
                                        <option >
                                            Property sell-land
                                        </option>
                                        
                                    </select>
                                    <label for="category" id="categoryErrMgs" class="col-form-label text-danger pull-right"></label>

                                    
<!--
                                    <select name="CATEGORY" id="CATEGORY" class="search action">
                                        <option value="">Select Category </option>
                                    </select>
-->
                                    <select name="DIVISION" id="DIVISION" class="search action">
                                        <option value="0">Select Division</option>
                                        <?php echo $DIVISION; ?>
                                    </select>

                                    <select name="DISTRICT" id="DISTRICT" class="search action">
                                        <option value="0">Select District</option>
                                    </select>
                                    <select name="AREA" id="AREA" class="search">
                                        <option value="0">Select area</option>
                                    </select>
                                    <button type="submit" id="btnSearch" class="btn-outline-warning" name="search">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("includes/slider.php") ?>

        </div><!-- -----#End Banner Section------ -->

        <div class="Home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <h4 class="page-header"><B>A Home You Can be Proud Of</B></h4>
                            <h5>Disover a palace you love to line in.
                                We're talking a modern styled space,comfort and a place you're proud to call home..</h5>
                        </center>
                    </div>

                </div>
            </div>
        </div> <!-- --#end Home section-- -->
        <div class="container">
            <hr>
        </div>

        <!-- Feature Row start -->

        <div class="Feature-Row">
            <div class="container">
                <div class="row">

                      <?php

                      if(isset($_POST['search']))
                      {

                      $category=$_POST['CATEGORY'];
                      $division=$_POST['DIVISION'];
                      $district=$_POST['DISTRICT'];
                      $area=$_POST['AREA'];

                      $sql="SELECT advertisements.`AD_NO`, advertisements.`AD_CATEGORY`, advertisements.`BEDS`, advertisements.`RENT_AMOUNT`, advertisements.`ADDRESS`, advertisement_images.`AD_IMAGE_MIN` FROM `advertisements`LEFT JOIN advertisement_images ON advertisements.`AD_NO`=advertisement_images.`AD_NO` WHERE advertisements.`ACTIVE` = 1 AND (advertisements.`AD_CATEGORY` ='".$category."' AND advertisements.`DIVITION` ='".$division."' AND advertisements.`DISTRICT`='".$district."' AND advertisements.`AREA`='".$area."')";


                      }
                      else
                      {

                        
                        if(isset($_GET['ctg'])){
                            $category=$_GET['ctg'];
                        $sql = "SELECT advertisements.`AD_NO`, advertisements.`AD_CATEGORY`, advertisements.`BEDS`, advertisements.`RENT_AMOUNT`, advertisements.`ADDRESS`, advertisement_images.`AD_IMAGE_MIN` FROM `advertisements`LEFT JOIN advertisement_images ON advertisements.`AD_NO`=advertisement_images.`AD_NO` WHERE advertisements.`ACTIVE` = 1 AND advertisements.`AD_CATEGORY` ='".$category."'";
                        
                        }
                        elseif (isset($_POST['searchlocation'])) {
                            $searchkey=trim($_POST['searchkey']);
                            if($searchkey!="")
                            {
                            
                            
                             $sql = "SELECT advertisements.`AD_NO`, advertisements.`AD_CATEGORY`, advertisements.`BEDS`, advertisements.`RENT_AMOUNT`, advertisements.`ADDRESS`, advertisement_images.`AD_IMAGE_MIN` FROM `advertisements`LEFT JOIN advertisement_images ON advertisements.`AD_NO`=advertisement_images.`AD_NO` WHERE advertisements.`ACTIVE` = 1 AND (advertisements.`DIVITION` like '%".$searchkey."%' OR advertisements.`DISTRICT` like '%".$searchkey."%' OR advertisements.`AREA` like '%".$searchkey."%')";
                             
                             }
                             else
                             {
                             $sql = "SELECT advertisements.`AD_NO`, advertisements.`AD_CATEGORY`, advertisements.`BEDS`, advertisements.`RENT_AMOUNT`, advertisements.`ADDRESS`, advertisement_images.`AD_IMAGE_MIN` FROM `advertisements`LEFT JOIN advertisement_images ON advertisements.`AD_NO`=advertisement_images.`AD_NO` WHERE advertisements.`ACTIVE` = 1"; 
                             }

                                }
                        else
                        {
                        $sql = "SELECT advertisements.`AD_NO`, advertisements.`AD_CATEGORY`, advertisements.`BEDS`, advertisements.`RENT_AMOUNT`, advertisements.`ADDRESS`, advertisement_images.`AD_IMAGE_MIN` FROM `advertisements`LEFT JOIN advertisement_images ON advertisements.`AD_NO`=advertisement_images.`AD_NO` WHERE advertisements.`ACTIVE` = 1";  
                        }


                      }

                        
                      //echo $sql;

                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query)):
                    ?>




                    <div class="col-md-3">
                        <div class="card">

                          <div class="single-image">
                                <img class="img-fluid image_min" src="image/uploads/<?=$row['AD_IMAGE_MIN']?>" alt="">

                                <h4>

                                    <center><a class="btn btn1" href="../viewdetail/viewdetail-family.php?id=<?=$row['AD_NO']?>">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li class="list-inline-item"> Category : <?=$row['AD_CATEGORY']?></li>
                                        <li>Room : <?=$row['BEDS']?> </li>
                                        <li> Rent : <?=$row['RENT_AMOUNT']?></li>
                                        <li>Address : <?=$row['ADDRESS']?></li>
                                    </ul>
                                </h6>
                                
                            </div>
                        </div>
                    </div>
                     <?php endwhile;

                       if(mysqli_num_rows($query)<=0)
                       {
                        echo "No result Found";
                       }

                       ?>



                   <!--  <div class="col-md-3">
                        <div class="card">
                            <div class="single-image">
                                <img class="img-fluid" src="image/r13.jpg" alt="">
                                <h4>
                                    <center><a class="btn" href="viewdetail/viewdetail-bachelor.php">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li> <b>Category :</b> Bachelor</li>
                                        <li>Room : 2 </li>
                                        <li> Rent : 5500 BDT Per month</li>
                                        <li>Address : Rampura</li>
                                    </ul>
                                </h6>
                                
                            </div>
                        </div>
                    </div> -->

                   <!--  <div class="col-md-3">
                        <div class="card">
                            <div class="single-image">
                                <img class="img-fluid" src="image/r13.jpg" alt="">
                                <h4>
                                    <center><a class="btn" href="viewdetail/viewdetail-mans-hostel.php">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li> <b>Category :</b> Men's Hostel</li>
                                        <li>Seat : 2 </li>
                                        <li> Rent : 5500 BDT Per month</li>
                                        <li>Address : Rampura</li>
                                    </ul>
                                </h6>
                                
                            </div>
                        </div>
                    </div> -->
<!-- 
                    <div class="col-md-3">
                        <div class="card">
                            <div class="single-image">
                                <img class="img-fluid" src="image/r13.jpg" alt="">
                                <h4>
                                    <center><a class="btn" href="viewdetail/viewdetail-women-hostel.php">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li> <b>Category :</b> Women's Hostel</li>
                                        <li>Seat : 2 </li>
                                        <li> Rent : 5500 BDT Per month</li>
                                        <li>Address : Rampura</li>
                                    </ul>
                                </h6>
                                
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-md-3">
                        <div class="card">
                            <div class="single-image">
                                <img class="img-fluid" src="image/r13.jpg" alt="">
                                <h4>
                                    <center><a class="btn" href="viewdetail/viewdetail-sub-let.php">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li> Category : Sub-Let</li>
                                        <li>Room : 2 </li>
                                        <li> Rent : 5500 BDT Per month</li>
                                        <li>Address : Rampura</li>
                                    </ul>
                                </h6>
                                
                            </div>
                        </div>
                    </div> -->

                   <!--  <div class="col-md-3">
                        <div class="card">
                            <div class="single-image">
                                <img class="img-fluid" src="image/r13.jpg" alt="">
                                <h4>
                                    <center><a class="btn" href="viewdetail/viewdetail-property-sell-flat.php">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li> <b>Category :</b> Property Sell For Flat</li>
                                        <li> Rent : 10,203150 BDT </li>
                                        <li>Address : Rampura</li>
                                    </ul>
                                </h6>
                                
                            </div>
                        </div>
                    </div> -->

                   <!--  <div class="col-md-3">
                        <div class="card">
                            <div class="single-image">
                                <img class="img-fluid" src="image/r13.jpg" alt="">
                                <h4>
                                    <center><a class="btn" href="viewdetail/viewdetail-property-sell-land.php">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li> <b>Category :</b> Property Sell For Land</li>
                                        <li> Price : 2000000 BDT </li>
                                        <li>Address : Rampura</li>
                                    </ul>
                                </h6>
                                ----<a class="btn" href="">view details</a>---
                            </div>
                        </div>
                    </div -->

                    <!-- <div class="col-md-3">
                        <div class="card">
                            <div class="single-image">
                                <img class="img-fluid" src="image/r13.jpg" alt="">
                                <h4>
                                    <center><a class="btn" href="viewdetail/viewdetail-vihicle-garage.php">View details</a></center>
                                </h4>
                                <h6>
                                    <ul>
                                        <li> <b>Category :</b> Vehicle Garage </li>
                                        <li>Size (Square Feet): 2200 </li>
                                        <li> Rent : 5500 BDT Per month</li>
                                        <li>Address : Rampura</li>
                                    </ul>
                                </h6>
                                ----<a class="btn" href="">view details</a>----
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="button">
                        <h4>
                            <a class="btn" href="">More Result</a>
                        </h4>
                    </div> -->
                </div>
            </div>
        </div> <!-- ---End Feature row--- -->

        <!-- <div class="our-pagination">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item our-disable">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div> --><!-- #End our-pagination -->


        <?php include("includes/media_bar.php") ?>
        <!-- #End social-media-bar -->

        <!-- #Contact Us -->

        



        <?php include("includes/google_map.php") ?>
        <!-- #End-google-map -->



        <?php include("includes/get_post.php") ?>
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
    <style >
        .secrch-section .search {
         color:#ffc107;

    }
        
    .image_min{
            height: 258px;
            width: 255px;
        }
        .btn1{
            margin: 4px;
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
     $("#btnSearch").on("click", function() {
             var is_invalid = 0;
                $(".is-invalid").each(function() {
                    is_invalid = 1;
                });
                var CATEGORY = $("#CATEGORY").val().trim();
                if (CATEGORY == "0") {
                    $("#categoryErrMgs").text("Required!");
                    $("#categoryErrMgs").show();
                    $("#categoryErrMgs").focus();
                    return false;
                } else if ($("#CATEGORY").hasClass("is-invalid")) {
                    return false;
                } else {
                    $("#categoryErrMgs").text("");
                    $("#categoryErrMgs").hide();
                }
         
         
     });
});
</script>