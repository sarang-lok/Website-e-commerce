<?php
include("../partials/connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if ($password==$password2) {
	$sql="INSERT INTO customers(name,username,mobile,address,pin,password) VALUES('$name','$email','$mobile','$address','$pin','$password')";
	$connect->query($sql);
	echo "<script> alert('You are registered');
			window.location.href='../customerforms.php';
			</script>";
}else{  
	echo "<script> alert('Password did not match');
			window.location.href='../customerforms.php';
			</script>";
}

?>