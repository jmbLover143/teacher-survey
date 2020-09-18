<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$localserver = "localhost";
$localuser = "root";
$localpass = "";
$dbname = "survey";

$conn = mysqli_connect($localserver, $localuser, $localpass, $dbname);



if(!$conn){
    echo "Opps, error.!!";
}else{
 
}
        


?>