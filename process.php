<?php
 $fieldA = $_POST["sub1"];
 $fieldB = $_POST["sub2"];
 $fieldC = $_POST["textTest"];
// echo "<script>alert('$fieldA')</script>";
 $keys = array($fieldA,$fieldB,$fieldC); 
 $csv_line = $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fname = 'data.csv'; //NAME OF THE FILE
 $csv_line = implode(',',$csv_line);
 if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
 $fcon = fopen($fname,'a');
 $fcontent = explode(",",$csv_line);
 fputcsv($fcon,$fcontent);
 fclose($fcon);

//  header("Location: table2.php");
 ?>