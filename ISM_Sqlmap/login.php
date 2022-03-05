<?php
include('dbconn.php');
$username = $_POST["username"];
$password = $_POST["password"];
$purchase = $_POST["purchase"];
$sql = "SELECT username FROM users WHERE username = '" + username + "'and password = '" + password + "'";
$conn->query($sql);
echo "Hello user";
?>
