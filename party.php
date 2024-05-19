<?php
require 'config.php';

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  $guest = $_POST["guest"];

  $event = $_POST["event"];
  $events = "";
  foreach($event as $row){
    $events .= $row . ",";
  }

  $query = "INSERT INTO party VALUES('$username', '$email', '$phone', '$date', '$guest','$events')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Contact You Later.->For any queries contact us through email: Healthyfeast2024@gmail.com'); </script>
  ";
}
?>
