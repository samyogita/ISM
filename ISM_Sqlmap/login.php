<?php
include('dbconn.php');
$username = $_GET["username"];
$password = $_GET["password"];
$purchase = $_GET["purchase"];
$sql = "SELECT username FROM users WHERE username = '" + username + "'and password = '" + password + "'";
$conn->query($sql);
echo "Hello user";
?>
