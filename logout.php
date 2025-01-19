<?php
session_start();
if (isset($_SESSION['semail'])) {
    
    setcookie('cemail',$_SESSION['semail'],time()-60*20);
    session_destroy();
    header("location:login.php");
}

?>


