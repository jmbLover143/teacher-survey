<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("dbconfig.php");

$id = $_POST['id'];
$images = $_POST['images'];
$name = $_POST['name'];
 
$g1= $_POST['g1'];
$g2 = $_POST['g2'];
$g3 = $_POST['g3'];
$g4 = $_POST['g4'];
$g5 = $_POST['g5'];
$g6 = $_POST['g6'];
$g7 = $_POST['g7'];
$g8 = $_POST['g8'];
$g9 = $_POST['g9'];
$g10 = $_POST['g10'];

$g11 = $_POST['g11'];
$g12 = $_POST['g12'];
$g13 = $_POST['g13'];
$g14 = $_POST['g14'];
$g15 = $_POST['g15'];
$g16 = $_POST['g16'];
$g17 = $_POST['g17'];
$g18 = $_POST['g18'];
$g19 = $_POST['g19'];
$g20 = $_POST['g20'];

$g21 = $_POST['g21'];
$g22 = $_POST['g22'];
$g23 = $_POST['g23'];
$g24 = $_POST['g24'];
$g25 = $_POST['g25'];
$g26 = $_POST['g26'];
$g27 = $_POST['g27'];
$g28 = $_POST['g28'];
$g29 = $_POST['g29'];
$g30 = $_POST['g30'];

$comment = $_POST['comm'];

$total = $g1 + $g2 + $g3 + $g4 + $g5 + $g6 + $g7 + $g8 + $g9 + $g10 + $g11 + $g12 + $g13 + $g14 + $g15 + $g16 + $g17 + $g18 + $g19 + $g20  + $g21 + $g22 + $g23 + $g24 + $g25 + $g26 + $g27 + $g28 + $g29 + $g30;
 
$ave = $total / 150;
$totalAve = $ave * 100;

echo "$total<br/>";
 
echo "$totalAve %</br>";

echo "$id<br/>";
echo "$images<br/>";
echo "$name<br/>";
echo "$comment<br/>";

$sql = "INSERT INTO rate(id,name,images,total,av,com) VALUES ('$id','$name','$images','$total','$totalAve','$comment')";
$result = mysqli_query($conn, $sql);

if(!$result){
    echo "NEGATIVE.!!";
}else{
    header("Location:success.php");
}


?>