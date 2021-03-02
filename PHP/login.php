<html>
<head>
<title>Login</title>
</head>
<body>
<?php

if ($_POST["username"] == "php" && $_POST["password"] == "php") {

 session_start();
 $_SESSION["Login"] = "YES";
 echo "<h1>You are now logged correctly in</h1>";
 echo "<p><a href='document.php'>Link to protected file</a><p/>";
}
else {

 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You are NOT logged correctly in </h1>";
 echo "<p><a href='document.php'>Link to protected file</a></p>";
}
?>
</body>
</html>