<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("dbconfig.php");

$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$sql = "DELETE from studentaccounts Where username = '$user' AND password ='$pass'";
$result = mysqli_query($conn, $sql);

if(!$result){
    echo "Not deleted.!!";
}else{
    header("Location:stud-acc.php");
}



?>