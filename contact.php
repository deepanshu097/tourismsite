<?php
$con = mysqli_connect('localhost','root');
 
if($con){
    echo "connection connected";
}
else{
    echo "connection failed";
}
mysqli_select_db($con,'webapp');

$name = $_POST['name'];
$email=$_POST['email'];
$phone =$_POST['phone'];
$message=$_POST['message'];

$query = "insert into users(name,email,phone,message) values('$name','$email','$phone','$message' )";
mysqli_query($con,$query);
header('location:success.php');
?>