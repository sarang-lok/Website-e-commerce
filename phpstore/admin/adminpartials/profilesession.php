<?php
session_start();

if(!isset($_SESSION["id"])){
	header("location: sellerindex.php");
}
include('partials/connect.php');
?>
