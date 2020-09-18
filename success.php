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
                height:645px;
                width:207px;
                border: 1px solid lightgray;
                padding:0px;
                float:left;
                
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
             .zoom {
 
          transition: transform .3s; /* Animation */
 
         margin: 0 auto;
        }
            .zoom:hover {
                transform: scale(1.2);
                 
                /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
            
            tr:hover{
                background-color: whitesmoke;
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
                <p style="font-size: 15px;"><b>WELCOME STUDENT </b><img style="height:30px" src="images/student-1-512.png"></p>
                
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>   
        <div class="container">
        </br>       
        </br> 
            <center>
      
                  <div style="box-shadow: 5px 1px 10px green; margin: 0 auto;height:400px;width:500px;border:1px solid GRAY;background-color: white;border-radius: 10px;">
        <br/><center><img src="lib/img/check.png" style="height:180px;"/></center>
        <center><h1 style=" ">Success.Thank you.</h1></center>
        <center><h3 style=" "></h3></center>
        <center><a href="logout.php" class="collapsible-header waves-effect arrow-r"><button class="btn btn-success" style="width:250px;"><b style="color: white">OK</b></button></a></center>
                        </div>
        </center>
        <br/>
<br/>        
 
            <div class="prof">
                                  
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
    