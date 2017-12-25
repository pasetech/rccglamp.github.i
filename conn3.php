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

$first_name = isset($_POST['fname'])? $_POST['fname']:"";
$surname = isset($_POST['surname'])? $_POST['surname']:"";
$email = isset($_POST['email'])? $_POST['email']:"";
$dob = isset($_POST['dob'])? $_POST['dob']:"";
$tel = isset($_POST['tel'])? $_POST['tel']:"";
$house = isset($_POST['house'])? $_POST['house']:"";
$gender = isset($_POST['gender'])? $_POST['gender']:"";
$department = isset($_POST['department'])? $_POST['department']:"";
$occupation = isset($_POST['occupation'])? $_POST['occupation']:"";

$sql = "INSERT INTO workers(fname,surname,email,dob,tel,house,gender,occupation,department)
       VALUES('$first_name','$surname','$email','$dob','$tel','$house','$gender','$occupation','$department')";
if(!mysqli_query($conn,$sql)) {
 	echo "Connection failed".mysqli_error($conn);
  }

 else {
  	echo "Your Information Has Been Added Successfully";
}

 header("refresh:30;url=welcome.html");
?>