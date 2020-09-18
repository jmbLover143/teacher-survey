 <?php 
 
 session_start();
 include("dbconfig.php");
 $id = $_POST['id'];
 echo "$id";
 
 $sql = "DELETE from rate Where id = '$id'";
 $res = mysqli_query($conn, $sql);
 
 if(!$res){
     echo "Sorry not deleted";
 }else{
     header("Location:results.php");
 }
 ?>