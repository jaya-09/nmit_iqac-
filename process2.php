<?php
    error_reporting(0);

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

    $field301 = $_POST["18d"];


    $field302 = $_POST["19a"];
    $field303 = $_POST["19b"];
    $field304 = $_POST["19c"];
    $field305 = $_POST["19d"];
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




 $keys = array($field1, 
$csv_line = $keys;
 foreach( $keys as $key ){
     array_push($csv_line,'' . $_GET[$key]);

 }
 $fname = 'data.csv'; 
 if(!file_exists($fname)){$csv_line = $csv_line."\r\n" ;}
 $fcon = fopen($fname,'a');
 fputcsv($fcon,$fcontent);
 fclose($fcon);

//  header("Location: ./table2.php");
 ?>