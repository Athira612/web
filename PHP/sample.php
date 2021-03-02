<html>
<body>
<?php 
$servername = "localhost";
$username = "20mca018";
$password = "2424";
$dbname = "20mca018";

$mysqli = new mysqli("localhost", $username, $password, $dbname); 
$query = "SELECT * FROM student";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">name</font> </td> 
          <td> <font face="Arial">branch</font> </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $branch = $row["branch"];
        

        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$name.'</td> 
                  <td>'.$branch.'</td> 
                 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>