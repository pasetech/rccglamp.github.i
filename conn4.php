<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "love";

// Create connection
$conn = new mysqli('localhost', 'root', '','love');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$first_name = isset($_POST['fname'])? $_POST['fname']:"";
$surname = isset($_POST['surname'])? $_POST['surname']:"";
$email = isset($_POST['email'])? $_POST['email']:"";
$dob = isset($_POST['dob'])? $_POST['dob']:"";
$tel = isset($_POST['tel'])? $_POST['tel']:"";
$house = isset($_POST['house'])? $_POST['house']:"";


$sql = "INSERT INTO new_members(fname,surname,email,dob,tel,house)
       VALUES('$first_name','$surname','$email','$dob','$tel','$house')";
// if(!mysqli_query($conn,$sql)) {
// 	die("Connection failed: " . mysqli_connect_error());
//  }
//  else {
//  	echo "added successfully";
       if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
 header("refresh:0;url=welcome.html")
?>