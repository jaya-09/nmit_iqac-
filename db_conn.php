 <?php



function OpenCon()
 {
 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "audit";

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }


 if ( $con=OpenCon()) {
	

	echo "Connection Success!";
	/*$sql = "show tables from audit";

		$result = mysqli_query($con, $sql);
		$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
} */

	/*$uname = "nmit@123";
	$pass = "audit1";

	if(empty($uname)) {
		echo "Location: index.php?error=User Name is required";
	    //exit();
	}else if(empty($pass)){
        echo "Location: index.php?error=Password is required";
	    //exit();
	}else{
		$sql = "SELECT * FROM details WHERE USERNAME='$uname' AND PASSWORD='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['USERNAME'] === $uname && $row['PASSWORD'] === $pass) {
            	
            	echo "Location: home.php";
		        //exit();
            }else{
				echo "Location: index.php?error=Incorect User name or password";
		        //exit();
			}
		}else{
			echo "Location: index.php?error=Incorect User name or password";
	        //exit();
		}
	}*/
}
else
 echo "Connection Failed";
   
?>