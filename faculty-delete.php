
<?php
session_start();
include ('dbconfig.php');

 if($_SESSION['username'] == ""){
    header("Location:index.php");
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
                <h4 style="color:red">ARE YOU SURE YOU WANT TO DELETE ?</h4>
                                
        </center>
        <br/>
<br/>        

              <?php
              
              include ('dbconfig.php');

 $id = $_REQUEST['id'];

$sql = "select * from teacher where id= '$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


$n = $row['name'];
$subject = $row['subject'];
$dept = $row['dept'];
$date = $row['date'];
$time = $row['time'];
$room = $row['room'];

$image = $row['images'];
$image_src = "pictures/".$image;

?>
 <form method="post" action="" enctype='multipart/form-data'>   
        <table>          
                        <tr>
                            <td><p>Teacher ID: </p></td> 
                            <td><input name="id" value="<?php echo $_REQUEST['id']?>" type="" id="id"  readonly="readonly"/></td>                                                    
                    </tr>     
                        <tr>
                            <td><p>Name of Faculty: </p></td> 
                            <td><input value="<?php echo $n ?>"  readonly="readonly"/></td>
                            
                                                    
                    </tr>       
            
                <tr>
                      <td><p>SUBJECT / SECTION: </p></td> 
                            <td><input value="<?php echo $subject ?>"  readonly="readonly"/></td>                 
                </tr>
            
            <tr>
                      <td><p> DEPARTMENT: </p></td> 
                              <td><input value="<?php echo $dept ?>"   readonly="readonly"/></td>
            </tr>
                     <tr>
                            <td><p>DATE: </p></td>
                            <td><input value="<?php echo $date ?>"   readonly="readonly"/></td>
                            
                        
                    </tr>     
            
                <tr>
                               <td><p>TIME / DAY: </p></td>
                            <td><input value="<?php echo $time ?>"  readonly="readonly"/></td>
                                 
                 </tr>
                    <tr>
                            
                              <td><p>ROOM: </p></td> 
                              <td><input value="<?php echo $room ?>"  readonly="readonly"/></td>
                    </tr> 
                
            <tr>
                
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-danger"><a style="color: white" href="fac-del-action.php?id=<?php echo $id?>">DELETE</a></button> 
                    
                     
                    <button class="btn btn-primary"><a style="color: white" href="faculty.php">CANCEL</a></button> 
                </td>
            </tr>
            
        </table>

            <div class="prof">
                <div class="profCover">               
                    <img src="images/<?php echo $image ?>" style="height: 300px;width: 300px;margin-left: 0px;border-radius: 5px;margin-top: -380px"  >                 
                </div>                                        
                                  
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
    