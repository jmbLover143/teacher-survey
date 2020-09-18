<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("dbconfig.php");



$n = $_POST['n'];
$subject =$_POST['subject'];
$dept = $_POST['dept'];
$date = $_POST['date'];
$time = $_POST['time'];
 
$room = $_POST['room'];
$id = $_POST['id'];
$file = $_POST['fil'];
$name = $_FILES['fil']['name'];
 
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

echo "$name</br>";
echo "$subject</br>";
echo "$dept</br>";
echo "$date</br>";
echo "$time</br>";
echo "$room</br>"; 
echo "$file</br>";

 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

if(empty($n) || empty($date) || empty($time) || empty($subject) || empty($dept) || empty($room) || empty($name)){
 
       
}else{
 // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
  
   // Check extension
  if( in_array($imageFileType,$extensions_arr) ){       


$sql = "UPDATE teacher SET name='$n',subject='$subject',dept='$dept',date='$date',time='$time',room='$room',images='$name' Where id = '$id'";
$result = mysqli_query($conn, $sql);


if(!$conn){
    echo "FAILED";
}else{
     header("Location: faculty.php");
}

  }
}
?>
