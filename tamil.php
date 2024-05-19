<?php
require 'co.php';

if(isset($_POST["submit"])){
  $cook= $_POST["cook"];
  $dish1 = $_POST["dish1"];
  $qtn1 = $_POST["qtn1"];
  $username = $_POST["username"];
  $adds = $_POST["add"];
  $pin = $_POST["pin"];
  $cash = $_POST["cash"];
  
  $query = "INSERT INTO tamil VALUES('$cook', '$dish1', '$qtn1', '$username', '$add', '$pin','$cash')";
  mysqli_query($conn,$query);
  echo
  
  header("Location: cancel.html");
  
}
?>

