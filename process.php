<?php

    session_start();
    
include "db_conn.php";

    if($_SESSION['loggedin']!='TRUE'){
      header("Location: login-error.html");
      exit();
    };
    // error_reporting(0);

    $field1 = $_POST["1a1"];
    $field2 = $_POST["1a2"];
    $field3 = $_POST["1a3"];
    $field4 = $_POST["1a4"];

    $field5 = $_POST["1b1"];
    $field6 = $_POST["1b2"];
    $field7 = $_POST["1b3"];
    $field8 = $_POST["1b4"];

    $field9 = $_POST["1c1"];
    $field10 = $_POST["1c2"];
    $field11 = $_POST["1c3"];
    $field12 = $_POST["1c4"];


    $field13 = $_POST["2a1"];
    $field14 = $_POST["2a2"];
    $field15 = $_POST["2a3"];
    $field16 = $_POST["2a4"];

    $field17 = $_POST["2b1"];
    $field18 = $_POST["2b2"];
    $field19 = $_POST["2b3"];
    $field20 = $_POST["2b4"];

    $field21 = $_POST["2br"];


    $field22 = $_POST["3a1"];
    $field23 = $_POST["3a2"];
    $field24 = $_POST["3a3"];
    $field25 = $_POST["3a4"];

    $field26 = $_POST["3r"];


    $field27 = $_POST["4aa1"];
    $field28 = $_POST["4aa2"];
    $field29 = $_POST["4aa3"];
    $field30 = $_POST["4aa4"];

    $field31 = $_POST["4ab1"];
    $field32 = $_POST["4ab2"];
    $field33 = $_POST["4ab3"];
    $field34 = $_POST["4ab4"];

    $field35 = $_POST["4ac1"];
    $field36 = $_POST["4ac2"];
    $field37 = $_POST["4ac3"];
    $field38 = $_POST["4ac4"];

    $field39 = $_POST["4ad1"];
    $field40 = $_POST["4ad2"];
    $field41 = $_POST["4ad3"];
    $field42 = $_POST["4ad4"];

    $field43 = $_POST["4ae1"];
    $field44 = $_POST["4ae2"];
    $field45 = $_POST["4ae3"];
    $field46 = $_POST["4ae4"];

    $field47 = $_POST["4af1"];
    $field48 = $_POST["4af2"];
    $field49 = $_POST["4af3"];
    $field50 = $_POST["4af4"];

    $field51 = $_POST["4ag1"];
    $field52 = $_POST["4ag2"];
    $field53 = $_POST["4ag3"];
    $field54 = $_POST["4ag4"];

    $field55 = $_POST["4ah1"];
    $field56 = $_POST["4ah2"];
    $field57 = $_POST["4ah3"];
    $field58 = $_POST["4ah4"];

    $field59 = $_POST["4ar"];
    $field60 = $_POST["4ba1"];
    $field61 = $_POST["4ba2"];
    $field62 = $_POST["4ba3"];
    $field63 = $_POST["4ba4"];

    $field64 = $_POST["4bb1"];
    $field65 = $_POST["4bb2"];
    $field66 = $_POST["4bb3"];
    $field67 = $_POST["4bb4"];

    $field68 = $_POST["4bc1"];
    $field69 = $_POST["4bc2"];
    $field70 = $_POST["4bc3"];
    $field71 = $_POST["4bc4"];

    $field72 = $_POST["4bd1"];
    $field73 = $_POST["4bd2"];
    $field74 = $_POST["4bd3"];
    $field75 = $_POST["4bd4"];

    $field76 = $_POST["4be1"];
    $field77 = $_POST["4be2"];
    $field78 = $_POST["4be3"];
    $field79 = $_POST["4be4"];

    $field80 = $_POST["4bf1"];
    $field81 = $_POST["4bf2"];
    $field82 = $_POST["4bf3"];
    $field83 = $_POST["4bf4"];

    $field84 = $_POST["4br"];


    $field85 = $_POST["51"];

    $field86 = $_POST["5r"];


    $field87 = $_POST["6a1"];
    $field88 = $_POST["6a2"];
    $field89 = $_POST["6a3"];
    $field90 = $_POST["6a4"];

    $field91 = $_POST["6b1"];
    $field92 = $_POST["6b2"];
    $field93 = $_POST["6b3"];
    $field94 = $_POST["6b4"];

    $field95 = $_POST["6c1"];
    $field96 = $_POST["6c2"];
    $field97 = $_POST["6c3"];
    $field98 = $_POST["6c4"];

    $field99 = $_POST["6r1"];
    $field100 = $_POST["6r2"];
    $field101 = $_POST["6r3"];
    $field102 = $_POST["6r4"];


    $field103 = $_POST["7a1"];
    $field104 = $_POST["7a2"];
    $field105 = $_POST["7a3"];
    $field106 = $_POST["7a4"];

    $field107 = $_POST["7b1"];
    $field108 = $_POST["7b2"];
    $field109 = $_POST["7b3"];
    $field110 = $_POST["7b4"];

    $field111 = $_POST["7c1"];
    $field112 = $_POST["7c2"];
    $field113 = $_POST["7c3"];
    $field114 = $_POST["7c4"];

    $field115 = $_POST["7d1"];
    $field116 = $_POST["7d2"];
    $field117 = $_POST["7d3"];
    $field118 = $_POST["7d4"];

    $field119 = $_POST["7ra1"];
    $field120 = $_POST["7ra2"];
    $field121 = $_POST["7ra3"];
    $field122 = $_POST["7ra4"];

    $field123 = $_POST["7rb1"];
    $field124 = $_POST["7rb2"];
    $field125 = $_POST["7rb3"];
    $field126 = $_POST["7rb4"];


    $field127 = $_POST["81"];
    $field128 = $_POST["8r"];


    $field129 = $_POST["91a"];
    $field130 = $_POST["91r"];

    $field131 = $_POST["92a"];
    $field132 = $_POST["92r"];

    $field133 = $_POST["93a"];
    $field134 = $_POST["93r"];

    $field135 = $_POST["94a"];
    $field136 = $_POST["94r"];

    $field137 = $_POST["9r"];


    $field138 = $_POST["101"];
    $field139 = $_POST["102"];
    $field140 = $_POST["103"];
    $field141 = $_POST["104"];

    $field142 = $_POST["10r"];


    $field144 = $_POST["11an"];
    $field145 = $_POST["11a1"];
    $field146 = $_POST["11a2"];
    $field147 = $_POST["11a3"];
    $field148 = $_POST["11a4"];

    $field150 = $_POST["11bn"];
    $field151 = $_POST["11b1"];
    $field152 = $_POST["11b2"];
    $field153 = $_POST["11b3"];
    $field154 = $_POST["11b4"];

    $field156 = $_POST["11cn"];
    $field157 = $_POST["11c1"];
    $field158 = $_POST["11c2"];
    $field159 = $_POST["11c3"];
    $field160 = $_POST["11c4"];

    $field162 = $_POST["11dn"];
    $field163 = $_POST["11d1"];
    $field164 = $_POST["11d2"];
    $field165 = $_POST["11d3"];
    $field166 = $_POST["11d4"];

    $field167 = $_POST["11r"];


    $field168 = $_POST["12a1"];
    $field169 = $_POST["12a2"];
    $field171 = $_POST["12a3"];
    $field173 = $_POST["12a4"];

    $field175 = $_POST["12b1"];
    $field176 = $_POST["12b2"];
    $field177 = $_POST["12b3"];
    $field178 = $_POST["12b4"];

    $field179 = $_POST["12c1"];
    $field180 = $_POST["12c2"];
    $field181 = $_POST["12c3"];
    $field182 = $_POST["12c4"];

    $field183 = $_POST["12d1"];
    $field184 = $_POST["12d2"];
    $field185 = $_POST["12d3"];
    $field186 = $_POST["12d4"];

    $field187 = $_POST["12r"];


    $field188 = $_POST["13a1"];
    $field189 = $_POST["13a2"];
    $field190 = $_POST["13a3"];
    $field191 = $_POST["13a4"];

    $field192 = $_POST["13b1"];
    $field193 = $_POST["13b2"];
    $field194 = $_POST["13b3"];
    $field195 = $_POST["13b4"];

    $field196 = $_POST["13c1"];
    $field197 = $_POST["13c2"];
    $field198 = $_POST["13c3"];
    $field199 = $_POST["13c4"];

    $field200 = $_POST["13d1"];
    $field201 = $_POST["13d2"];
    $field202 = $_POST["13d3"];
    $field203 = $_POST["13d4"];
    
    $field204 = $_POST["13e1"];
    $field205 = $_POST["13e2"];
    $field206 = $_POST["13e3"];
    $field207 = $_POST["13e4"];

    $field208 = $_POST["13f1"];
    $field209 = $_POST["13f2"];
    $field210 = $_POST["13f3"];
    $field211 = $_POST["13f4"];

    $field212 = $_POST["131r"];
    $field213 = $_POST["132r"];
    $field214 = $_POST["133r"];
    $field215 = $_POST["134r"];

    $field216 = $_POST["13g1"];
    $field217 = $_POST["13g2"];
    $field218 = $_POST["13g3"];
    $field219 = $_POST["13g4"];

    $field220 = $_POST["13h1"];
    $field221 = $_POST["13h2"];
    $field222 = $_POST["13h3"];
    $field223 = $_POST["13h4"];

    $field224 = $_POST["13r"];


    $field225 = $_POST["14a1"];
    $field226 = $_POST["14a2"];
    $field227 = $_POST["14a3"];
    $field228 = $_POST["14a4"];

    $field229 = $_POST["14b1"];
    $field230 = $_POST["14b2"];
    $field231 = $_POST["14b3"];
    $field232 = $_POST["14b4"];

    $field233 = $_POST["14c1"];
    $field234 = $_POST["14c2"];
    $field235 = $_POST["14c3"];
    $field236 = $_POST["14c4"];

    $field237 = $_POST["14r"];


    $field238 = $_POST["15a"];

    $field239 = $_POST["15a"];
    $field143 = $_POST["15ar"];
    $field240 = $_POST["15b"];
    $field241 = $_POST["15br"];
    $field242 = $_POST["15c"];
    $field243 = $_POST["15cr"];
    $field244 = $_POST["15d"];
    $field245 = $_POST["15dr"];
    $field246 = $_POST["15e"];
    $field247 = $_POST["15er"];
    $field248 = $_POST["15f"];
    $field249 = $_POST["15fr"];
    $field250 = $_POST["15g"];
    $field251 = $_POST["15gr"];
    $field252 = $_POST["15h"];
    $field253 = $_POST["15hr"];
    $field254 = $_POST["15i"];
    $field255 = $_POST["15ir"];
    $field256 = $_POST["15j"];
    $field257 = $_POST["15jr"];
    $field258 = $_POST["15k"];
    $field259 = $_POST["15kr"];
    $field260 = $_POST["15l"];
    $field261 = $_POST["15lr"];
    $field262 = $_POST["15m"];
    $field263 = $_POST["15mr"];
    $field264 = $_POST["15n"];
    $field265 = $_POST["15nr"];
    $field266 = $_POST["15o"];
    $field267 = $_POST["15or"];
    $field268 = $_POST["15p"];
    $field269 = $_POST["15pr"];
    $field149 = $_POST["15r"];

    $_SESSION['csv_line'] = array();
