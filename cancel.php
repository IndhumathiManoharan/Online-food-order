<?php
require 'connect.php';

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $cancel = $_POST["cancel"];
  
  $query = "INSERT INTO can VALUES('$username', '$cancel')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Your order has been cancelled '); </script>
  ";
}
?>