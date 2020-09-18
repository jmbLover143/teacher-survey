<?php

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$subject = $_POST['subject'];
$dept = $_POST['dept'];
$room = $_POST['room'];
 
echo "$name </br>";
echo "$date </br>";
echo "$time </br>";
echo "$subject </br>";
echo "$dept </br>";
echo "$room </br>";
 
if(empty($name) || empty($date) || empty($time) || empty($subject) || empty($dept) || empty($room) ){
   
    header('Location:add-teacher-error.php');
    
}else{
    echo "hellow";
}
    
?>