date_default_timezone_set("Asia/Calcutta");

array_push($_SESSION['csv_line'],date("Y-m-d H:i:s"));
array_push($_SESSION['csv_line'],$_SESSION['name']);

array_push($_SESSION['csv_line'],"FACULTY DETAILS:");

    $fdeets = explode(",",$_SESSION['fdetails']);
    $subdeets = explode(",",$_SESSION['subdetails']);
    $keys = array();
    foreach( $fdeets as $deet ){
        array_push($_SESSION['csv_line'],$deet);
 
   }

   array_splice($_SESSION['csv_line'],count($_SESSION['csv_line'])-5,5);
   array_push($_SESSION['csv_line'],"SUBJECTS:");



    foreach( $subdeets as $deet ){
       array_push($_SESSION['csv_line'],$deet);
   }

    array_push($_SESSION['csv_line'],"TABLE1:");
 $_SESSION['keys1'] = array($field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$field9,$field10,$field11,$field12,$field13,$field14,$field15,$field16,$field17,$field18,$field19,$field20,$field21,$field22,$field23,$field24,$field25,$field26,$field27,$field28,$field29,$field30,$field31,$field32,$field33,$field34,$field35,$field36,$field37,$field38,$field39,$field40,$field41,$field42,$field43,$field44,$field45,$field46,$field47,$field48,$field49,$field50,$field51,$field52,$field53,$field54,$field55,$field56,$field57,$field58,$field59,$field60,$field61,$field62,$field63,$field64,$field65,$field66,$field67,$field68,$field69,$field70,$field71,$field72,$field73,$field74,$field75,$field76,$field77,$field78,$field79,$field80,$field81,$field82,$field83,$field84,$field85,$field86,$field87,$field88,$field89,$field90,$field91,$field92,$field93,$field94,$field95,$field96,$field97,$field98,$field99,$field100,$field101,$field102,$field103,$field104,$field105,$field106,$field107,$field108,$field109,$field110,$field111,$field112,$field113,$field114,$field115,$field116,$field117,$field118,$field119,$field120,$field121,$field122,$field123,$field124,$field125,$field126,$field127,$field128,$field129,$field130,$field131,$field132,$field133,$field134,$field135,$field136,$field137,$field138,$field139,$field140,$field141,$field142,$field144,$field145,$field146,$field147,$field148,$field150,$field151,$field152,$field153,$field154,$field156,$field157,$field158,$field159,$field160,$field162,$field163,$field164,$field165,$field166,$field167,$field168,$field169,$field171,$field173,$field175,$field176,$field177,$field178,$field179,$field180,$field181,$field182,$field183,$field184,$field185,$field186,$field187,$field188,$field189,$field190,$field191,$field192,$field193,$field194,$field195,$field196,$field197,$field198,$field199,$field200,$field201,$field202,$field203,$field204,$field205,$field206,$field207,$field208,$field209,$field210,$field211,$field212,$field213,$field214,$field215,$field216,$field217,$field218,$field219,$field220,$field221,$field222,$field223,$field224,$field225,$field226,$field227,$field228,$field229,$field230,$field231,$field232,$field233,$field234,$field235,$field236,$field237,$field238,$field239,$field143,$field240,$field241,$field242,$field243,$field244,$field245,$field246,$field247,$field248,$field249,$field250,$field251,$field252,$field253,$field254,$field255,$field256,$field257,$field258,$field259,$field260,$field261,$field262,$field263,$field264,$field265,$field266,$field267,$field268,$field269,$field149); 



 $_SESSION['csv_line'] = array_merge($_SESSION['csv_line'],$_SESSION['keys1']);


 foreach( $_SESSION['keys1'] as $key ){
     array_push($_SESSION['csv_line'],'' . $_GET[$key]);
 }
 array_splice($_SESSION['csv_line'],count($_SESSION['csv_line'])-240,240);
    array_push($_SESSION['csv_line'],"TABLE2:");

