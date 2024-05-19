<?php
require 'configs.php';

if(isset($_POST["submit"])){
  $pay = $_POST["pay"];
  $username = $_POST["username"];
  $card = $_POST["card"];
  $num = $_POST["num"];
  $exp = $_POST["exp"];
  $cvv = $_POST["cvv"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $quick = $_POST["quick"];
  
  $query = "INSERT INTO sub VALUES('$pay', '$username', '$card', '$num', '$exp','$cvv','$fname', '$lname', '$quick')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Welcome....join with us a part of Healthy Feast'); </script>
  ";
}
?>
