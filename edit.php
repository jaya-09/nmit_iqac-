<?php
session_start();
include 'db_conn.php';

$query = "select * from answers1";
$cntQry = "select count(*) from information_schema.columns where table_name='answers1'";
// error_reporting(0);
$retval = mysqli_query($conn, $query);
$cntvl = mysqli_query($conn, $cntQry);
$count = mysqli_fetch_array($cntvl)[0];

$fieldarr = ['userid','fname','fid','fdesig','fdept','fromy','toy','sem',"sub1","sub1co","sub2","sub2co","sub3","sub3co","sub4","sub4co",'field1','field2','field3','field4','field5','field6','field7','field8','field9','field10','field11','field12','field13','field14','field15','field16','field17','field18','field19','field20','field21','field22','field23','field24','field25','field26','field27','field28','field29','field30','field31','field32','field33','field34','field35','field36','field37','field38','field39','field40','field41','field42','field43','field44','field45','field46','field47','field48','field49','field50','field51','field52','field53','field54','field55','field56','field57','field58','field59','field60','field61','field62','field63','field64','field65','field66','field67','field68','field69','field70','field71','field72','field73','field74','field75','field76','field77','field78','field79','field80','field81','field82','field83','field84','field85','field86','field87','field88','field89','field90','field91','field92','field93','field94','field95','field96','field97','field98','field99','field100','field101','field102','field103','field104','field105','field106','field107','field108','field109','field110','field111','field112','field113','field114','field115','field116','field117','field118','field119','field120','field121','field122','field123','field124','field125','field126','field127','field128','field129','field130','field131','field132','field133','field134','field135','field136','field137','field138','field139','field140','field141','field142','field144','field145','field146','field147','field148','field150','field151','field152','field153','field154','field156','field157','field158','field159','field160','field162','field163','field164','field165','field166','field167','field168','field169','field171','field173','field175','field176','field177','field178','field179','field180','field181','field182','field183','field184','field185','field186','field187','field188','field189','field190','field191','field192','field193','field194','field195','field196','field197','field198','field199','field200','field201','field202','field203','field204','field205','field206','field207','field208','field209','field210','field211','field212','field213','field214','field215','field216','field217','field218','field219','field220','field221','field222','field223','field224','field225','field226','field227','field228','field229','field230','field231','field232','field233','field234','field235','field236','field237','field238','field239','field143','field240','field241','field242','field243','field244','field245','field246','field247','field248','field249','field250','field251','field252','field253','field254','field255','field256','field257','field258','field259','field260','field261','field262','field263','field264','field265','field266','field267','field268','field269','field149'];
$corrFields = ['userid','fname','fid','fdesig','fdept','fromy','toy','sem',"sub1","sub1co","sub2","sub2co","sub3","sub3co","sub4","sub4co","1a1","1a2","1a3","1a4","1b1","1b2","1b3","1b4","1c1","1c2","1c3","1c4","2a1","2a2","2a3","2a4","2b1","2b2","2b3","2b4","2br","3a1","3a2","3a3","3a4","3r","4aa1","4aa2","4aa3","4aa4","4ab1","4ab2","4ab3","4ab4","4ac1","4ac2","4ac3","4ac4","4ad1","4ad2","4ad3","4ad4","4ae1","4ae2","4ae3","4ae4","4af1","4af2","4af3","4af4","4ag1","4ag2","4ag3","4ag4","4ah1","4ah2","4ah3","4ah4","4ar","4ba1","4ba2","4ba3","4ba4","4bb1","4bb2","4bb3","4bb4","4bc1","4bc2","4bc3","4bc4","4bd1","4bd2","4bd3","4bd4","4be1","4be2","4be3","4be4","4bf1","4bf2","4bf3","4bf4","4br","51","5r","6a1","6a2","6a3","6a4","6b1","6b2","6b3","6b4","6c1","6c2","6c3","6c4","6r1","6r2","6r3","6r4","7a1","7a2","7a3","7a4","7b1","7b2","7b3","7b4","7c1","7c2","7c3","7c4","7d1","7d2","7d3","7d4","7ra1","7ra2","7ra3","7ra4","7rb1","7rb2","7rb3","7rb4","81","8r","91a","91r","92a","92r","93a","93r","94a","94r","9r","101","102","103","104","10r","11an","11a1","11a2","11a3","11a4","11bn","11b1","11b2","11b3","11b4","11cn","11c1","11c2","11c3","11c4","11dn","11d1","11d2","11d3","11d4","11r","12a1","12a2","12a3","12a4","12b1","12b2","12b3","12b4","12c1","12c2","12c3","12c4","12d1","12d2","12d3","12d4","12r","13a1","13a2","13a3","13a4","13b1","13b2","13b3","13b4","13c1","13c2","13c3","13c4","13d1","13d2","13d3","13d4","13e1","13e2","13e3","13e4","13f1","13f2","13f3","13f4","131r","132r","133r","134r","13g1","13g2","13g3","13g4","13h1","13h2","13h3","13h4","13r","14a1","14a2","14a3","14a4","14b1","14b2","14b3","14b4","14c1","14c2","14c3","14c4","14r","15a","15a","15ar","15b","15br","15c","15cr","15d","15dr","15e","15er","15f","15fr","15g","15gr","15h","15hr","15i","15ir","15j","15jr","15k","15kr","15l","15lr","15m","15mr","15n","15nr","15o","15or","15p","15pr","15r"];


while($row = mysqli_fetch_row($retval))
{
    $i = 17;
    while($i < $count){
        $corrvalue = $row[$i];
        echo "
        <script>
            var corr = document.getElementsByName(corrFields[i]);
            if(corr[0].type == 'radio'){
                $corrvalue == 'option1' ? corr[0].checked = true : corr[1].checked = true;
            }
            else if (corr[0].type == 'checkbox') {
                corr[0].checked = true;
            }

        </script>
        ";
    }
}

?>
<html>
<body>
</body>
</html>