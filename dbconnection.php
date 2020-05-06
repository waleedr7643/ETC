<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Final Year Project</title>
<link rel="shortcut icon" type="image/png" href="images/Naizm.png">
</head>
<body>

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{   
	}
//echo "Connected successfully";
mysql_query("set character_set_results='utf8'"); 
?>
</body>
</html>