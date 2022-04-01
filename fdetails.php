
<?php
error_reporting(0);
session_start();
include "db_conn.php";
if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};

$fname = mysqli_real_escape_string($conn,$_POST["fname"]);
 $fid = mysqli_real_escape_string($conn,$_POST["fid"]);
 $fdept = mysqli_real_escape_string($conn,$_POST["fdept"]);
 $fdesig = mysqli_real_escape_string($conn,$_POST["fdesig"]);
 $fromy = mysqli_real_escape_string($conn,$_POST["fromy"]);
 $toy = mysqli_real_escape_string($conn,$_POST["toy"]);
 $sem = mysqli_real_escape_string($conn,$_POST["sem"]);

 $_SESSION['fname'] = mysqli_real_escape_string($conn,$_POST["fname"]);
 $_SESSION['fid'] = mysqli_real_escape_string($conn,$_POST["fid"]);
 $_SESSION['fdept'] = mysqli_real_escape_string($conn,$_POST["fdept"]);
 $_SESSION['fdesig'] = mysqli_real_escape_string($conn,$_POST["fdesig"]);
 $_SESSION['fromy'] = mysqli_real_escape_string($conn,$_POST["fromy"]);
 $_SESSION['toy'] = mysqli_real_escape_string($conn,$_POST["toy"]);
 $_SESSION['sem'] = mysqli_real_escape_string($conn,$_POST["sem"]);
 $keys = array($fname,$fid,$fdesig,$fdept,$fromy,$toy,$sem); 
 $csv_line = $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fcontent = implode(",",$csv_line);
 $_SESSION['fdetails'] = $fcontent;
 header("Location: subjectdetails.html");
 ?>