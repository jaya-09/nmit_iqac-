<?php
    error_reporting(0);
    session_start();
    
include "db_conn.php";

if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};

    $field270 = mysqli_real_escape_string($conn,$_POST["16a"]);

    $field271 = mysqli_real_escape_string($conn,$_POST["16b1"]);
    $field272 = mysqli_real_escape_string($conn,$_POST["16b2"]);
    $field273 = mysqli_real_escape_string($conn,$_POST["16b3"]);
    $field274 = mysqli_real_escape_string($conn,$_POST["16b4"]);   
    $field275 = mysqli_real_escape_string($conn,$_POST["16b5"]);
    $field276 = mysqli_real_escape_string($conn,$_POST["16b6"]);

    $field277 = mysqli_real_escape_string($conn,$_POST["16c1"]);
    $field278 = mysqli_real_escape_string($conn,$_POST["16c2"]);
    $field279 = mysqli_real_escape_string($conn,$_POST["16c3"]);
    $field280 = mysqli_real_escape_string($conn,$_POST["16c4"]);

    $field281 = mysqli_real_escape_string($conn,$_POST["16da"]);
    $field282 = mysqli_real_escape_string($conn,$_POST["16dr1"]);
    $field283 = mysqli_real_escape_string($conn,$_POST["16dr2"]);

    $field284 = mysqli_real_escape_string($conn,$_POST["16e"]);

    $field285 = mysqli_real_escape_string($conn,$_POST["16r"]);


    $field286 = mysqli_real_escape_string($conn,$_POST["17a"]);
    $field287 = mysqli_real_escape_string($conn,$_POST["17b"]);
    $field288 = mysqli_real_escape_string($conn,$_POST["17c"]);
    $field289 = mysqli_real_escape_string($conn,$_POST["17d"]);
    $field290 = mysqli_real_escape_string($conn,$_POST["17e"]);
    $field291 = mysqli_real_escape_string($conn,$_POST["17f"]);

    $field292 = mysqli_real_escape_string($conn,$_POST["17g1"]);
    $field293 = mysqli_real_escape_string($conn,$_POST["17g2"]);

    $field294 = mysqli_real_escape_string($conn,$_POST["17h"]);
    $field295 = mysqli_real_escape_string($conn,$_POST["17i"]);
    $field296 = mysqli_real_escape_string($conn,$_POST["17j"]);
    

    $field297 = mysqli_real_escape_string($conn,$_POST["18a"]);
    $field298 = mysqli_real_escape_string($conn,$_POST["18b"]);
    
    $field299 = mysqli_real_escape_string($conn,$_POST["18c1"]);
    $field300 = mysqli_real_escape_string($conn,$_POST["18c2"]);
    $field339 = mysqli_real_escape_string($conn,$_POST["18c3"]);
    $field340 = mysqli_real_escape_string($conn,$_POST["18c4"]);
    $field341 = mysqli_real_escape_string($conn,$_POST["18c5"]);
    $field342 = mysqli_real_escape_string($conn,$_POST["18c6"]);
    $field343 = mysqli_real_escape_string($conn,$_POST["18c7"]);
    $field344 = mysqli_real_escape_string($conn,$_POST["18c8"]);

    $field301 = mysqli_real_escape_string($conn,$_POST["18d"]);


    $field302 = mysqli_real_escape_string($conn,$_POST["19aa"]);
    $field345 = mysqli_real_escape_string($conn,$_POST["19a1"]);
    $field346 = mysqli_real_escape_string($conn,$_POST["19a2"]);
    $field347 = mysqli_real_escape_string($conn,$_POST["19a3"]);
    $field348 = mysqli_real_escape_string($conn,$_POST["19a4"]);
    $field349 = mysqli_real_escape_string($conn,$_POST["19a5"]);
    $field350 = mysqli_real_escape_string($conn,$_POST["19a6"]);

    $field303 = mysqli_real_escape_string($conn,$_POST["19b"]);

    $field304 = mysqli_real_escape_string($conn,$_POST["19c1"]);
    $field351 = mysqli_real_escape_string($conn,$_POST["19c2"]);
    $field352 = mysqli_real_escape_string($conn,$_POST["19c3"]);
    $field353 = mysqli_real_escape_string($conn,$_POST["19c4"]);

    $field305 = mysqli_real_escape_string($conn,$_POST["19d1"]);
    $field354 = mysqli_real_escape_string($conn,$_POST["19d2"]);
    $field355 = mysqli_real_escape_string($conn,$_POST["19d3"]);
    $field356 = mysqli_real_escape_string($conn,$_POST["19d4"]);
    $field357 = mysqli_real_escape_string($conn,$_POST["19d5"]);
    $field358 = mysqli_real_escape_string($conn,$_POST["19d6"]);

    $field306 = mysqli_real_escape_string($conn,$_POST["19e"]);


    $field307 = mysqli_real_escape_string($conn,$_POST["20a"]);

    $field308 = mysqli_real_escape_string($conn,$_POST["20b1"]);
    $field309 = mysqli_real_escape_string($conn,$_POST["20b2"]);
    $field310 = mysqli_real_escape_string($conn,$_POST["20b3"]);
    $field311 = mysqli_real_escape_string($conn,$_POST["20b4"]);
    $field312 = mysqli_real_escape_string($conn,$_POST["20b5"]);
    $field313 = mysqli_real_escape_string($conn,$_POST["20b6"]);

    $field314 = mysqli_real_escape_string($conn,$_POST["20c"]);

    $field315 = mysqli_real_escape_string($conn,$_POST["20d1"]);
    $field316 = mysqli_real_escape_string($conn,$_POST["20d2"]);
    $field317 = mysqli_real_escape_string($conn,$_POST["20d3"]);

    $field318 = mysqli_real_escape_string($conn,$_POST["20e"]);
    

    $field319 = mysqli_real_escape_string($conn,$_POST["21a"]);
    $field320 = mysqli_real_escape_string($conn,$_POST["21b"]);


    $field321 = mysqli_real_escape_string($conn,$_POST["22a"]);
    $field322 = mysqli_real_escape_string($conn,$_POST["22b"]);
    $field323 = mysqli_real_escape_string($conn,$_POST["22c"]);
    $field324 = mysqli_real_escape_string($conn,$_POST["22d"]);


    $field325 = mysqli_real_escape_string($conn,$_POST["23a"]);
    $field326 = mysqli_real_escape_string($conn,$_POST["23b"]);


    $field327 = mysqli_real_escape_string($conn,$_POST["24a1"]);
    $field328 = mysqli_real_escape_string($conn,$_POST["24a2"]);
    $field329 = mysqli_real_escape_string($conn,$_POST["24a3"]);
    $field330 = mysqli_real_escape_string($conn,$_POST["24a4"]);

 
    $field331 = mysqli_real_escape_string($conn,$_POST["25a"]);
    $field332 = mysqli_real_escape_string($conn,$_POST["25b"]);
    $field333 = mysqli_real_escape_string($conn,$_POST["25c"]);
    $field334 = mysqli_real_escape_string($conn,$_POST["25d"]);
    $field335 = mysqli_real_escape_string($conn,$_POST["25e"]);


    $field336 = mysqli_real_escape_string($conn,$_POST["26a"]);


    $field337 = mysqli_real_escape_string($conn,$_POST["27a"]);


    $field338 = mysqli_real_escape_string($conn,$_POST["28a"]);

  

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
 
  echo $_SESSION['ansid'];
 if($_SESSION['ansid'] != -1){  
    $sql1 = "UPDATE answers2 set
    field270 = '$field270',
    field271 = '$field271',
    field272 = '$field272',
    field273 = '$field273',
    field274 = '$field274',
    field275 = '$field275',
    field276 = '$field276',
    field277 = '$field277',
    field278 = '$field278',
    field279 = '$field279',
    field280 = '$field280',
    field281 = '$field281',
    field282 = '$field282',
    field283 = '$field283',
    field284 = '$field284',
    field285 = '$field285',
    field286 = '$field286',
    field287 = '$field287',
    field288 = '$field288',
    field289 = '$field289',
    field290 = '$field290',
    field291 = '$field291',
    field292 = '$field292',
    field293 = '$field293',
    field294 = '$field294',
    field295 = '$field295',
    field296 = '$field296',
    field297 = '$field297',
    field298 = '$field298',
    field299 = '$field299',
    field300 = '$field300',
    field339 = '$field339',
    field340 = '$field340',
    field341 = '$field341',
    field342 = '$field342',
    field343 = '$field343',
    field344 = '$field344',
    field301 = '$field301',
    field302 = '$field302',
    field345 = '$field345',
    field346 = '$field346',
    field347 = '$field347',
    field348 = '$field348'
    WHERE `ansid` = '".$_SESSION['ansid']."'";

    $sql2 = "UPDATE answers2 set
    field349 = '$field349',
    field350 = '$field350',
    field303 = '$field303',
    field304 = '$field304',
    field351 = '$field351',
    field352 = '$field352',
    field353 = '$field353',
    field305 = '$field305',
    field354 = '$field354',
    field355 = '$field355',
    field356 = '$field356',
    field357 = '$field357',
    field358 = '$field358',
    field306 = '$field306',
    field307 = '$field307',
    field308 = '$field308',
    field309 = '$field309',
    field310 = '$field310',
    field311 = '$field311',
    field312 = '$field312',
    field313 = '$field313',
    field314 = '$field314',
    field315 = '$field315',
    field316 = '$field316',
    field317 = '$field317',
    field318 = '$field318',
    field319 = '$field319',
    field320 = '$field320',
    field321 = '$field321',
    field322 = '$field322',
    field323 = '$field323',
    field324 = '$field324',
    field325 = '$field325',
    field326 = '$field326',
    field327 = '$field327',
    field328 = '$field328',
    field329 = '$field329',
    field330 = '$field330',
    field331 = '$field331',
    field332 = '$field332',
    field333 = '$field333',
    field334 = '$field334',
    field335 = '$field335',
    field336 = '$field336',
    field337 = '$field337',
    field338 = '$field338'
    
    WHERE `ansid` = '".$_SESSION['ansid']."'";
    
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);
}

