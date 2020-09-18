
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
            table,tr,td{
                border:1px solid lightgray;
            } 
            table,tr{
                height:20px;
            }
          
            select,option{
                height: 100px;
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
                height:100%;
                width:207px;
                border: 1px solid lightgray;
                padding:0px;
                float:left;
                
            }
            .container{
                border: 1px solid lightgray;
                width: 100%;
                height: 100%;
                float:right;
              
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
         
        </style>
        
        
            <script type="text/javascript">
             function validate(){
             var g1 = document.getElementById("g1").value;
             var g2 = document.getElementById("g2").value;
             var g3 = document.getElementById("g3").value;
             var g4 = document.getElementById("g4").value;
             var g5 = document.getElementById("g5").value;
             var g6 = document.getElementById("g6").value;
             var g7 = document.getElementById("g7").value;
             var g8 = document.getElementById("g8").value;
             var g9 = document.getElementById("g9").value;
             var g10 = document.getElementById("g10").value;
             var g11 = document.getElementById("g11").value;
             var g12 = document.getElementById("g12").value;
             var g13 = document.getElementById("g13").value;
             var g14 = document.getElementById("g14").value;
             var g15 = document.getElementById("g15").value;
             var g16 = document.getElementById("g16").value;
             var g17 = document.getElementById("g17").value;
             var g18 = document.getElementById("g18").value;
             var g19 = document.getElementById("g19").value;
             var g20 = document.getElementById("g20").value;
             var g21 = document.getElementById("g21").value;
             var g22 = document.getElementById("g22").value;
             var g23 = document.getElementById("g23").value;
             var g24 = document.getElementById("g24").value;
             var g25 = document.getElementById("g25").value;
             var g26 = document.getElementById("g26").value;
             var g27 = document.getElementById("g27").value;
             var g28 = document.getElementById("g28").value;
             var g29 = document.getElementById("g29").value;
             var g30 = document.getElementById("g30").value;
             
             var com = document.getElementById("comm").value;
             
             
             
             
             if(g1 == "" || g1 == null || g2 == "" || g2 == null || g3 == "" || g3 == null || g4 == "" || g4 == null || g5 == "" || g5 == null || g6 == "" || g6 == null || g7 == "" || g7 == null || g8 == "" || g8 == null || g9 == "" || g9 == null || g10 == "" || g10 == null || g11 == "" || g11 == null || g12 == "" || g12 == null || g13 == "" || g13 == null || g14 == "" || g14 == null || g15 == "" || g15 == null || g16 == "" || g16 == null || g17 == "" || g17 == null || g18 == "" || g18 == null || g19 == "" || g19 == null || g20 == "" || g20 == null || g21 == "" || g21 == null || g22 == "" || g22 == null || g23 == "" || g23 == null || g24 == "" || g24 == null || g25 == "" || g25 == null || g26 == "" || g26 == null || g27 == "" || g27 == null || g28 == "" || g28 == null || g29 == "" || g29 == null || g30 == "" || g30 == null){
                 alert("Please fill required field(s).!");
                 return false;
             }else if(com == "" || com == null){
             alert("Please type some comments.!");
                 return false;
                }
             
    }
        </script>
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
        <br/>
            <ul>
                <a href="home.php"><li>HOME</li></a>
                <a href="add-teacher.php"><li>ADD TEACHER</li></a>
                <a href="stud-acc.php"><li>STUDENT ACCOUNTS</li></a>
                <a href="faculty.php"><li>FACULTY</li></a>
                <a href="rank.php"><li>RANK</li></a>
                <a href="results.php"><li >RESULTS</li></a>
                <a href="comments.php"><li>COMMENTS</li></a>
                <a href="admin-acc.php"><li>ADMIN ACCOUNTS</li></a>
                <a href="logout.php"><li>LOG OUT</li><a/>
                    
        </ul>                     
            </div>
        <div class="container">
            
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
    