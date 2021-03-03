<html>
<head>
<title>display data in table format</title>
</head>
<body>
 <?php
 $servername = "localhost";
$username = "20mca018";
$password = "2424";
$dbname = "20mca018";
 $conn = mysql_connect("localhost", $username, $password, $dbname);
if(!$conn)
{
	die("not found:" .mysqli_connect_error());
}

$query = "CREATE TABLE customer(C_No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
C_Name varchar(30) not null,
Item_Purchased VARCHAR(30) NOT NULL,
Mob_no INT(10) )";

if (mysqli_query($conn,$sql)) {
	echo "table customer created successfully";
}
else {
	echo "Error creating table: " .mysqli_error($conn);
}

$query = "INSERT INTO customer
VALUES ('1', 'doe', 'headphone', '9552486210')";
$query = "INSERT INTO student 
VALUES ('2', 'John','mobile', '8548759568' );";
$query .= "INSERT INTO student
VALUES ('3', 'Mary', 'computer', '8015264875');";
$query .= "INSERT INTO student
VALUES ('4', 'Julie', 'mobile', '8352575951')";
$query .= "INSERT INTO student
VALUES ('5', 'anju', 'mobile', '8352575951')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$query = "SELECT * FROM customer";
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">C_No</font> </td> 
          <td> <font face="Arial">C_Name</font> </td> 
          <td> <font face="Arial">Item_Purchased</font> </td> 
		  <td> <font face="Arial">Mob_no</font> </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $C_No = $row["C_No"];
        $C_Name = $row["C_Name"];
        $Item_Purchased = $row["Item_Purchased"];
		$Mob_no = $row["Mob_no"];
        

        echo '<tr> 
                  <td>'.$C_No.'</td> 
                  <td>'.$C_Name.'</td> 
                  <td>'.$Item_Purchased.'</td> 
				  <td>'.$Mob_no.'</td> 
                 
              </tr>';
    }
    $result->free();
} 
 ?>
</body>
</html>