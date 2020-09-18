<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include("dbconfig.php");

$id = $_REQUEST['id'];

echo "$id";


$sql = "DELETE from teacher WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if(!$result){
   echo "NEGATIVE";
}else{
    header("Location:faculty.php");
}

?>