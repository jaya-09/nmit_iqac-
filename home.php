<?php 
session_start();

if($_SESSION['loggedin']!='TRUE'){
  header("Location: login-error.html");
  exit();
};
include 'db_conn.php';


echo "<script>console.log('".$_SESSION['userid']."');</script>";
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="stylesdash.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css'>
    <link rel="stylesheet" href="year.css">
    <link rel="stylesheet" href="sliderdash.css">


  </head>

  <body style="background-color: #1b2a47">
    <div class="container-fluid documentation">
      <div class="row">
        <div class="col-md-3 col-xl-2 left-sidebar">
          <div class="logo-wrapper">
            <img src="NMITlogo1.jpg" alt="Paris" style="width:180px"><br><br>
            <?php echo "<img src='$_SESSION[image]' alt='auditor image' style='width: 200px;'>"; ?>
          </div>
          <br>
          <h3 class="left-menu-title" style="color: white;">Name: <?php echo $_SESSION['name'];?> </h3>

          <h4 class="left-menu-title" style="color: white;" style="font-size: 400%;">Designation : <?php echo $_SESSION['desig'];?>
          </h4>
          <h4 class="left-menu-title" style="color: white;">Department: <?php echo $_SESSION['dept'];?></h4>
          <button class="btn btn-primary" onclick="location.href='./change.php';">Change password</button>
        </div>
        <div class="col-md-9 col-xl-10 main-panel bg-white">
          <div class="main-panel-wrapper">
            <h2 class="mt-2 text-center  text-uppercase mb-4" style="background-color: #1b2a47 ; color: white" ;>
              Faculty Audit</h2>

            <div class="text-right">
              <a button type="button" class="btn btn-primary"
                href="./logout.php">Logout</button></a>
            </div>
<form action="./fdetails.php" method="post">
            <div class="card grid-margin">
              <div class="card-body">
                <h3 id="introduction" class="mb-4">Faculty details </h3>

                <div class="input-group mb-3">
                  <button type="button" class="btn btn-secondary">Faculty Name</button>
                  <input name="fname" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default"  required="true">
                </div>
                <div class="input-group mb-3">
                  <button type="button" class="btn btn-secondary" >Faculty ID</button>
                  <input name="fid" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" required="true">
                </div>


                <div class="input-group mb-2">
                  <button type="button" class="btn btn-secondary" >Designation</button>
                  <select name="fdesig" class="custom-select" id="inputGroupSelect01" required="true" >
                    <option selected>Select an Option</option>
                    <option value="1">Professor</option>
                    <option value="2">Associate Professor</option>
                    <option value="3">Assistant Professor</option>
                  </select>
                </div>


                <div class="input-group mb-3">
                  <button type="button" class="btn btn-secondary" >Department</button>
                  <select name="fdept" class="custom-select" id="inputGroupSelect01" required="true" >
                    <option selected>Select an Option</option>
                    <option value="1">Aeronautical Engineering</option>
                    <option value="2">Artificial Intelligence & Data Science</option>
                    <option value="3">Artificial Intelligence & Machine Learning </option>
                    <option value="4">Civil Engineering</option>
                    <option value="5">Computer Science Engineering</option>
                    <option value="6">Electrical & Electronics Engineering</option>
                    <option value="7">Electronics & Communication Engineering</option>
                    <option value="8">Information Science & Engineering</option>
                    <option value="9">Mechanical Engineering</option>
                    <option value="10">MBA</option>
                    <option value="11">MCA</option>

                  </select>
                </div>



                <div class="card grid-margin">
                  <div class="card-body">
                    <h3 id="fileStructure" class="mb-4">Academic Year</h3>
                    <div class="input-group input-group-lg" style="text-align: center; width: 60%; padding-top: 1%">
                      <div class="input-group-prepend">
                        <span class="input-group-text" style="background-color:#6c757d;color: white;"
                          id="inputGroup-sizing-lg">AY
                        </span>
                      </div>
                      <input class="date-own form-control" name="fromy" style="width: 150 px;" type="text" placeholder="From"
                        required="true">
                      <input class="date-own form-control" name="toy" style="width: 150 px;" type="text" placeholder="To"
                        required="true">
                    </div>
                  </div>
                  <div class="input-group input-group-lg" style="text-align: center; width: 60%; padding-top: 1%">
                    <div class="input-group-prepend">
                      <div class="container">
                        <div class="radio_container" reqired="true">
                          <input type="radio" name="sem" value="odd" id="one" checked>
                          <label for="one">odd</label>
                          <input type="radio" name="sem" value="even" id="two">
                          <label for="two">even</label>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container">

                    <div style="text-align:center">

                      <button type="submit" class="btn btn-primary btn-lg" href="./subjectdetails.html" role="button"
                        style="align-items: center; margin:auto;">Save & Next
                      </button>
                      <!-- 192.168.25.16 -->


                    </div>
                  </div>

                  <br>

                </div>
                </div>
            </div><br>

                <div class="card grid-margin">
                <div class="card-body">
                    <h3 id="fileStructure" class="mb-4">Previous entries</h3>
                    <table class="table table-striped">
                      <thead class = "thead-dark">
                      <th>
                        Faculty Name
                      </th>
                      <th>
                        Faculty ID
                      </th>
                      <th>
                        Academic Year
                      </th>
                      <th>
                        Semester
                      </th>
                      
                      <th>
                      </th>
</thead>
                      <?php
                      $sql = "SELECT * FROM answers1 where userid='".$_SESSION['userid']."'";
                      $result = mysqli_query($conn, $sql);
                      // if (count($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>";
                          echo $row['fname'];
                          echo "</td>";
                          echo "<td>";
                          echo $row['fid'];
                          echo "</td>";
                          echo "<td>";
                          echo $row['fromy'] . "-" . $row['toy'];
                          echo "</td>";
                          echo "<td>";
                          echo $row['sem'];
                          echo "</td>";
                          echo "<td>";
                          echo "<a href='./table1.php?id=".$row['ansid']."'><button type='button' class='btn btn-primary'>Edit</button></a>";
                          echo "</td>";
                          echo "</tr>";
                        }
                      // }
                      ?>
                </table>
                </div>
                </div>



          </div>
        </div>

</form>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/mode/python/python.min.js"></script>
        <script src="script.js"></script>
        <!-- partial -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
        <script
          src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js'></script>
        <script src="year.js"></script>

  </body>

</html>


