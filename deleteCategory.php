<?php

include 'connection.php';

$ID = $_GET['ID'];

$sql = "DELETE FROM categories WHERE ID = $ID";

$result = mysqli_query($conn, $sql);
if ($result) { 
   header('location:MainCategory.php');
            }
if($_POST['type']==2){
               $id=$_POST['id'];
               $sql = "DELETE FROM categories WHERE ID in ($id)";
             $result = mysqli_query($conn, $sql);
            }
           if ($result) { 
             header('location:MainCategory.php');
                      }

?>