$semdetails = $_SESSION['sem'];



if($_SESSION['ansid'] != ""){

    $sql = "UPDATE answers1 set
    field1 = '$field1',
    field2 = '$field2',
    field3 = '$field3',
    field4 = '$field4',
    field5 = '$field5',
    field6 = '$field6',
    field7 = '$field7',
    field8 = '$field8',
    field9 = '$field9',
    field10 = '$field10',
    field11 = '$field11',
    field12 = '$field12',
    field13 = '$field13',
    field14 = '$field14',
    field15 = '$field15',
    field16 = '$field16',
    field17 = '$field17',
    field18 = '$field18',
    field19 = '$field19',
    field20 = '$field20',
    field21 = '$field21',
    field22 = '$field22',
    field23 = '$field23',
    field24 = '$field24',
    field25 = '$field25',
    field26 = '$field26',
    field27 = '$field27',
    field28 = '$field28',
    field29 = '$field29',
    field30 = '$field30',
    field31 = '$field31',
    field32 = '$field32',
    field33 = '$field33',
    field34 = '$field34',
    field35 = '$field35',
    field36 = '$field36',
    field37 = '$field37',
    field38 = '$field38',
    field39 = '$field39',
    field40 = '$field40',
    field41 = '$field41',
    field42 = '$field42',
    field43 = '$field43',
    field44 = '$field44',
    field45 = '$field45',
    field46 = '$field46',
    field47 = '$field47',
    field48 = '$field48',
    field49 = '$field49',
    field50 = '$field50',
    field51 = '$field51',
    field52 = '$field52',
    field53 = '$field53',
    field54 = '$field54',
    field55 = '$field55',
    field56 = '$field56',
    field57 = '$field57',
    field58 = '$field58',
    field59 = '$field59',
    field60 = '$field60',
    field61 = '$field61',
    field62 = '$field62',
    field63 = '$field63',
    field64 = '$field64',
    field65 = '$field65',
    field66 = '$field66',
    field67 = '$field67',
    field68 = '$field68',
    field69 = '$field69',
    field70 = '$field70',
    field71 = '$field71',
    field72 = '$field72',
    field73 = '$field73',
    field74 = '$field74',
    field75 = '$field75',
    field76 = '$field76',
    field77 = '$field77',
    field78 = '$field78',
    field79 = '$field79',
    field80 = '$field80',
    field81 = '$field81',
    field82 = '$field82',
    field83 = '$field83',
    field84 = '$field84',
    field85 = '$field85',
    field86 = '$field86',
    field87 = '$field87',
    field88 = '$field88',
    field89 = '$field89',
    field90 = '$field90',
    field91 = '$field91',
    field92 = '$field92',
    field93 = '$field93',
    field94 = '$field94',
    field95 = '$field95',
    field96 = '$field96',
    field97 = '$field97',
    field98 = '$field98',
    field99 = '$field99',
    field100 = '$field100',
    field101 = '$field101',
    field102 = '$field102',
    field103 = '$field103',
    field104 = '$field104',
    field105 = '$field105',
    field106 = '$field106',
    field107 = '$field107',
    field108 = '$field108',
    field109 = '$field109',
    field110 = '$field110',
    field111 = '$field111',
    field112 = '$field112',
    field113 = '$field113',
    field114 = '$field114',
    field115 = '$field115',
    field116 = '$field116',
    field117 = '$field117',
    field118 = '$field118',
    field119 = '$field119',
    field120 = '$field120'
    WHERE  
    `ansid` = '".$_SESSION['ansid']."'";
    
    $sql1 = "UPDATE answers1 set
    field121 = '$field121',
    field122 = '$field122',
    field123 = '$field123',
    field124 = '$field124',
    field125 = '$field125',
    field126 = '$field126',
    field127 = '$field127',
    field128 = '$field128',
    field129 = '$field129',
    field130 = '$field130',
    field131 = '$field131',
    field132 = '$field132',
    field133 = '$field133',
    field134 = '$field134',
    field135 = '$field135',
    field136 = '$field136',
    field137 = '$field137',
    field138 = '$field138',
    field139 = '$field139',
    field140 = '$field140',
    field141 = '$field141',
    field142 = '$field142',
    field144 = '$field144',
    field145 = '$field145',
    field146 = '$field146',
    field147 = '$field147',
    field148 = '$field148',
    field150 = '$field150',
    field151 = '$field151',
    field152 = '$field152',
    field153 = '$field153',
    field154 = '$field154',
    field156 = '$field156',
    field157 = '$field157',
    field158 = '$field158',
    field159 = '$field159',
    field160 = '$field160',
    field162 = '$field162',
    field163 = '$field163',
    field164 = '$field164',
    field165 = '$field165',
    field166 = '$field166',
    field167 = '$field167',
    field168 = '$field168',
    field169 = '$field169',
    field171 = '$field171',
    field173 = '$field173',
    field175 = '$field175',
    field176 = '$field176',
    field177 = '$field177',
    field178 = '$field178',
    field179 = '$field179',
    field180 = '$field180',
    field181 = '$field181',
    field182 = '$field182',
    field183 = '$field183',
    field184 = '$field184',
    field185 = '$field185',
    field186 = '$field186',
    field187 = '$field187',
    field188 = '$field188',
    field189 = '$field189',
    field190 = '$field190',
    field191 = '$field191',
    field192 = '$field192',
    field193 = '$field193',
    field194 = '$field194',
    field195 = '$field195',
    field196 = '$field196',
    field197 = '$field197',
    field198 = '$field198',
    field199 = '$field199',
    field200 = '$field200'
    WHERE  
    `ansid` = '".$_SESSION['ansid']."'";

    $sql2 = "UPDATE answers1 set
    field201 = '$field201',
    field202 = '$field202',
    field203 = '$field203',
    field204 = '$field204',
    field205 = '$field205',
    field206 = '$field206',
    field207 = '$field207',
    field208 = '$field208',
    field209 = '$field209',
    field210 = '$field210',
    field211 = '$field211',
    field212 = '$field212',
    field213 = '$field213',
    field214 = '$field214',
    field215 = '$field215',
    field216 = '$field216',
    field217 = '$field217',
    field218 = '$field218',
    field219 = '$field219',
    field220 = '$field220',
    field221 = '$field221',
    field222 = '$field222',
    field223 = '$field223',
    field224 = '$field224',
    field225 = '$field225',
    field226 = '$field226',
    field227 = '$field227',
    field228 = '$field228',
    field229 = '$field229',
    field230 = '$field230',
    field231 = '$field231',
    field232 = '$field232',
    field233 = '$field233',
    field234 = '$field234',
    field235 = '$field235',
    field236 = '$field236',
    field237 = '$field237',
    field238 = '$field238',
    field239 = '$field239',
    field143 = '$field143',
    field240 = '$field240',
    field241 = '$field241',
    field242 = '$field242',
    field243 = '$field243',
    field244 = '$field244',
    field245 = '$field245',
    field246 = '$field246',
    field247 = '$field247',
    field248 = '$field248',
    field249 = '$field249',
    field250 = '$field250',
    field251 = '$field251',
    field252 = '$field252',
    field253 = '$field253',
    field254 = '$field254',
    field255 = '$field255',
    field256 = '$field256',
    field257 = '$field257',
    field258 = '$field258',
    field259 = '$field259',
    field260 = '$field260',
    field261 = '$field261',
    field262 = '$field262',
    field263 = '$field263',
    field264 = '$field264',
    field265 = '$field265',
    field266 = '$field266',
    field267 = '$field267',
    field268 = '$field268',
    field269 = '$field269',
    field149 = '$field149'
    WHERE  
    `ansid` = '".$_SESSION['ansid']."'";

mysqli_query($conn, $sql);
echo "query run";
mysqli_query($conn, $sql1);
echo "query1 run";
mysqli_query($conn, $sql2);
echo "query2 run";




    $sqlx = "SELECT sem FROM answers1 WHERE `ansid` = '".$_SESSION['ansid']."'";
    $result1 = mysqli_query($conn, $sqlx);
    $semdetails = mysqli_fetch_assoc($result1)['sem'];
    // echo $semdetails;

}

