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
                height:410px;
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
            option{
            text-align: center;
            
            }
          
            select,option{
                height: 100px;
                text-align: center;
            }
            table{
                padding: 0px;
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
                 
                height: 210px;
                width:210px;
                margin-top: -265px;
                
                margin-right:100px;
            }
            
            .pictures{
                border-radius:5px;
                border: 1px solid black;
                height: 210px;
                width:210px;
            }
            input{
                                text-align: center;
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
                <p style="font-size: 15px;"><b>WELCOME STUDENT</b><img style="height:30px" src="images/student-1-512.png"></p>
                
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>
    <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav" style="transform: translateX(-100%); background: none; background-color: #01579B;">
            <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
                <!-- NAVIGATION -->
                <h2 style="margin: 15% 20px;"></h2>
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a href="select-teacher.php" class="collapsible-header waves-effect arrow-r">BACK</a></li>
                     </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
        </div>
     <br/>                           
 <?php
 include("dbconfig.php");
 
 $id = $_REQUEST['id'];
 
 $sql = "SELECT * FROM teacher Where id = '$id'";
 $result = mysqli_query($conn, $sql);
 
 $row = mysqli_fetch_array($result);
 
 $id = $row['id'];
 $name = $row['name'];
 $subject = $row['subject'];
 $dept = $row['dept'];
 $date = $row['date'];
 $time = $row['time'];
 $room = $row['room'];
 $images = $row['images'];
 
 ?>
     <fieldset class="top">
          
         <center>
         <h3>TEACHER BEHAVIOR INVENTORY</h3>
         <br/>
         </center>
                    
    
          
          <p><strong>&nbsp Name of Faculty: <input value="<?php echo $name ?>" readonly="readonly" class="in" type="">  &nbsp SUBJECT / SECTION: <input readonly="readonly" value="<?php echo $subject ?>" class="in" type=""></strong></p> 
         <p><strong>&nbsp DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input readonly="readonly" value="<?php echo $date ?>" class="in" type=""> &nbsp; DEPARTMENT: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input readonly="readonly" value="<?php echo $dept ?>" class="in" type=""></strong></p> 
                         <p><strong>&nbsp; TIME/DAY: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input value="<?php echo $time ?>" readonly="readonly" class="in" type="">&nbsp; ROOM: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input readonly="readonly" value="<?php echo $room ?>" class="in" type=""/></strong></p> 
                         <p><strong>&nbsp Note to the Students: </strong></p>  
                         <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is survey of your observations regarding of your instructor. The purpose of this survey is to determine how </p>
                         <p style="margin-top:-10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; your instructor perform certain behaviors which have been found out to be effective in indusing, helping or</p>
                         <p style="margin-top:-10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; motivating students to learn. Your honest answer will certainly help him/her improved on the weak point. Better</p>
      
                         <p style="margin-top:-10px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; teaching on the part of your instructor will contribute to better learning on your part.</p>
                          <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indication of inconsistency or contatrictory response will result to exclusion to the following rating scale. </p>
                            
                         <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On the drop down provided, choose the number for your answer according to the following rating scale. </p>
                              <center>
                                  <p style="margin-top:-10px"><b>5  -  ALWAYS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4  -  OFTEN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3  -  REGULARLY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2  -  SELDOM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  -  NEVER</b></p>
                                
                          </center>
                         <div class="profile">
                             <img class="pictures" src="images/<?php echo $images ?>"/>  
                            </div>
     </fieldset>
     <br/>
     <form action="save-rate.php" method="POST" onsubmit="return validate()">
         <input name="id" type="hidden" value="<?php echo $id ?>"/>
             <input name="images" type="hidden" value="<?php echo $images ?>"/>
      <input name = "name" type="hidden" value="<?php echo $name ?>"/>
     <fieldset class="content"><BR/>
         <h5>&nbsp;PART I. INSTRUCTIONAL COMPETENCIES and PERFORMANCE INDICATORS</h5>
             
             <table>
                 <strong><thead><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A. SKILLS AND EFFICIENCY</b></thead>     </strong>
                 
                 <strong><thead style="float:right"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RATE</b></thead>   </strong>  
                 
                 <tr>
                         <td> <p>&nbsp; 1.The instructors comes to class for the day's lesson.</p></td>  
                             <td>
                                 <center> <select  name ="g1" id="g1" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                       <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                      
                                </center> </select>
                         </td>
                 </tr>
                 <tr>
                         <td> <p>&nbsp; 2.The instructor is well informed of current trends and encourages students to keep up the recent and varied publications related to the subject matter.</p></td>                
                           
                         <td>
                                 <center> <select name ="g2" id="g2" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                      
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 3.The instructor encourage students to study other materials besides the text and lectures given.</p></td>                
                           
                         <td>
                                 <center> <select name ="g3" id="g3" style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 4.The instructor relates the lessons to everyday experience.</p></td>                
                           
                         <td>
                                 <center> <select name ="g4" id="g4" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 5.The instructor makes use of fluent English (or Filipino,depending on the subject matter.</p></td>                
                           
                         <td>
                                 <center> <select name ="g5" id="g5" style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 6.The instructor varies his/her teaching methods to make the teaching learning experience more effective. </p></td>                
                           
                         <td>
                                 <center> <select name ="g6" id="g6" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 7.The instructor discusses the lessons in a wall organized matter.</p></td>                
                           
                         <td>
                                 <center> <select name ="g7" id="g7" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 8.The students encourages students to make individual study a habit as well as provides opportunities for students to participate in class activities and discussions.</p></td>                
                           
                         <td>
                                 <center> <select name ="g8" id="g8" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 9.The instructor encourages questions and discussions in the class.</p></td>                
                           
                         <td>
                                 <center> <select name ="g9" id="g9" style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 10.The instructor gives assignments and checks them regularly.</p></td>                
                           
                         <td>
                                 <center> <select name ="g10" id="g10" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 11.The exams given cover important lessons assigned or taken up in the class.</p></td>                
                           
                         <td>
                                 <center> <select name ="g11" id="g11" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 12.The instructor provides the student with a course outline or syllabus at the start of the term.</p></td>                
                           
                         <td>
                                 <center> <select name ="g12" id="g12" style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                     <tr>
                         <td><p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B. CLASSROOM MANAGEMENT</strong></p></td>
                 </tr>
                 
                  <tr>
                         <td> <p>&nbsp; 1.The instructor starts the class on time.</p></td>                
                           
                         <td>
                                 <center> <select name ="g13" id="g13" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 2.The instructor dismisses the class on time.</p></td>                
                           
                         <td>
                                 <center> <select name ="g14" id="g14" style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                        <tr>
                         <td> <p>&nbsp; 3.The instructor holds the class on time regularly.</p></td>                
                           
                         <td>
                                 <center> <select name ="g15" id="g15" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 4.The instructor sees to it that the class is in order before starting the lessons/discussion.</p></td>                
                           
                         <td>
                                 <center> <select name ="g16" id="g16" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 5.The instructor maintains discipline and yet establishes a friendly atmosphere in the classroom.</p></td>                
                           
                         <td>
                                 <center> <select name ="g17" id="g17"style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                        <tr>
                         <td> <p>&nbsp; 6.The instructor gives equal chance to students during recitation.</p></td>                
                           
                         <td>
                                 <center> <select name ="g18" id="g18" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 7.The instructor strictly supervises and administering of examinations.</p></td>                
                           
                         <td>
                                 <center> <select name ="g19" id="g19" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 8.The instructor discusses test result and discuss problem areas.</p></td>                
                           
                         <td>
                                 <center> <select name ="g20" id="g20" style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 9.The instructor presents the lessons in a voice and manner that maintain class interest and participation.</p></td>                
                           
                         <td>
                                 <center> <select name ="g21" id="g21"style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 10.The instructor explains to the students how this grades are computed.</p></td>                
                           
                         <td>
                                 <center> <select name ="g22" id="g22"style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 11.The instructor grades students based on their total class performance (exams, reports, recitation, and other class requirements).</p></td>                
                           
                         <td>
                                 <center> <select name ="g23" id="g23"style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 12.The instructor uses different methods to gain maximum students participation.</p></td>                
                           
                         <td>
                                 <center> <select name ="g24" id="g24" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                     <tr>
                         <td><h5>&nbsp;PART II. PERSONALITY</h5></td>
                      </tr> 
                 <tr>
                         <td> <p>&nbsp; 1.The instructor shows fairness and impartiality.</p></td>                
                           
                         <td>
                                 <center> <select name ="g25" id="g25" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                     <tr>
                         <td> <p>&nbsp; 2.The Teacher is understanding, accomodating and approachable.</p></td>                
                           
                         <td>
                                 <center> <select name ="g26" id="g26"style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                    <tr>
                         <td> <p>&nbsp; 3.The instructor shows interest and concerns for the welfare of the students.</p></td>                
                           
                         <td>
                                 <center> <select name ="g27" id="g27" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 
                 <tr>
                         <td> <p>&nbsp; 4.The students allows the students to express opinions contrary to his/her own.</p></td>                
                           
                         <td>
                                 <center> <select name ="g28" id="g28" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
                 <tr>
                         <td> <p>&nbsp; 5.The instructor is neat and is appropriately dressed.</p></td>                
                           
                         <td>
                                 <center> <select name ="g29" id="g29" style="height:10px;margin: 0 auto">
                                         <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 <tr>
                         <td> <p>&nbsp; 6.The instructor avoids mannerisms that distract the students.</p></td>                
                           
                         <td>
                                 <center> <select name ="g30" id="g30" style="height:10px;margin: 0 auto">
                                          <option style="height:20px;text-align:center;align-items: center;height:100px"></option>
                                         <option style="height:20px;text-align: center">1</option>
                                         <option style="height:20px;text-align: center">2</option>
                                       <option style="height:20px;text-align: center">3</option>
                                       <option style="height:20px;text-align: center">4</option>
                                       <option style="height:20px;text-align: center">5</option>
                                </center> </select>
                         </td>
                        </tr>
                 
             </table>             
        <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMMENTS</strong></p>
            <table style="border:none">
                    <tr>
                        <td><textarea minlength="0" maxlength="90" id="comm" name="comm" placeholder="Type comment here .."></textarea></td>
                        
                   </tr>
        </table>
            
        <button style="width:200px" type="button" name="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Submit now</button>
         <button style="width:200px" type="reset" value="" name="" class="btn btn-danger">Reset</button>
        
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">TEACHER BEHAVIOR INVENTORY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <br/>
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to submit  ?</h5>
      </div>
        <div class="modal-footer" style="">
       <input class="btn btn-primary" type="submit" name="" style="margin-top: 50px;background-color:#33BEFF; padding: 15px 35px; font-size: 130%;">
              <input class="btn btn-danger" data-dismiss="modal"   value="Change" style="margin-top: 50px; padding: 15px 35px; font-size: 130%;">

       
</div>
                 
          </fieldset>
     
     
                         
  </form>     
  
     
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
    