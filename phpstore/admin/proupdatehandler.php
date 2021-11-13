<?php
include('partials/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];
	$newprice=$_POST['price'];
	$newdesc=$_POST['description'];
	$newcat=$_POST['category'];
	$newstock=$_POST['stock'];


    $file_name=$_FILES['file']['name'];
    $file_tmp=$_FILES['file']['tmp_name'];
    $target="products/".$file_name;

move_uploaded_file($file_tmp, $target);


$sql="UPDATE products SET name='$newname', price='$newprice', description='$newdesc', category_id='$newcat', stock='$newstock', picture='$target' where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: productsshow.php');
}


}
?> 