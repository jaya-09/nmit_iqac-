<?php
session_start();
include "db_conn.php";
if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};
 $sub1 = mysqli_real_escape_string($conn,$_POST["sub1"]);
 $sub1c = mysqli_real_escape_string($conn,$_POST["sub1c"]);
 $sub2 = mysqli_real_escape_string($conn,$_POST["sub2"]);
 $sub2c = mysqli_real_escape_string($conn,$_POST["sub2c"]);
 $sub3 = mysqli_real_escape_string($conn,$_POST["sub3"]);
 $sub3c = mysqli_real_escape_string($conn,$_POST["sub3c"]);
 $sub4 = mysqli_real_escape_string($conn,$_POST["sub4"]);
 $sub4c = mysqli_real_escape_string($conn,$_POST["sub4c"]);
 $_SESSION['sub1'] = $sub1;
 $_SESSION['sub1c'] = $sub1c;
 $_SESSION['sub2'] = $sub2;
 $_SESSION['sub2c'] = $sub2c;
 $_SESSION['sub3'] = $sub3;
 $_SESSION['sub3c'] = $sub3c;
 $_SESSION['sub4'] = $sub4;
 $_SESSION['sub4c'] = $sub4c;
 // echo "<script>alert('$fieldA')</script>";
 $keys = array($sub1,$sub1c,$sub2,$sub2c,$sub3,$sub3c,$sub4,$sub4c); 
 $csv_line = $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fcontent = implode(",",$csv_line);
 $_SESSION['subdetails'] = $fcontent;
 header("Location: table1.php");
 ?>