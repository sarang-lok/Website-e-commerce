<?php
include("../partials/connect.php");

$name=$_POST['name'];
$nursery_name=$_POST['nursery_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if ($password==$password2) {
	$sql="INSERT INTO sellers(name,nursery_name,username,mobile,address,pin,password) VALUES('$name','$nursery_name','$email','$mobile','$address','$pin','$password')";
	$connect->query($sql);
	echo "<script> alert('You are registered');
			window.location.href='../sellerform.php';
			</script>";
}else{  
	echo "<script> alert('Password did not match');
			window.location.href='../sellerform.php';
			</script>";
}

?>