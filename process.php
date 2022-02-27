<?php
session_start();
 $fieldA = $_POST["1a1"];
 $fieldB = $_POST["1a2"];
 $fieldC = $_POST["2br"];
// echo "<script>alert('$fieldC')</script>";
echo $_SESSION['fdetails'];
echo $_SESSION['subdetails'];
 $keys = array($_SESSION['fdetails'],$_SESSION['subdetails'],$fieldA,$fieldB,$fieldC); 
 $csv_line = $keys;
//  echo $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fname = 'data.csv'; 
 if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
 $fcon = fopen($fname,'a');
 fputcsv($fcon,$csv_line);
 fclose($fcon);

//  header("Location: table2.php");
 ?>