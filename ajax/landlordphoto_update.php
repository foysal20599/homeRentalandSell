      <?php
      $con = mysqli_connect("localhost","root","","hms");
      $q = mysqli_query($con,"SELECT * FROM users");
      while($row = mysqli_fetch_assoc($q)){
        echo $row['USER_NO'];
        if($row['AD_IMAGE_MIN'] == ""){
          echo "<img  src='pictures/default.jpg' alt='Default Profile Pic'>";
        } else {
          echo "<img  src='pictures/".$row['AD_IMAGE_MIN']."' alt='Profile Pic'>";
        }
        echo "<br>";
      }
    ?>