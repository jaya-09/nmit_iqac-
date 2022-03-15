<?php
session_start();
// error_reporting(0);

if($_SESSION['loggedin']!='TRUE'){
    header("Location: login-error.html");
    exit();
  };
include "db_conn.php";
$qry0 = "select changed from users where username='".$_SESSION['name']."'";
$result = mysqli_query($conn,$qry0);
$resultp = mysqli_fetch_array($result);

if($resultp[0] == 1)
{
    echo "<script type='text/javascript'>console.log('lol');</script>";
    header("Location: ./home.php");
}

?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password change</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- <link rel="stylesheet" href="./homepage.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    <body>
        <h1><center>Change password</center></h1><br>
        <form action="passchange.php" method="post">
            <center>
            <div style="max-width:20vw;">
        <div class="input-group has-validation">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
          <input type="text" class="form-control" id="validationTooltipUsername" name="cuname"
          aria-describedby="validationTooltipUsernamePrepend" required placeholder="UserName" required="true">
          <div class="invalid-tooltip">Please choose a unique and valid username.</div>
        </div>
        <input type="password" class="form-control" name="npassword" placeholder="New password" required="true" />
        <button class="btn btn-lg btn-primary btn-block" input type="submit"role="button">Change</button>
</div>
</center>
        </form>
</body>
</html>