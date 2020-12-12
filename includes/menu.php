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
                    <form action="Home.php" method="post">
                       <div class="input-group md-form form-sm form-2 pl-0">
                        
                           
                           <input type="text" name="searchkey" class="form-control " placeholder="Search your home location---" >

                           <div class="input-group-append">
                            <button type="submit" name="searchlocation"><span class="input-group-text black lighten-3" id="basic-text1"><i class="fas fa-search text-danger" aria-hidden="true"></i></span></button>
                               
                           </div>
                         </form>
                       </div>

                   </div>

               </div>
               <!-----#End Search-bar---- -->


               <div class="col-md-4">
                   <div class="registation-menu">
                       <ul>
                             

                           <li><a href="#"><i class="fas fa-user-plus"></i>Sign In</a>

                               <ul>
                                   <li><a href="lanloadsignin.php">LandLord</a></li>
                                   <li><a href="adminsignin.php">Admin</a></li>
                                 
                               </ul>
                           </li>
                           <li><a href="signup.php">Sign Up<i class="fas fa-sign-in-alt"></i></a></li>
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
                       <li><a href="Home.php"><i class="fas fa-home"></i>Home</a></li>
                       <li><a href="about-us.php">About Us</a></li>
                       <li><a href="#"><i class="fas fa-search"></i> Category</a>

                           <ul>
                               <li><a href="../HMS/Home.php?ctg=Family">Family</a></li>
                               <li><a href="../HMS/Home.php?ctg=Bachelor">Bachelor</a></li>
                               <li><a href="../HMS/Home.php?ctg=Men Hostel">Men's Hostel</a></li>
                               <li><a href="../HMS/Home.php?ctg=Woman hostel">Woman's Hostel</a></li>
                               <li><a href="../HMS/Home.php?ctg=Office">Office</a></li>
                               <li><a href="../HMS/Home.php?ctg=Sub-let">Sub-Let</a></li>
                                <li><a href="../HMS/Home.php?ctg=vehicle garage">Vehicle garage</a></li>
                               <li><a href="../HMS/Home.php?ctg=Property sell-flat">Property Sell-Flat</a></li>
                               <li><a href="../HMS/Home.php?ctg=Property sell-land">Property Sell-Land</a></li>
                           

                           </ul>
                       </li>

                       <li><a href="#">Home Decor</a></li>
                       <li><a href="">Tips & Advice</a>

                           <ul>
                               <!-- <li><a href="ask-us.php">Ask Us</a></li> -->
                               <li><a href="neigbour.php">Guides</a></li>
                               <li><a href="tipsite.php">How To Rent</a></li>
                           </ul>

                       </li>
                       <li id="To-Let"><a class="dropdown-item active" href="lanloadsignin.php"> Get To-Let</a></li>
                       <li><a href="bloghome.php"> Blog</a></li>
                       <li><a href="contact-us.php">Contact</a></li>

                   </ul>
               </div>
           </div>
           <div class="mobile-menu">
               <i class="fas fa-bars"></i>
           </div>
       </div>
   </div>
   <style>
     
     .Menu-section{
      z-index: 101;
     }
   </style>