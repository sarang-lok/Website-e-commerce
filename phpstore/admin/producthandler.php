<?php
include("partials/connect.php");
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];
$stock=$_POST['stock'];


$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$target="products/".$file_name;


move_uploaded_file($file_tmp, $target);







$sql="INSERT INTO products(name,price,picture,description,category_id,stock) VALUES('$name','$price','$target','$description','$category','$stock')";

$connect->query($sql);

header('location: productsshow.php');
?>