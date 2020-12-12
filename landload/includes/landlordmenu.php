<?php
if(!isset($_SESSION['login'])){
    header("location:../");
}
$sql = "select * from advertisements";

$run = mysqli_query($con,$sql);
?>

   <div class="header">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-4">
   				<div class="head">
   					<a href="Home.php">
   						<h2>BASHACHAI.COM</h2>
   						<!-----#Logo(300*70)------>
   					</a>
   				</div>
   				<!----#End Logo---->

   				<!------#registation-menu--------->
   			</div>
   			<div class="col-md-4">
   				<div class="search-bar">
   					<div class="input-group md-form form-sm form-2 pl-0">
   						<input class="form-control my-0 py-1 red-border" type="text" placeholder="Search your home location---" aria-label="Search">
   						<div class="input-group-append">
   							<span class="input-group-text black lighten-3" id="basic-text1"><i class="fas fa-search text-danger" aria-hidden="true"></i></span>
   						</div>
   					</div>
   				</div>
   			</div>
   			<!-----#End Search-bar---- -->


   			<div class="col-md-4">
   				<div class="registation-menu">
   					<ul>
                      <li><a href="chat/chat.php"><i class="fab fa-facebook-messenger"></i> Chats</a></li>
   					

   						<li class="nav-item dropdown no-arrow">
   							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   								<img class="img-fluid" src="../image/boy.png" alt="">
   							</a>
   							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
   								<!-- <a class="dropdown-item" href="../Profile/landlordphoto.php">Update Photo</a> -->
   								<a class="dropdown-item" href="../Profile/manageads.php">Manage Ads</a>
   								<!-- <a class="dropdown-item" href="../Profile/landlordprofile.php">Update Profile</a> -->
   								<!-- <a class="dropdown-item" href="../Profile/landlordpassword.php">Change Password</a> -->
   								<div class="dropdown-divider"></div>
   								<a class="dropdown-item" href="../logout.php" >Logout</a>
   							</div>
   						</li>


   					</ul>
   				</div>
   			</div>
   			<!------#registation-menu--------->
   		</div>

   	</div>
   </div>
   <!-----------#End Header Section-------->



   <div class="Menu-section">
   	<div class="container">
   		<div class="row">
   			<div class="menu-area">
   				<ul>
   					<li><a href="../Home.php"><i class="fas fa-home"></i>Home</a></li>
   					<li><a href="../about-us.php">About Us</a></li>
   					<li><a href=""><i class="fas fa-search"></i> Categories</a>

   						<ul>
   							<li><a href="">Family</a></li>
   							<li><a href="">Bachelor</a></li>
   							<li><a href="">Men's Hostel</a></li>
   							<li><a href="">Woman's Hostel</a></li>
   							<li><a href="">Office</a></li>
   							<li><a href="">Sub-Let</a></li>
   							<li><a href="">Vehicle garage</a></li>
   							<li><a href="">Property Sell-Flat</a></li>
   							<li><a href="">Property Sell-Land</a></li>


   						</ul>
   					</li>

   					<!-- <li><a href="">Home Decor</a></li> -->
   					<li><a href="">Tips & Advice</a>

   						<ul>
   							<li><a href="../ask-us.php">Ask Us</a></li>
   							<li><a href="../neigbour.php">Guides</a></li>
   							<li><a href="../tipsite.php">How To Rent</a></li>
   						</ul>

   					</li>
   					<li id="To-Let"><a class="dropdown-item active" href="../adpost.php"> Get To-Let</a></li>
   					<li><a href="../bloghome.php"> Blog</a></li>
   					<li><a href="../contact-us.php">Contact</a></li>

   				</ul>
   			</div>
   		</div>
   		<div class="mobile-menu">
   			<i class="fas fa-bars"></i>
   		</div>
   	</div>
   </div>



   <style>
   	.adpost {
   		padding: 100px;
		background: rgba(237, 228, 228, 0.44);
   	}

   	.adpost h1 {
   		background: rgba(16, 169, 223, 0.88);
   		color: wheat;
   		text-align: center;
   		margin: 25px 15px;
   		padding: 15px;
   		text-transform: uppercase;
   	}

   	.adpost ul {
   		margin: 15px 15px;
   		font-size: 22px;
   		text-transform: uppercase;

   	}

   	.adpost li {
   		list-style: none;

   	}

   	.header .img-fluid {
   		height: 40px;
   		width: 40px;
   		border-radius: 50%;
   	}

   	.header .fa-envelope {
   		position: relative;
   		left: 10px;
   	}
	   .header .fa-bell{
		   
		   position: relative;
   		left: 11px;
	   }
	   .header .img-fluid{
		      position: relative;
   		left: 10px;
	   }
   </style>