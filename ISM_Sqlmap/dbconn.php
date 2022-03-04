<?php
$conn = new mysqli('localhost','root','','ism');
if ($conn->connect_error) {
die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
else{
echo("Connected!");
}
?>