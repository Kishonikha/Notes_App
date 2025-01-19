<?php
session_start();
//$_SESSION['semail']=$_COOKIE['cemail'];
if(empty($_SESSION['semail'])){
    header('location:login.php');
}
$check=$_SESSION['semail'][4];
?>


<!DOCTYPE php>
<html>
<head>
    <title>ENS</title>
    <link rel="stylesheet" type="text/css" href="CSS/amc.l1.s1.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
</head>

<body>

<script type="text/javascript">
   let check='<?php echo $check; ?>';
   let check1=check.charAt(0).toUpperCase();
if(check1 !='E'){
   let con=confirm("You do not have permision for this task!.")

if(con==true||con==false){
 console.log(con);
 window.location.replace("home.php");
}
}
</script>
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

<pre id="top">ENS/Level 1/Sem 2</pre>

<div class="files">
<table>
    <form method="GET" action="">
        <tr>
            <td>
               
                <input type="submit" class="btn btn-primary active btn-sm" name="submitstr" value="Search">
                <input type="text" name="searchtxt">

            </td>
        </tr>
    </form>    
</table>
</div>

<div class="files">
<table>
    <form method="POST" enctype="multipart/form-data" >
        <tr>
            <td>
                <input type="file" name="file">
                <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Upload">
            </td>
        </tr>
    </form>    
</table>
</div>

<?php
require_once'PHP/confg/connect.php';
require_once'PHP/func/rgrfunction.php';



if(isset($_POST['submit'])){
    $file=$_FILES['file'];
    //print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTempname=$_FILES['file']['tmp_name'];
    $fileError=$_FILES['file']['error'];
    $fileSize=$_FILES['file']['size'];
    $fileType=$_FILES['file']['type'];

    $fileExt=explode('.', $fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png','pdf','txt','docx','xlsx');

    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<12*1024*1024){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
              // $fileDestination='PHP/uploads/ens/y1s2/'.$fileNameNew;
                //move_uploaded_file($fileTempname,$fileDestination);
               $fileDestination='PHP/uploads/ens/y1s2/'.$fileName;//uploading with axixting filename
               move_uploaded_file($fileTempname, $fileDestination);

                   ////////////////insert file data into database- database name filesdatasel1s2(filename,filetype,filesize,fileowner)//////////////////////////////
                    $fileowner=$_SESSION['semail'];
                    $query="insert into filesdatasel1s2 values('$fileName','$fileType','$fileSize','$fileowner')";
                    mysqli_query($connect,$query);

                    //////////////////////////////////////////////////////////////////////

              //  header("Location:ensl1s2.php?uploadsuccess");
            }else{
                echo "Error! file is larger than 12 Mb";
            }
        }else{
            echo 'error uploading file';
        }

    }else{
        echo "you can't upload this file extension";
    }
//echo 'file details: '.$fileName.'<br>'.$fileTempname.'<br>'.$fileSize.'kb.<br>'.$fileType.'.<br>';





}




///need to do search functions and dowloading the clicking file
if(isset($_GET['submitstr'])){
    $searchtxt=$_GET['searchtxt'];
    $query1="select * from filesdatasel1s2 where Filename like '%$searchtxt%' ";
    $result1=mysqli_query($connect,$query1);
    $row1=mysqli_fetch_row($result1);

echo "<table class='table table-dark table-sm' border='1', cellspacing='0' width='650px' ><tr>";
echo "<td >File Name</td>";
echo "<td>File Size</td>";
echo "<td>Shared By</td>";
echo "<td>View File</td>";
echo "</tr>";

$filepath='PHP/uploads/ens/y1s2/';
foreach ($result1 as $key => $row1) {
    echo "<tr>";
    echo "<td>".$row1['Filename']."</td>";
    $k=$row1['Filename'];
    echo "<td>".(int)($row1['Filesize']/(1024))."Kb</td>";
    echo "<td>".$row1['Fileowner']."</td>";
   // echo "<td><a href='PHP/uploads/ens/y1s2/$k' >Download</a></td>";
    echo "<td><a href='$filepath/$k' >View File</a></td>";//download files linking
    echo "</tr>";
}
echo "</table>";

}else{

///detailing existing file datas for users
$query2="select * from filesdatasel1s2;";
$result2=mysqli_query($connect,$query2);
$count=mysqli_num_rows($result2);
$row=mysqli_fetch_row($result2);

echo "<table class='table table-dark table-sm' border='1', cellspacing='0' width='150px' ><tr>";
echo "<td>File Name</td>";
echo "<td>File Size</td>";
echo "<td>Shared By</td>";
echo "<td>View File</td>";
echo "</tr>";

$filepath='PHP/uploads/ens/y1s2/';
foreach ($result2 as $key => $row) {
    echo "<tr>";
    echo "<td>".$row['Filename']."</td>";
    $k=$row['Filename'];
    echo "<td>".(int)($row['Filesize']/(1024))."Kb</td>";
    echo "<td>".$row['Fileowner']."</td>";
   // echo "<td><a href='PHP/uploads/ens/y1s2/$k' >Download</a></td>";
    echo "<td><a href='$filepath/$k' >View File</a></td>";//download files linking
    echo "</tr>";
}
echo "</table>";

    
}



?>


</body>
</html>
