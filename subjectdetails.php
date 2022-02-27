<?php
session_start();
 $sub1 = $_POST["sub1"];
 $sub1c = $_POST["sub1c"];
 $sub2 = $_POST["sub2"];
 $sub2c = $_POST["sub2c"];
 $sub3 = $_POST["sub3"];
 $sub3c = $_POST["sub3c"];
 $sub4 = $_POST["sub4"];
 $sub4c = $_POST["sub4c"];
 // echo "<script>alert('$fieldA')</script>";
 $keys = array($sub1,$sub1c,$sub2,$sub2c,$sub3,$sub3c,$sub4,$sub4c); 
 $csv_line = $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fcontent = implode(",",$csv_line);
 $_SESSION['subdetails'] = $fcontent;
 echo $_SESSION['subdetails'];
 header("Location: table1.php");
 ?>