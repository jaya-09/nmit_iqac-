<?php
session_start();
include "db_conn.php";
error_reporting(0);
session_start();

if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};
?>


<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       
    </head>

    <body style="
      background-image: url('bg-with_white_header.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">

        <!-- ======= Hero Section ======= -->



        <h2 class="animate__animated animate__fadeInDown"
            style="text-align: center;padding-top: 15%; color: aliceblue;">Welcome
            <span>ADMIN</span>
        </h2>
        <div style="text-align: center; padding-top: 2%;">
            <a href="./responses.php"><button type="button" class="btn btn-outline-warning" style="margin: 1em; padding: 1em 2em;">View
                Responses</button></a>
            <button type="button" class="btn btn-outline-warning" style="margin: 1em; padding: 1em 2em;">Edit
                Responses</button>
            <button type="button" class="btn btn-outline-warning" style="margin: 1em; padding: 1em 2em;">Delete
                Responses</button>
            <button type="button" class="btn btn-outline-warning" style="margin: 1em; padding: 1em 2em;">View
                Questions</button>


        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>

</html>
