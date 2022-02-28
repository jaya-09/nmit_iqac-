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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <!--<body style="background-color: #1b2a47;">-->

  <body style="
      background-image: url('nmitbgcropped1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">

    <div>
      <div class="flex-container">
        <div id="logo">
          <img src="nmitlogo.jpeg" width="1920px" height="150px">
        </div>
        <div class="flex-container">
          <div class="card" style="width: 24rem;">
            <img class="card-img-top" src="Prof. N R Shetty, Advisor (1).jpg" alt="Card image cap" class="rounded-lg">
            <br>
            <h3> &nbsp &nbsp Prof. N R Shetty, Advisor</h3><br>

          </div>
          <div class="card" style="width: 24rem;">
            <img class="card-img-top" src="HCN.jpg" alt="Card image cap" class="rounded-lg"> <br>
            <h3> &nbsp &nbsp Dr H C Nagaraj, Principal</h3><br>

          </div>
          <div class="cards" style="width: 40rem;">
            <div class="wrapper">
              <!-- <form class="login">
                <form class="loginpage"> -->
                  <form action="./login.php" method="post">
                      <!--<h2 id="Iq" class="form-signin-heading">IQAC </h2> -->
                      <h5 id="Iq" class="form-signin-heading" style="color: aliceblue;">IQAC 
					  <!-- ?php echo "<script>console.log('Debug Objects: " . implode(',', $result) . "' );</script>"?> -->
					</h5>
                      <p style="font-size: 40px; color: white;  filter: drop-shadow(10px 10px 10px black); ">&nbsp &nbsp
                        &nbsp &nbsp <b>NMIT-AAAC Faculty Audit</b></p>

                      <div class="col-md-13 position-relative">

                        <div class="input-group has-validation">
                          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                          <input type="text" class="form-control" id="validationTooltipUsername" name="uname"
                            aria-describedby="validationTooltipUsernamePrepend" required placeholder="UserName" required="true">
                          <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                          </div>
                        </div>
                      </div> <br>
                      <!-- <input type="username" class="form-control" name="uname" placeholder="Username" required="true" /><br> -->
                      <input type="password" class="form-control" name="password" placeholder="Password" required="true" />

                      <!---- < a button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>  -->
                      <button class="btn btn-lg btn-primary btn-block" input type="submit"
                        role="button">Login</button>
                  </form>
            </div>
          </div>
          <div class="flex-container2" style="height: 10%;">
            <div class="card" style="width: 24rem; ">
              <img class="card-img-top" src="Mr.Rohit Punja.jpg" alt="Card image cap" class="rounded-lg"> <br>
              <h3>Mr.Rohit Punja,Administrator</h3><br>



            </div>
            <div class="card" style="width: 24rem;">
              <img class="card-img-top" src="Dr V Sridhar, Dean.jpg" alt="Card image cap" class="rounded-lg"> <br>
              <h3> &nbsp &nbsp &nbsp &nbsp Dr V Sridhar,Dean</h3><br>


            </div>
          </div>
        </div>
        <h4 id="names" style="color: white;padding: 45rem 0rem 0rem  45rem; "> Created by Lasya Sistla ,Jaya Shiva
          Darshini & Satvik A<br> Department of ISE </h4>
  </body>
</html>