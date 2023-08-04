<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

include('connection.php');
    $query ="SELECT Category_Name FROM categories";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>