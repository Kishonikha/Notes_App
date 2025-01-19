<?php

//for goto login if not logged

//updated feedback new
session_start();
//$_SESSION['semail']=$_COOKIE['cemail'];
if(empty($_SESSION['semail'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>feedback</title>
    <link rel="stylesheet" type="text/css" href="CSS/feedback.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
</head>

<body>
    <nav>
        <h2>N<span>otes</span></h2>
        <ul  class="navbar">
            <li><a href="home.php" class="text-dark">HOME</a></li>
            <li><a href="#" class="text-dark">AMC NOTES</a>
                 <ul class="sublvl1">
                    <li><a href="#" class="text-dark">Level_1</a>
                        <ul class="sublvl2">
                            <li><a href="amcl1s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="amcl1s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-dark">Level_2</a>
                        <ul class="sublvl2">
                            <li><a href="amcl2s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="amcl2s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-dark">Level_3</a>
                            <ul class="sublvl2">
                            <li><a href="amcl3s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="amcl3s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>  
                </ul>
            </li>
            <li><a href="#" class="text-dark">ICT NOTES</a>
                    <ul class="sublvl1">
                    <li><a href="#" class="text-dark">Level_1</a>
                        <ul class="sublvl2">
                            <li><a href="ictl1s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="ictl1s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-dark">Level_2</a>
                        <ul class="sublvl2">
                            <li><a href="ictl2s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="ictl2s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-dark">Level_3</a>
                            <ul class="sublvl2">
                            <li><a href="ictl3s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="ictl3s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>  
                </ul>

            </li>
            <li><a href="#" class="text-dark">ENS NOTES</a>
                    <ul class="sublvl1">
                    <li><a href="#" class="text-dark">Level_1</a>
                        <ul class="sublvl2">
                            <li><a href="ensl1s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="ensl1s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-dark">Level_2</a>
                        <ul class="sublvl2">
                            <li><a href="ensl2s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="ensl2s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-dark">Level_3</a>
                            <ul class="sublvl2">
                            <li><a href="ensl3s1.php" class="text-dark">Sem 1</a></li>
                            <li><a href="ensl3s2.php" class="text-dark">Sem 2</a></li>
                        </ul>
                    </li>  
                </ul>

            </li>
            <li><a href="feedback.php" class="text-dark">FEEDBACK</a></li>
            <li><a href="logout.php" class="text-dark">LOGOUT</a></li>
        </ul>
    </nav>
<pre><h1 style="margin-top: 130px ;font-family: cursive; margin-left: 35px; font-weight: bolder;">Help us, Help you...</h1><div id="help" style="font-weight: bold; margin-left: 45px;" >
                Give us feedback to improve our site...</div></pre>

<div class="feedbackbox" style="margin-top: -70px;" >
    <table>
        
    <form method="Post" action="">
        <tr><td><label for="name">Name:</label></td>
        <td><input type="text" name="name" placeholder="Name" ></td></tr>
        <tr><td><label for="mail">E-Mail:</label></td>
        <td><input type="E-Mail" name="mail" placeholder="E-mail"><td>
        <tr><td><label for="suggest">Suggestion:</label></td>
        <td align="centre"><textarea cols="23" rows="5" name="body" placeholder="Please provide your suggestions."></textarea></td>
        <tr></tr>
        <tr><td class="mx-auto p-3"><input type="submit" class="btn btn-primary active btn-sm" name="btn" value="Submit"></td></tr>

    </form>
    </table>
</div>

</body>
<?php
require_once'PHP/confg/connect.php';
require_once'PHP/func/rgrfunction.php';

/*
if(isset($_POST['btn'])){
	$body=$_POST['body'];

   $to = "webmaster@domain.com"; // Enter YOUR email here
   $subject = "Feedback for the Website!";
   
  mail($to, $subject, $body);
  print("<h2>Thanks for your feedback!</h2>");
 } 
*/

?>


</html>