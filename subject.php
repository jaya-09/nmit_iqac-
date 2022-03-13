<?php 
session_start(); 
include "db_conn.php";
session_start();

if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};
if (isset($_POST['Faculty name']) && isset($_POST['Faculty ID')&& isset($_POST['Designation']&& isset($_POST['Department']&& isset($_POST['Ay']))) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Facultyname = validate($_POST['Facultyname']);
	$FacultyID = validate($_POST['FacultyID']);
    $Designation = validate($_POST['Designation']);
	$Department = validate($_POST['Department']);
    $AY= validate($_POST['AY']);



	if (empty($uname)) {
		header("Location: index.php?error=facultynammeis required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=faculty id is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Facultyname'] === $Facultyname&& $row['Faculty ID'] === $FacultyID $row['Designation'] === $Designation&& $row['Department'] === $Department)===row['AY'] === $AY) {
            	$_SESSION['Facultyname'] = $row['Facultyname'];
            	$_SESSION['Faculty ID'] = $row['Faculty ID'];
            	$_SESSION['Designation'] = $row['Designation'];
                $_SESSION['Department'] = $row['Department'];
                $_SESSION['AY'] = $row['AY'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: home.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: home.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: home.php");
	exit();
}