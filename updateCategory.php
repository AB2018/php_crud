<?php

include 'connection.php';

$ID = $_GET['ID'];
echo $ID;
$categoryName = $_POST['categoryName'];

$sql = "UPDATE categories SET Category_Name = $categoryName,Updated_Date = NOW() WHERE ID = $ID ";

$result = mysqli_query($conn, $sql);
if ($result) { 
   header('location:MainCategory.php');
            }

?>