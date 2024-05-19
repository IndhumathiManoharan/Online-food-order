<?php

$username = $_POST['username'];
$password = $_POST['password'];
$conpass = $_POST['conpass'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if (!empty($username) || !empty($password) || !empty($conpass) || !empty($email) || !empty(phone))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signpage";

//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
	die('connect Error('.mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{
	
	$SELECT ="SELECT email From singin where email= ? Limit 1";
	$INSERT ="INSERT Into singin (username , password , conpass , email , phone) values(?,?,?,?,?)";

//prepare statement
     $stmt = $conn->prepare($SELECT);
	 $stmt->bind_param("s",$email);
	 $stmt->execute();
	 $stmt->bind_result($email);
	 $stmt->store_result();
	 $rnum = $stmt->num_rows;
	 
//checking username
 if($rnum==0){
 $stmt->close();
 $stmt = $conn->prepare($INSERT);
 $stmt->bind_param("ssssi",$username,$password,$conpass,$email,$phone);
 $stmt->execute();
  header("location: index.html");
 }
 else{
	 echo
	 "someone already signedin using this email";
 }
$stmt->close();
$conn->close();
}
}
else{
echo "All fields are required";
die();
}
?>	
