<?php

//for goto login if not logged
session_start();
//$_SESSION['semail']=$_COOKIE['cemail'];
if(empty($_SESSION['semail'])){
    header('location:login.php');
}

?>

<!DOCTYPE php>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/amc.l1.s1.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
</head>

<body>
    <nav>

        <h1>N<span>otes</span></h1>
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
                    <ul class="sublvl1" >
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


<b><h4 style="margin-top: 130px ;"><b>Learn with connecting together!...</h4></b></b>
<pre id="help">
	Here you can share your study matrials, schemes and view answers. 


                                    Please use your university Enrollment number to register.
                                Check your file name is <b>CORRECT</b> before upload Notes.
</pre>

</body>



</html>