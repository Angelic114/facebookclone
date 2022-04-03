<?php
$con = mysqli_connect('localhost','root','','fb');
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query($con,"SELECT * FROM userdetails WHERE phoneoremail = '$phoneoremail'");
$check = mysqli_num_rows($check_data);

if($check > 0){
header("Location:http://localhost/FacebookClone");
}else{
$input = mysqli_query($con,"INSERT INTO userdetails (id,firstname,lastname,phoneoremail,password)VALUES('$id','$firstname','$lastname','$phoneoremail','$password')");
if($input){
header("Location:http://localhost/FacebookClone/mainpage.html");
}
}

?>