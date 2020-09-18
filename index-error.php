
<?php
include ('dbconfig.php');
session_start();
 
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
            .cover{
             width: 100%;
             height:100%;
             background-size: cover;
            }
        </style>
 
        
            <script>
                    function valid(){
                    
                     var user = document.getElementById("username").value;
                     var pass = document.getElementById("password").value;
                     
                     if(user == "" || user == null || pass == "" || pass == null){
                         alert("Please fill required fields.!");
                          return false;
                     }else{
                        alert("Welcome to ACLC Marikina.");
                        return true;
                     }
                     
    }
             </script>
             
</head>
<body class=" ">

    <img class="cover" src="images/Capture_1.PNG">
            <div class="prof">
                <button  type="button" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top:-600px;width:210px;margin-left: -125px" class="btn btn-warning">TRY AGAIN</button>
                        </div>
        <br/>
        <br/> 
                  
        
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
       <div class="modal-header">

                  <b><h1 class=" " id=" " style="font-family:tahoma;color: blue;font-size: 30px;margin-left: 58px;">Teacher Behavior Inventory</h1>

          </div>
     <div class="modal-body">            
           
         <form action="check.php" method="POST" onsubmit="return valid()">

           <table style="margin-left:80px;">
               <tr>
                   <td>LOG IN AS: <select name="name">
                           <option>STUDENT</option>
                           <option>TEACHER</option>
                           <option>ADMIN</option>
                                 </select>
                   </td>
               </tr>
                       <tr>
                           <td><b>USERNAME</b></td>
                        </tr>
                        <tr>
                            <td><input id="username" name="username" type="text"  style="width: 295px;height:36px;font-size: 22px;text-align: center" ></td>
                        </tr>
                     <tr>
                           <td><b>PASSWORD</b></td>
                        </tr>
                   <tr>
                       <td><input id="password" name="password" type="password" style="width: 295px;height:36px;font-size: 22px;text-align: center" ></td>
                        </tr>  
                   <tr>
                       <td><p id="error"></p></td>           
               </tr>

           </table>    
                       <div class="modal-footer">
              <center>
                  <button type="submit" name="submit"   class="btn btn-primary" style="width: 300px;margin-right: 90px">Log in</button>  <br/> 
                  
          </center>
            
          
</div>
           </form>
          </div>
    
         
            </div>
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
    