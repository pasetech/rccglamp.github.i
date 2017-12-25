<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "rccg";

// Create connection
$conn = new mysqli('localhost', 'root', '','rccg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo 

$name = isset($_POST['name'])? $_POST['name']:"";
$surname = isset($_POST['surname'])? $_POST['surname']:"";
$email = isset($_POST['email'])? $_POST['email']:"";
$marital_status = isset($_POST['marital_status'])? $_POST['marital_status']:"";
$dob = isset($_POST['dob'])? $_POST['dob']:"";
$phone = isset($_POST['phone'])? $_POST['phone']:"";
$address = isset($_POST['address'])? $_POST['address']:"";
$occupation = isset($_POST['occupation'])? $_POST['occupation']:"";
$title = isset($_POST['title'])? $_POST['title']:"";
$designation = isset($_POST['designation'])? $_POST['designation']:"";
 

$sql = "INSERT INTO ministers(name,surname,email,marital_status,dob,phone,address,occupation,title,designation)
       VALUES('$name','$surname','$email','$marital_status','$dob','$phone','$address','$occupation','$title','$designation')";
 if(!mysqli_query($conn,$sql)) {
 	echo "Connection failed".mysqli_error($conn);
  }

 else {
  	echo "Your Information Has Been Added Successfully";
}

 header("refresh:30;url=welcome.html");
?>