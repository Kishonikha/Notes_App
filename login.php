<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="icon" type="image" href="img/icon.jpg">
	<link rel="stylesheet" type="text/css" href="CSS/hstylelogin.css">
	<link rel="stylesheet" type="text/css" href="popup.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
	<style type="text/css">
		.contianer{
			width: 264px;
		}
		
	</style>
</head>
<body>
<div class="background">
	
</div>

<header><br>
<h1  style="text-align: center; font-family:cursive,poppins,sans-serif;">N<span style="color:#4b4b4b">otes</span></h1>
</header>
<br><br>
<div class="contianer">
<form method="POST" action="login.php">
	<h2  style="font-family:cursive,poppins,sans-serif;text-align: center; ">Login</h2>

    <!--<label for="E-mail" style="margin-left:28px;">E-mail:</label>-->
    <input type="text" id="username" style="margin-left:11px;background-color: #f5f5f5; border-radius:8px;border-color: black;text-align: center; " name="username" placeholder="Enrollment number" required><br>
    <br>
    <!--<label for="password" style="margin-left:6px;">Password:</label>-->
    <input type="password"	style="margin-left:11px;background-color: #f5f5f5; border-radius:8px; border-color: black; text-align:center;" id="password" name="password" placeholder="Password" required><br>
    
    <label for="remberme" style="margin-left:2px ">Remember me </label>
    <input style="margin-right: 1px" type="checkbox" name="rmrme">
 <!--   <a href="">Forgot-password</a>-->
    <br>

    <input type="submit" class="btn btn-primary active btn-sm" value="Log In" style="margin-left: 100px;margin-top: 12px;">
    <br>
    <p style="text-align: center">Don't have an account? <a href="#popup" class="register-link" >register</a></p><!--<a href="register.php">Register</a></p>-->
 
</form>
</div>

<div id="popup" class="popup-containner">
	<div class="popup-content">
		<span class="close-button" onclick="window.location.href='#'">&times;</span>
		<iframe src="register.php" style="width:100%;height: 29vh;" frameborder="0"></iframe>
	</div>
</div>

<?php
require_once'PHP/confg/connect.php';
require_once'PHP/func/rgrfunction.php';
if(!(empty($_COOKIE['cemail']))){
		$_SESSION['semail']=$_COOKIE['cemail'];
		header('location:home.php');
	}
if($_SERVER['REQUEST_METHOD']=='POST'){
	$username=$_POST['username'];
	$password=$_POST['password'];

	if(isset($_POST['rmrme'])){
	$Remember=$_POST['rmrme'];
	}else{
		$Remember=false;
	}
	session_start();

	//for go to homepage if only already logged


	$query="select email,password from users where email='$username' and password='$password'";
	$result=mysqli_query($connect,$query);
	$num=mysqli_num_rows($result);

	//for login and set sessions if login correctly
	if($num==1){

		
		$_SESSION['semail']=$username;
		$_SESSION['spassword']=$password;
		
		if(!(isset($Remember))){
			header('location:home.php');
		}
		
		if(isset($Remember)){
		setcookie('cemail',$username,time()+60*20);//set cookie or 20 mins
		//setcookie('cpassword',$password,time()+60*20);
		}

		header('location:home.php');
	}else{
		echo '<p style="color: red";>wrong email or password</p>';
	}


}

?>

<footer><br>
	&copy;copyright reserved
	<br>
</footer>
</body>
</html>