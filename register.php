<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="icon" type="image" href="img/icon.jpg">
	<link rel="stylesheet" type="text/css" href="CSS/hstyle.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
	<style type="text/css">
		body{
			display: flex;
			align-items: left;
			background-color: inherit;
			width: 10vh;
			height: 10px;
			justify-content: center;
		}
	</style>
</head>
<body>
<div>
<form method="POST">
	<h2  style="font-family:poppins,sans-serif;margin-top:0px;margin-left:340px;"><u>Register</u></h2>

    <!--<label for="E-mail" style="margin-left:28px;">E-mail:</label>-->
    <pre style="font-size: 9px"><b>				 	   			       please provide 
    				                               Enrollment number without slash</b></pre>
    <input type="text" id="username" style="margin-left:290px;background-color: #f5f5f5; border-radius:8px;border-color: black;text-align: center; " name="susername" placeholder="Enrollment number" required><br>
    <br>
    <!--<label for="password" style="margin-left:6px;">Password:</label>-->
    <input type="password"	style="margin-left:290px;background-color: #f5f5f5; border-radius:8px; border-color: black; text-align: center;" id="password" name="spassword" placeholder="Password" required><br>
    <input type="submit" class="btn btn-primary active btn-sm" value="submit" style="margin-left:350px;margin-top: 12px;">
    <br>
</form>
</div>

<!--for close popup after submit-->
<script>
	function closePopup(){
		window.opener.location.reload();
		window.close();	
	}
</script>



<?php
require_once'PHP/confg/connect.php';
require_once'PHP/func/rgrfunction.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['susername'];
$pasword=$_POST['spassword'];

if(!(empty($username && $pasword))){
$query="insert into users values('$username','$pasword')";

	if($query){
		registeruser($connect,$query);
		header("location:login.php");
	}
}else{
	echo "please Enter mail and correct password to register!.";
	header("location:register.php");
}

}

?>






</body>
</html>