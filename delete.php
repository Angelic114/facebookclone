<?php
    $con = mysqli_connect('localhost','root','','fb');
    $phoneoremail = $_POST['phoneoremail'];

    $check_data = mysqli_query($con,"DELETE userdetails WHERE phoneoremail = '$phoneoremail'");


    if($check > 0){
        header("Location:http://localhost/FacebookClone/mainpage.html");
    }

?>