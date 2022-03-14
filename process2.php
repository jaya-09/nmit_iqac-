<?php
    error_reporting(0);
    session_start();
    
include "db_conn.php";

if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};

    $field270 = $_POST["16a"];

    $field271 = $_POST["16b1"];
    $field272 = $_POST["16b2"];
    $field273 = $_POST["16b3"];
    $field274 = $_POST["16b4"];   
    $field275 = $_POST["16b5"];
    $field276 = $_POST["16b6"];

    $field277 = $_POST["16c1"];
    $field278 = $_POST["16c2"];
    $field279 = $_POST["16c3"];
    $field280 = $_POST["16c4"];

    $field281 = $_POST["16da"];
    $field282 = $_POST["16dr1"];
    $field283 = $_POST["16dr2"];

    $field284 = $_POST["16e"];

    $field285 = $_POST["16r"];


    $field286 = $_POST["17a"];
    $field287 = $_POST["17b"];
    $field288 = $_POST["17c"];
    $field289 = $_POST["17d"];
    $field290 = $_POST["17e"];
    $field291 = $_POST["17f"];

    $field292 = $_POST["17g1"];
    $field293 = $_POST["17g2"];

    $field294 = $_POST["17h"];
    $field295 = $_POST["17i"];
    $field296 = $_POST["17j"];
    

    $field297 = $_POST["18a"];
    $field298 = $_POST["18b"];
    
    $field299 = $_POST["18c1"];
    $field300 = $_POST["18c2"];
    $field339 = $_POST["18c3"];
    $field340 = $_POST["18c4"];
    $field341 = $_POST["18c5"];
    $field342 = $_POST["18c6"];
    $field343 = $_POST["18c7"];
    $field344 = $_POST["18c8"];

    $field301 = $_POST["18d"];


    $field302 = $_POST["19aa"];
    $field345 = $_POST["19a1"];
    $field346 = $_POST["19a2"];
    $field347 = $_POST["19a3"];
    $field348 = $_POST["19a4"];
    $field349 = $_POST["19a5"];
    $field350 = $_POST["19a6"];

    $field303 = $_POST["19b"];

    $field304 = $_POST["19c1"];
    $field351 = $_POST["19c2"];
    $field352 = $_POST["19c3"];
    $field353 = $_POST["19c4"];

    $field305 = $_POST["19d1"];
    $field354 = $_POST["19d2"];
    $field355 = $_POST["19d3"];
    $field356 = $_POST["19d4"];
    $field357 = $_POST["19d5"];
    $field358 = $_POST["19d6"];

    $field306 = $_POST["19e"];


    $field307 = $_POST["20a"];

    $field308 = $_POST["20b1"];
    $field309 = $_POST["20b2"];
    $field310 = $_POST["20b3"];
    $field311 = $_POST["20b4"];
    $field312 = $_POST["20b5"];
    $field313 = $_POST["20b6"];

    $field314 = $_POST["20c"];

    $field315 = $_POST["20d1"];
    $field316 = $_POST["20d2"];
    $field317 = $_POST["20d3"];

    $field318 = $_POST["20e"];
    

    $field319 = $_POST["21a"];
    $field320 = $_POST["21b"];


    $field321 = $_POST["22a"];
    $field322 = $_POST["22b"];
    $field323 = $_POST["22c"];
    $field324 = $_POST["22d"];


    $field325 = $_POST["23a"];
    $field326 = $_POST["23b"];


    $field327 = $_POST["24a1"];
    $field328 = $_POST["24a2"];
    $field329 = $_POST["24a3"];
    $field330 = $_POST["24a4"];

 
    $field331 = $_POST["25a"];
    $field332 = $_POST["25b"];
    $field333 = $_POST["25c"];
    $field334 = $_POST["25d"];
    $field335 = $_POST["25e"];


    $field336 = $_POST["26a"];


    $field337 = $_POST["27a"];


    $field338 = $_POST["28a"];

    $query = "insert into answers2 values ('".$_SESSION['userid']."','".$_SESSION['fid']."','".$_SESSION['fromy']."','".$_SESSION['toy']."','".$_SESSION['sem']."','$field270', '$field271', '$field272', '$field273', '$field274', '$field275', '$field276', '$field277', '$field278', '$field279', '$field280', '$field281', '$field282', '$field283', '$field284', '$field285', '$field286', '$field287', '$field288', '$field289', '$field290', '$field291', '$field292', '$field293', '$field294', '$field295', '$field296', '$field297', '$field298', '$field299', '$field300', '$field339', '$field340', '$field341', '$field342', '$field343', '$field344', '$field301', '$field302', '$field345', '$field346', '$field347', '$field348', '$field349', '$field350', '$field303', '$field304', '$field351', '$field352', '$field353', '$field305', '$field354', '$field355', '$field356', '$field357', '$field358', '$field306', '$field307', '$field308', '$field309', '$field310', '$field311', '$field312', '$field313', '$field314', '$field315', '$field316', '$field317', '$field318', '$field319', '$field320', '$field321', '$field322', '$field323', '$field324', '$field325', '$field326', '$field327', '$field328', '$field329', '$field330', '$field331', '$field332', '$field333', '$field334', '$field335', '$field336', '$field337', '$field338')";
    echo mysqli_query($conn,$query);
$temp = $_SESSION["csv_line"];
 $_SESSION['keys2'] = array($field270,$field271,$field272,$field273,$field274,$field275,$field276,$field277,$field278,$field279,$field280,$field281,$field282,$field283,$field284,$field285,$field286,$field287,$field288,$field289,$field290,$field291,$field292,$field293,$field294,$field295,$field296,$field297,$field298,$field299,$field300,$fied339,$field340,$field341,$field342,$field343,$field344,$field301,$field302,$field345,$field346,$field347,$field348,$field349,$field350,$field303,$field304,$field351,$field352,$field353,$field305,$field354,$field355,$field356,$field357,$field358,$field306,$field307,$field308,$field309,$field310,$field311,$field312,$field313,$field314,$field315,$field316,$field317,$field318,$field319,$field320,$field321,$field322,$field323,$field324,$field325,$field326,$field327,$field328,$field329,$field330,$field331,$field332,$field333,$field334,$field335,$field336,$field337,$field338); 
 $_SESSION['csv_line'] = array_merge($temp,$_SESSION['keys2']);
 foreach($_SESSION['keys2'] as $key ){
     array_push($_SESSION['csv_line'],'' . $_GET[$key]);
        
 }
 $fname = 'data.csv'; 
 if(!file_exists($fname)){$csv_line = $csv_line."\r\n" ;}
 $fcon = fopen($fname,'a');
fputcsv($fcon,$_SESSION['csv_line']);
 fclose($fcon);
 header("Location: ./home.php");

 ?>
