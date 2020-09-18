
<?php
session_start();
include ('dbconfig.php');

 if($_SESSION['username'] == ""){
    header("Location:index.php");
}else{
    
 

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $id = $_POST['id'];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
    
 $n = $_POST['fac'];
$date = $_POST['date'];
$time = $_POST['time'];
$subject = $_POST['subject'];
$dept = $_POST['dept'];
$room = $_POST['room'];

    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

if(empty($n) || empty($date) || empty($time) || empty($subject) || empty($dept) || empty($room) || empty($name)){
 
     header('Location:add-teacher-error.php');       
}else{
 // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
  
   // Check extension
  if( in_array($imageFileType,$extensions_arr) ){       
     $query = "INSERT INTO teacher(id,name,subject,dept,date,time,room,images) VALUES('$id','$n','$subject','$dept','$date','$time','$room','$name')";
     $result = mysqli_query($conn,$query);
  
     if(!$result){
         echo "WRONG.!!";
     }else{
          header("Location:faculty.php");
     }
     
     // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
      }
      
  
  }
}
}
 
?>
 
 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TEACHER BEHAVIOR INVENTORY</title>
    
    <link rel="shortcut icon" href="lib/img/aclc_logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="lib/css/material.indigo-blue.min.css">
    <script defer src="lib/js/material.min.js"></script>
    <link rel="stylesheet" href="lib/semantic/semantic.min.css">
    <!-- Bootstrap core CSS -->
    <link href="lib/css/compiled.min.css" rel="stylesheet">
    <script src="lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="lib/sweetalert2/sweetalert2.min.css">
    <script src="lib/js/jquery-3.2.1.js"></script>
    <script src="path/to/jquery.js"></script>
<script src="path/to/popper.js"></script>
<script src="path/to/bootstrap.js"></script>
<script src="path/to/bootstrap-confirmation.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
<script>
$(document).ready(function() {
function disableBack() { window.history.forward() }

window.onload = disableBack();
window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
});
</script>

<script>
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    </script>
<script>
        function CancelEvent() {
            var e = window.event;
            //e.cancelBubble is supported by IE
            e.cancelBubble = true;
            e.returnValue = false;
            //e.stopPropagation works only in Firefox.
            if (e.stopPropagation) {
                e.stopPropagation();
                e.preventDefault();
            }
        }

        //Disable the click event of form 
        $(document).keypress(function (e) {
            //Check which key is pressed on the document or window
            if (e.which == 13) {
                // if it is 13 that means enter key pressed, then call the function to cancel the event
                CancelEvent();
            }
        });
    </script>

    <style>
        .hidden_this{
            visibility: hidden;
        }
        select:required:invalid {
  text-align:  center;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}
        
    </style>
    <script>
        function show_this(){
            $('.hidden_this').css('visibility', 'visible');
        }
         
        
        
              function validate() {
                  if(document.getElementById(vote).value){
                      
                  }
}
    </script>
    
        <style>
            .top{
                border:1px solid lightgray;
                height:370px;
                width: 1150px;
                margin:0 auto;
                border-radius: 5px;
                color:black
            }
            .content{
                border:1px solid lightgray;
                height:1770px;
                width: 1150px;
                margin:0 auto;
                border-radius: 5px;
                color:black
            }
            fieldset{
                color:black
            }
            p{
                
            }
            
            
            textarea{
                height:100px;
                width: 500px;
                border: none;
                
            }
            
            .in{
                height:30px;
                width: 250px;
                text-align: center;
                text-transform: uppercase;
            }
            .profile{
                float: right;
                border: 1px solid black;
                height: 180px;
                width:180px;
                margin-top: -265px;
                border-radius:5px;
                margin-right:100px;
            }
            .side{
                border-radius: 6px;
                height:490px;
                width:207px;
                border: 1px solid lightgray;
                padding:0px;
                float:left;
                
            }
            .container{
                border: 1px solid lightgray;
                width: 100%;
                height: 645px;
                float:right;
                border-radius: 5px;
            }
             li:hover{
                background-color: whitesmoke;
            }
            ul,li{
             text-decoration: none;    
            }
            li{
                height:30px;
               
            }
            
            input {
                height:37px;
                font-size: 17px;
                text-transform: uppercase;
                width:240px;
                text-align: center;               
            }
            
            table{
                margin-left: 50px;
            }
         
            .prof{
                margin-left: 500px;
            }
            
           
        </style>
 
             
