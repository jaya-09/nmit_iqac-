
<?php

session_start();

if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};

$fname = $_POST["fname"];
 $fid = $_POST["fid"];
 $fdept = $_POST["fdept"];
 $fdesig = $_POST["fdesig"];
 $fromy = $_POST["fromy"];
 $toy = $_POST["toy"];
 $sem = $_POST["sem"];

 $_SESSION['fname'] = $_POST["fname"];
 $_SESSION['fid'] = $_POST["fid"];
 $_SESSION['fdept'] = $_POST["fdept"];
 $_SESSION['fdesig'] = $_POST["fdesig"];
 $_SESSION['fromy'] = $_POST["fromy"];
 $_SESSION['toy'] = $_POST["toy"];
 $_SESSION['sem'] = $_POST["sem"];
 
 $keys = array($fname,$fid,$fdesig,$fdept,$fromy,$toy,$sem); 
 $csv_line = $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fcontent = implode(",",$csv_line);
 $_SESSION['fdetails'] = $fcontent;
 header("Location: subjectdetails.html");
 ?>