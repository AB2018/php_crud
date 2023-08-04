<?php

include 'connection.php';


// if (isset($_GET['ID'])) {
//    $ID = $_GET['ID'];

  
// $sql = "DELETE FROM Products WHERE ID = $ID";
//    $result = mysqli_query($conn, $sql);
//    if ($result) {
//       header('location:MainProduct.php');
//    }
// }

if($_POST['type']==1){
   $id=$_POST['id'];
   $sql = "DELETE FROM Products WHERE ID in ($id)";
   $result = mysqli_query($conn, $sql);
   if ($result) {
            header('location:MainProduct.php');
         }
   mysqli_close($conn);
}
?>