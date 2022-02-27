<?php
session_start();
 $fname = $_POST["fname"];
 $fid = $_POST["fid"];
 $fdesig = $_POST["fdesig"];
 $fdept = $_POST["fdept"];
 $fdesig = $_POST["fdesig"];
 $fromy = $_POST["fromy"];
 $toy = $_POST["toy"];
 $sem = $_POST["sem"];
 // echo "<script>alert('$fieldA')</script>";
 $keys = array($fname,$fid,$fdesig,$fdept,$fromy,$toy,$sem); 
 $csv_line = $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fcontent = implode(",",$csv_line);
 $_SESSION['fdetails'] = $fcontent;
 echo $_SESSION['fdetails'];
 header("Location: subjectdetails.html");
 ?>