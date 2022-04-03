<?php
    $con = mysqli_connect('localhost','root','','fb');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"UPDATE userdetails SET password = '$password' WHERE phoneoremail = '$phoneoremail'");


    if($check > 0){
        header("Location:http://localhost/FacebookClone/mainpage.html");
    }

?>