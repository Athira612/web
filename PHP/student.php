<?php
$servername = "localhost";
$username = "20mca018";
$password = "2424";
$dbname = "20mca018";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE student (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
branch VARCHAR(30) NOT NULL,
mark INT(50) )";

if (mysqli_query($conn,$sql)) {
  echo "Table STUDENT created successfully";
} else {
  echo "Error creating table: " .mysqli_error($conn);
}

$sql = "INSERT INTO student
VALUES ('1', 'doe', 'mca', '95')";
$sql = "INSERT INTO student 
VALUES ('2', 'John','mca', '85' );";
$sql .= "INSERT INTO student
VALUES ('3', 'Mary', 'mca', '80');";
$sql .= "INSERT INTO student
VALUES ('4', 'Julie', 'mca', '83')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
