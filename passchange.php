<?php
session_start();
// error_reporting(0);

include "db_conn.php";

if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};

$qry0 = "select changed from users where username='".$_SESSION['name']."'";
$result = mysqli_query($conn,$qry0);
$resultp = mysqli_fetch_array($result);

if($resultp[0] == 1)
{
    header("Location: ./home.php");
}

$nuname = $_POST['cuname'];
$npass = $_POST['npassword'];

$qry = "update users set password = '$npass' where username='$nuname'";
mysqli_query($conn,$qry);

$qry2 = "update users set changed = 1 where username='$nuname'";
mysqli_query($conn,$qry2);
header("Location: ./home.php");
?>