$sql = "insert into answers1 values('','".$_SESSION['userid']."','".$_SESSION['fname']."','".$_SESSION['fid']."','".$_SESSION['fdept']."','".$_SESSION['fdesig']."','".$_SESSION['fromy']."','".$_SESSION['toy']."','".$_SESSION['sem']."','".$_SESSION['sub1']."','".$_SESSION['sub1c']."','".$_SESSION['sub2']."','".$_SESSION['sub2c']."','".$_SESSION['sub3']."','".$_SESSION['sub3c']."','".$_SESSION['sub4']."','".$_SESSION['sub4c']."','$field1','$field2','$field3','$field4','$field5','$field6','$field7','$field8','$field9','$field10','$field11','$field12','$field13','$field14','$field15','$field16','$field17','$field18','$field19','$field20','$field21','$field22','$field23','$field24','$field25','$field26','$field27','$field28','$field29','$field30','$field31','$field32','$field33','$field34','$field35','$field36','$field37','$field38','$field39','$field40','$field41','$field42','$field43','$field44','$field45','$field46','$field47','$field48','$field49','$field50','$field51','$field52','$field53','$field54','$field55','$field56','$field57','$field58','$field59','$field60','$field61','$field62','$field63','$field64','$field65','$field66','$field67','$field68','$field69','$field70','$field71','$field72','$field73','$field74','$field75','$field76','$field77','$field78','$field79','$field80','$field81','$field82','$field83','$field84','$field85','$field86','$field87','$field88','$field89','$field90','$field91','$field92','$field93','$field94','$field95','$field96','$field97','$field98','$field99','$field100','$field101','$field102','$field103','$field104','$field105','$field106','$field107','$field108','$field109','$field110','$field111','$field112','$field113','$field114','$field115','$field116','$field117','$field118','$field119','$field120','$field121','$field122','$field123','$field124','$field125','$field126','$field127','$field128','$field129','$field130','$field131','$field132','$field133','$field134','$field135','$field136','$field137','$field138','$field139','$field140','$field141','$field142','$field144','$field145','$field146','$field147','$field148','$field150','$field151','$field152','$field153','$field154','$field156','$field157','$field158','$field159','$field160','$field162','$field163','$field164','$field165','$field166','$field167','$field168','$field169','$field171','$field173','$field175','$field176','$field177','$field178','$field179','$field180','$field181','$field182','$field183','$field184','$field185','$field186','$field187','$field188','$field189','$field190','$field191','$field192','$field193','$field194','$field195','$field196','$field197','$field198','$field199','$field200','$field201','$field202','$field203','$field204','$field205','$field206','$field207','$field208','$field209','$field210','$field211','$field212','$field213','$field214','$field215','$field216','$field217','$field218','$field219','$field220','$field221','$field222','$field223','$field224','$field225','$field226','$field227','$field228','$field229','$field230','$field231','$field232','$field233','$field234','$field235','$field236','$field237','$field238','$field239','$field143','$field240','$field241','$field242','$field243','$field244','$field245','$field246','$field247','$field248','$field249','$field250','$field251','$field252','$field253','$field254','$field255','$field256','$field257','$field258','$field259','$field260','$field261','$field262','$field263','$field264','$field265','$field266','$field267','$field268','$field269','$field149')";


if($semdetails == "odd" || $semdetails == 0){
    $fname = 'data.csv'; 
    if(!file_exists($fname)){$csv_line = $csv_line."\r\n" ;}
    $fcon = fopen($fname,'a');
    fputcsv($fcon,$_SESSION['csv_line']);
    fclose($fcon);
    mysqli_query($conn, $sql);
    header("Location: ./home.php");
}

else{
 mysqli_query($conn, $sql);
 header("Location: ./table2.php");
}
 ?>