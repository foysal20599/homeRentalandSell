<?php
if( isset($_POST['submit1'])){
  $title = $_POST['title'];
    $con = mysqli_connect('localhost', 'root', '', 'class_blog');
   $sql = "INSERT INTO category(title) values ('$title')";
  mysqli_query($con, $sql);
    header("Location: Categories.php?msg=Add Successfully");
}
 



   include('includes/header.php');  
   ?>

    <?php include('includes/navbar.php'); 
 ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('includes/sidebar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- Icon Cards-->
        <div class="row">
            
          <div class="col-md-8 offset-md-2">
         <center><h1 class="page-header"> Add Categories</h1></center> 
          
          <hr>
          <a class="btn btn-primary btn-sm" href="Categories.php">Back</a>
                
          <br>
          <br>
          <div class="row">
          <div class="col-md-6">
            <form action="" Method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" class="form-control" id="title" name="title">
                </div>
                <button type="submit" name="submit1" class="btn btn-success">Submit</button>
            </form>    
             
          </div>
          </div>
          </div>
        </div>

    


      </div>
      <!-- /.container-fluid -->

   

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
      

     
