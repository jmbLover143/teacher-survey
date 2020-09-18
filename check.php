<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include("dbconfig.php");

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

echo "$name</br>";
echo "$username</br>";
echo "$password</br>";

if($name == "STUDENT"){
    $sql = "SELECT * from studentaccounts Where username = '$username' AND password ='$password'";
    $result = mysqli_query($conn, $sql);    
    $found = 0;
    while (mysqli_fetch_array($result)) {
        $found = 1;
    }
    if($found == 1){
        $_SESSION['username'] = $_POST['username'];
        header("Location:select-teacher.php");
    }else{
        header("Location:index-error.php");
     }
}else if($name == "TEACHER"){
      $sl = "SELECT * from teacheraccounts Where username = '$username' AND password ='$password'";
    $rest = mysqli_query($conn, $sl);    
    $foun = 0;
    while (mysqli_fetch_array($rest)) {
        $foun = 1;
    }
    if($foun == 1){
        $_SESSION['username'] = $_POST['username'];
        header("Location:teacher.php");
    }else{
        header("Location:index-error.php");
     }
}else if($name == "ADMIN"){
    $s = "SELECT * from admin Where username = '$username' AND password ='$password'";
    $r = mysqli_query($conn, $s);    
    $f = 0;
    while (mysqli_fetch_array($r)) {
        $f = 1;
    }
    if($f == 1){
        $_SESSION['username'] = $_POST['username'];
        header("Location:add-teacher.php");
    }else{
        header("Location:index-error.php");
     }
}


?>