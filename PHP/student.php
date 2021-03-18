<?php
$servername = "localhost";
$username = "20mca018";
$password = "2424";
$dbname = "20mca018";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$query = "CREATE TABLE student (
id INT (6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
branch VARCHAR(30) NOT NULL,
mark INT(50) )";

if (mysqli_query($conn,$query)) {
  echo "Table STUDENT created successfully";
} else {
  echo "Error creating table: " .mysqli_error($conn);
}

$query = "INSERT INTO student
VALUES ( '1', 'doe', 'mca', '95');";
$query = "INSERT INTO student 
VALUES ( '2','John','mca', '85' );";
$query = "INSERT INTO student
VALUES ( '3','Mary', 'mca', '80');";
$query = "INSERT INTO student
VALUES ( '4', 'Julie', 'mca', '83');";
$query = "INSERT INTO student
VALUES ( '5', 'anju', 'mca', '83');";
$query = "INSERT INTO student
VALUES ( '6', 'Arjun', 'mca', '93');";
$query = "INSERT INTO student
VALUES ( '7', 'dona', 'mca', '90');";


if (mysqli_multi_query($conn, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