</head>
<body class=" ">

    <header class="hidden_this">
        <!-- Sidebar navigation -->
        
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background: #0277BD;">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="" data-activates="slide-out" class="button-collapse"><img src="lib/images/ACLC LOGO2.png" width="60px" style="padding: 0; margin: 0;height: 30px;"></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto" style="float: left; padding: 0; margin: 0;">
                <p style="font-size: 15px;"><b>ACLC COLLEGE OF MARIKINA</b></p>
                
            </div>
            <div class=" " style="float: right; padding: 0; margin-right: 90px;;">
                <p style="font-size: 15px;"><b>TEACHER BEHAVIOR INVENTORY</b></p>
                
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>
                        
    <div class="side">
        <img src="images/images (1).jpg"/>
        <br/>
        
            <ul>
                 <a href="add-teacher.php"><li>HOME</li></a>
                <a href="stud-acc.php"><li>STUDENT ACCOUNTS</li></a>
                <a href="faculty.php"><li>FACULTY</li></a>
                 <a href="results.php"><li >RESULTS</li></a>
                 <a href="admin-acc.php"><li>ADMIN ACCOUNTS</li></a>
                <a href="logout.php"><li>LOG OUT</li><a/>
                    
        </ul>                     
            </div>
        <div class="container">
        </br>
        </br>
            <center>
       <h4>ADD TEACHER INFORMATION</h4>
                                
        </center>
        <br/>
<br/>        
 <form method="post" action="" enctype='multipart/form-data'>   
        <table>          
              <?php
            function random_strings($number){
                $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                return substr(str_shuffle($str_result),
                    0,$number);
                echo random_strings(4);
            }
    ?>
      
                        <tr>
                            <td><p>Teacher ID: </p></td> 
                            <td><input name="id" value="<?php echo random_strings(4)?>" type="" id="id"  readonly="readonly"/></td>                                                    
                    </tr>     
                        <tr>
                            <td><p>Name of Faculty: </p></td> 
                            <td><input name="fac" id="name" /></td>
                            
                                                    
                    </tr>       
            
                <tr>
                      <td><p>SUBJECT / SECTION: </p></td> 
                            <td><input name="subject" id="subject"/></td>                 
                </tr>
            
            <tr>
                      <td><p> DEPARTMENT: </p></td> 
                              <td><input name="dept" id="dept"/></td>
            </tr>
                     <tr>
                            <td><p>DATE: </p></td>
                            <td><input name="date" id="date"/></td>
                            
                        
                    </tr>     
            
                <tr>
                               <td><p>TIME / DAY: </p></td>
                            <td><input name="time" id="time"/></td>
                                 
                 </tr>
                    <tr>
                            
                              <td><p>ROOM: </p></td> 
                              <td><input name="room" id="room"/></td>
                    </tr> 
                <tr>
                    <td><p>SELECT IMAGE: </p></td>
                    <td><input type='file' name='file' /></td>
              </tr>
            <tr>
                <td></td>
                <td><p style="color:red;font-size: 20px">All fields are required.!!</p></td>
            </tr>
            <tr>
                <td></td>
                <td><input style="width:200px" type='submit' value='Save' name='but_upload'></td>
            </tr>
            
        </table>
             <?php


?>
            <div class="prof">
                <div class="profCover">               
                    <img src="images/login.jpg" style="height: 300px;width: 300px;margin-left: 0px;border-radius: 5px;margin-top: -410px"  >                 
                </div>                                        
                </form>                   
                    </div>
        <br/>
        <br/>
       
      
       
        </div>                            
  
                   
    </body>
    <!--Main Layout-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="lib/js/jquery-3.2.1.js"></script>
    <script src="lib/semantic/semantic.min.js"></script>
    <script type="text/javascript" src="lib/js/compiled.min.js"></script>
    <script src="lib/sweetalert2/sweetalert2.all.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script><div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
<div class="hiddendiv common"></div></body></html>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<script>
    var completed = $('#complete_checker').val();
    if (completed == 1)
        finish_na();
    else
        show_this();
</script>

<script>
    $('#score').keyup(function(){
        var score = $('#score').val();
        if(score == '')
            $('#score').val('');
    });
</script>
    