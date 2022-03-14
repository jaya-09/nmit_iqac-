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
	}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="./homepage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body 
  style="background-image: url('./nmitbgcropped1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">
  <!--Banner-->
  <div class="mycontainer">
  <img src="nmitlogo.jpeg" width="100%" height="130vh">
  </div>

    <!--Images-->

  <div class="mycontainer">
    <div class="itemcont">

      <div class="card">
      <img class="card-img-top" src="Prof. N R Shetty, Advisor (1).jpg" alt="Card image cap" class="rounded-lg">
      <br>
      <h3>Prof. N R Shetty,<br> Advisor</h3>
      </div>
      
      <div class="card">
        <img class="card-img-top" src="HCN.jpg" alt="Card image cap" class="rounded-lg"> <br>
        <h3>Dr H C Nagaraj,<br> Principal</h3>
      </div>

    </div>

    <div class="itemcont2">

      <div class="Logfields">
        <h1 id="Iq" style="color: aliceblue;">IQAC </h1>
        <form action="./login.php" method="post">
        <p style="font-size: 40px; color: white;  margin-top:1vh;filter: drop-shadow(10px 10px 10px black); ">
        <b>NMIT-AAC Faculty Audit</b></p>

        <div class="input-group has-validation">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
          <input type="text" class="form-control" id="validationTooltipUsername" name="uname"
          aria-describedby="validationTooltipUsernamePrepend" required placeholder="UserName" required="true">
          <div class="invalid-tooltip">Please choose a unique and valid username.</div>
        </div>

        <input type="password" class="form-control" name="password" placeholder="Password" required="true" />
        <button class="btn btn-lg btn-primary btn-block" input type="submit"role="button">Login</button>
        </form>
      </div>
      <h4 id="names" style="color: white;"> Created by Jaya Shiva Darshini, Satvik A, Kalyan B, Lasya Sistla<br> Department of ISE </h4>

    </div>

    <div class = "itemcont3">

      <div class="card">
      <img class="card-img-top" src="Mr.Rohit Punja.jpg" alt="Card image cap" class="rounded-lg"> <br>
        <h3>Mr.Rohit Punja,<br>Administrator</h3>
      </div>
      
      <div class="card">
        <img class="card-img-top" src="Dr V Sridhar, Dean.jpg" alt="Card image cap" class="rounded-lg"> <br>
        <h3> Dr V Sridhar,<br>Dean</h3>
      </div>

    </div>
  </div>

  </body>
</html>