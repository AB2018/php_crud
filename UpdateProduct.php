<?php
	include('connection.php');
	$id=$_POST['id'];
	
	$productName = $_POST['ProductName'];
    $productPrice = $_POST['productPrice'];
    $productPhoto = $_POST['image'];
 
    $sql = "UPDATE Products set Product_Name ='$productName', Price = '$productPrice', Photo ='$productPhoto' where ID =$id";

$result = mysqli_query($conn, $sql);
if ($result) { 
   header('location:MainProduct.php');
            }

	
?>