else{
 $query = "insert into answers2 values (".$_SESSION['ansidau'].",'".$_SESSION['userid']."','".$_SESSION['fid']."','".$_SESSION['fromy']."','".$_SESSION['toy']."','".$_SESSION['sem']."','$field270', '$field271', '$field272', '$field273', '$field274', '$field275', '$field276', '$field277', '$field278', '$field279', '$field280', '$field281', '$field282', '$field283', '$field284', '$field285', '$field286', '$field287', '$field288', '$field289', '$field290', '$field291', '$field292', '$field293', '$field294', '$field295', '$field296', '$field297', '$field298', '$field299', '$field300', '$field339', '$field340', '$field341', '$field342', '$field343', '$field344', '$field301', '$field302', '$field345', '$field346', '$field347', '$field348', '$field349', '$field350', '$field303', '$field304', '$field351', '$field352', '$field353', '$field305', '$field354', '$field355', '$field356', '$field357', '$field358', '$field306', '$field307', '$field308', '$field309', '$field310', '$field311', '$field312', '$field313', '$field314', '$field315', '$field316', '$field317', '$field318', '$field319', '$field320', '$field321', '$field322', '$field323', '$field324', '$field325', '$field326', '$field327', '$field328', '$field329', '$field330', '$field331', '$field332', '$field333', '$field334', '$field335', '$field336', '$field337', '$field338')";
 mysqli_query($conn,$query);
}
 header("Location: ./home.php");

 ?>
