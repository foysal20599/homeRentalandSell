<?php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "hms");
 $output = '';
 if($_POST["action"] == "DIVISION")
 {
  $query = "SELECT DISTRICT FROM country_state_city WHERE DIVISION = '".$_POST["query"]."' GROUP BY DISTRICT";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select district</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["DISTRICT"].'">'.$row["DISTRICT"].'</option>';
  }
 }
 if($_POST["action"] == "DISTRICT")
 {
  $query = "SELECT AREA FROM country_state_city WHERE DISTRICT = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select area</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["AREA"].'">'.$row["AREA"].'</option>';
  }
 }
 echo $output;
}
?>

