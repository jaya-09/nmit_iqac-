<?php 
	require "db_conn.php";
	session_start();
	
	$sql = "SELECT * from users";
	$result = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($result);
	function console_log($data) {
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);
	
		// echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>login_page</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <!--<body style="background-color: #1b2a47;">-->

  <body style="
      background-image: url('nmitbgcropped1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">
  <div class="container">
    <div>
  <img src="nmitlogo.jpeg" width="100%" height="150px">
</div>
  <div class="flex-container">
          <div class="card" style="width: 24rem;">
            <img class="card-img-top" src="Prof. N R Shetty, Advisor (1).jpg" alt="Card image cap" class="rounded-lg">
            <br>
            <h3> &nbsp &nbsp Prof. N R Shetty, Advisor</h3><br>

          </div>
</div>
  </div>
        <h4 id="names" style="color: white;"> Created by Jaya Shiva Darshini, Satvik A, Kalyan B, Lasya Sistla<br> Department of ISE </h4>
  </body>
</html>