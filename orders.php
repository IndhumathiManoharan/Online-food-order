<?php
require 'confi.php';

if(isset($_POST["submit"])){
  $cook = $_POST["cook"];
  $dish1 = $_POST["dish1"];
  $qtn1 = $_POST["qtn1"];
  $dish2 = $_POST["dish2"];
  $qtn2 = $_POST["qtn2"];
  $dish3 = $_POST["dish3"];
  $qtn3 = $_POST["qtn3"];
  $dish4 = $_POST["dish4"];
  $qtn4 = $_POST["qtn4"];
  $dish5 = $_POST["dish5"];
  $qtn5 = $_POST["qtn5"];
  $username = $_POST["username"];
  $adds = $_POST["add"];
  $pin = $_POST["pin"];
  $cash = $_POST["cash"];

  $query = "INSERT INTO orders VALUES('$cook', '$dish1', '$qtn1', '$dish2', '$qtn2', '$dish3','$qtn3','$dish4', '$qtn4', '$dish5', '$qtn5','$username', '$adds', '$pin', '$cash')";
  mysqli_query($conn,$query);
  echo
  
   header("Location: cancel.html");
  
}
?>
