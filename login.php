<?php 
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);

			if($uname == 'admin')
			{
				if ($row['username'] == $uname && $row['password'] == $pass) {
					$_SESSION['name'] = $row['name'];
					$_SESSION['loggedin']='TRUE';
					header("Location: admin.php");
					exit();
				}else{
					header("Location: index.php?error=Incorect User name or password");
					exit();
				}
			}

            else if ($row['username'] == $uname && $row['password'] == $pass) {
				$_SESSION['userid'] = $row['user_id'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['desig'] = $row['designation'];
            	$_SESSION['dept'] = $row['dept'];
            	$_SESSION['image'] = $row['picture'];
				$_SESSION['loggedin']='TRUE';
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php?error=unset");
	exit();
}