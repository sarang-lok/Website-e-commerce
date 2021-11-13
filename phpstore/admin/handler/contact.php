<?php

    include("../partials/connect.php");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];

$sql="INSERT INTO contact(name,email,subject,msg) VALUES('$name','$email','$subject','$msg')";

$connect->query($sql);

header('location: ../index.php');
?>