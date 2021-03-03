<?php 

	$servername = "localhost";
    $username = "20mca018";
    $password = "2424";
    $dbname = "20mca018"; 
	
	
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
}

	
$query = "CREATE TABLE studentinfo (
name VARCHAR(30) NOT NULL,
rollno INT(20) NOT NULL,
gender VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL )";

if (mysqli_query($conn,$query)) {
  echo "Table studentinfo created successfully<br>";
} else {
  echo "Error creating table: " .mysqli_error($conn);
}
  if(isset($_POST['submit']))
{
  $name = $_POST['txtname']; 
  $rollno = $_POST['txtr_no']; 
  $gender = $_POST['txtgen']; 
  $address = $_POST['add']; 
	$sql = "INSERT INTO student info (name, rollno, gender, address) 
VALUES ('{$name}', '{$rollno}', '{$gender}', '{$address}')"; 

if(mysqli_query($conn, $sql))
		{ 
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
		
		mysqli_close($conn); 
?> 