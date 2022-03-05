<?php
$jj='';
$pss='';
$username = $_POST["username"];
$password = $_POST["password"];
$purchase = $_POST["purchase"];
$conn = mysqli_connect("localhost", "root", "", "ism");
$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' and purchase = '$purchase'";
$result=mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
if($num>0)
{
while( $row=mysqli_fetch_assoc($result))
{
if($username==$row['username'] and $password==$row['password'] and $purchase==$row['purchase'])
echo "Hello", " ", $username,".";
echo "Your purchase is", " ", $purchase;
}
}
else{
    echo "Incorrect username or password";
    echo '<script>alert("Incorrect username or password")</script>';
} 

?>
