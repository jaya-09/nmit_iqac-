<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page 1</title>
    <link href="styl.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  </head>

  <body style="
      background-image: url('bg1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">

    <div class="flex-container">
      <div id="logo">
        <img src="NMIT Header.jpg" width="1900px" height="150px">



      </div>
      <!--
  <div class="wrapper">
  
    <div class="row">
      <div class="col">
        <span class="input-group-text" id="inputGroup-sizing-lg">SUBJECT1</span>

        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-xl">
      </div>
      <div class="col">
        <span class="input-group-text" id="inputGroup-sizing-lg">SUBJECT2</span>

        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-xl">
      </div>
      <div class="col">
        <span class="input-group-text" id="inputGroup-sizing-lg">SUBJECT3</span>

        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-xl">
      </div>
      <div class="col">
        <span class="input-group-text" id="inputGroup-sizing-lg">SUBJECT4</span>

        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-xl">
      </div>

    -->
    </div>


    </div>



    </div>

    <div class="flex-containers">
<form action="process.php" method="post">
      <table class="tg" style="table-layout: fixed; width: 1479px">
        <colgroup>
          <col style="width: 50px">
          <col style="width: 583px">
          <col style="width: 81px">
          <col style="width: 81px">
          <col style="width: 80px">
          <col style="width: 81px">
          <col style="width: 81px">
          <col style="width: 81px">
          <col style="width: 80px">
          <col style="width: 81px">
        </colgroup>
        <thead>
          <tr style="background-color:#84cdee;">
            <th class="tg-0pky" style="font-weight: bold;">S.no</th>
            <th class="tg-0pky" style="font-weight: bold;">Questions</th>
            <th class="tg-c3ow" colspan="4" style="font-weight: bold;">Choose the Appropriate One</th>
            <form action="option1.php" method="post">
          </tr>
        </thead>
        <tbody>
          <!--1st QUESTION -->
          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">1</td>
            <td class="tg-0pky" style="font-weight: bold;">Lesson plan</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1">Subject1</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1">Subject2</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1">Subject3</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1">Subject4</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">a. Uniformity in breakup of contents in each unit with reference to number of
              hours allotted.</td>
            <td class="tg-0pky">
              <div class="form-check">


                <input class="form-check-input" type="radio" name="1a1" id="1a1" value="option1">
                <label class="form-check-label" for="1a1">

                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a1" id="1a12" value="option2">
                <label class="form-check-label" for="1a12">
                  NO
                </label>

              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a2" id="1a2" value="option1">
                <label class="form-check-label" for="1a2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a2" id="1a22" value="option2">
                <label class="form-check-label" for="1a22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a3" id="1a3" value="option1">
                <label class="form-check-label" for="1a3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a3" id="1a33" value="option2">
                <label class="form-check-label" for="1a33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a4" id="1a4" value="option1">
                <label class="form-check-label" for="1a4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a4" id="1a44" value="option2">
                <label class="form-check-label" for="1a44">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">b. Proposed cumulative percentage of portions covered</td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b1" id="1b1" value="option1">
                <label class="form-check-label" for="1b1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b1" id="1b11" value="option2">
                <label class="form-check-label" for="1b11">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b2" id="1b2" value="option1">
                <label class="form-check-label" for="1b2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b2" id="1b22" value="option2">
                <label class="form-check-label" for="1b22">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b3" id="1b3" value="option1">
                <label class="form-check-label" for="1b3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b3" id="1b33" value="option2">
                <label class="form-check-label" for="1b33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b4" id="1b4" value="option1">
                <label class="form-check-label" for="1b4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b4" id="1b44" value="option2">
                <label class="form-check-label" for="1b44">
                  NO
                </label>
              </div>
            </td>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">c. Distribution of portions against MSE with reference to
              Units
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c1" id="1c1" value="option1">
                <label class="form-check-label" for="1c1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c1" id="1c11" value="option2">
                <label class="form-check-label" for="1c11">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1c2" id="1c2"
                  value="option1">
                <label class="form-check-label" for="1c2">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1c2" id="1c22"
                  value="option2">
                <label class="form-check-label" for="1c22">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c3" id="1c3" value="option1">
                <label class="form-check-label" for="1c3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c3" id="1c33" value="option2">
                <label class="form-check-label" for="1c33">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c4" id="1c4" value="option1">
                <label class="form-check-label" for="1c4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c4" id="1c44" value="option2">
                <label class="form-check-label" for="1c44">
                  NO
                </label>
              </div>

            </td>
            </td>



            <!--second question-->








          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">2</td>
            <td class="tg-0pky" style="font-weight: bold;">Work done Diary</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject1</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject2</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject3</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">a.Lesson plan and work diary is mapping with reference to time taken and portions
              covered.
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a1" id="2a11" value="option1">
                <label class="form-check-label" for="2a11">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a1" id="2a11" value="option2">
                <label class="form-check-label" for="2a11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a2" id="2a2" value="option1">
                <label class="form-check-label" for="2a2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a2" id="2a22" value="option2">
                <label class="form-check-label" for="2a22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a3" id="2a3" value="option1">
                <label class="form-check-label" for="2a3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a3" id="2a33" value="option2">
                <label class="form-check-label" for="2a33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a4" id="2a4" value="option1">
                <label class="form-check-label" for="2a4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a4" id="2a44" value="option2">
                <label class="form-check-label" for="2a44">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">b. Deviations,if any </td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b1" id="2b1" value="option1">
                <label class="form-check-label" for="2b1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b1" id="2b11" value="option2">
                <label class="form-check-label" for="2b11">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b2" id="2b2" value="option1">
                <label class="form-check-label" for="2b2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b2" id="2b22" value="option2">
                <label class="form-check-label" for="2b22">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b3" id="2b3" value="option1">
                <label class="form-check-label" for="2b3">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b3" id="2b33" value="option2">
                <label class="form-check-label" for="2b33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b4" id="2b4" value="option1">
                <label class="form-check-label" for="2b4">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b4" id="2b44" value="option2">
                <label class="form-check-label" for="2b44">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="2br" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              

            </td>
          </tr>

          <!--3rd QUESTION-->

          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">3</td>
            <td class="tg-0pky" style="font-weight: bold;">ATTENDANCE REGISTER</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject1</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject2</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject3</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">a.Whether the attendance is monitored regularly in the classroom.</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a1" id="3a1" value="option1">
                <label class="form-check-label" for="3a1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a1" id="3a11" value="option2">
                <label class="form-check-label" for="3a11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a2" id="3a2" value="option1">
                <label class="form-check-label" for="3a2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a2" id="3a22" value="option2">
                <label class="form-check-label" for="3a22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a3" id="3a3" value="option1">
                <label class="form-check-label" for="3a3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a3" id="3a33" value="option2">
                <label class="form-check-label" for="3a33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a4" id="3a4" value="option1">
                <label class="form-check-label" for="3a4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a4" id="3a44" value="option2">
                <label class="form-check-label" for="3a44">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="3r" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              

            </td>
          </tr>




          <!--4th question-->

          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">4</td>
            <td class="tg-0pky" style="font-weight: bold;"> a. Student centric activities such as the following are the
              part of the day-to-day
              teaching-learning of the course</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject1</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject2</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject3</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Course project.</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa1" id="4aa1" value="option1">
                <label class="form-check-label" for="4aa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa1" id="4aa11" value="option2">
                <label class="form-check-label" for="4aa11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa2" id="4aa2" value="option1">
                <label class="form-check-label" for="4aa2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa2" id="4aa22" value="option2">
                <label class="form-check-label" for="4aa22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa3" id="4aa3" value="option1">
                <label class="form-check-label" for="4aa3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa3" id="4aa33" value="option2">
                <label class="form-check-label" for="4aa33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa4" id="4aa4" value="option1">
                <label class="form-check-label" for="4aa4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa4" id="4aa44" value="option2">
                <label class="form-check-label" for="4aa44">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Case Studies</td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab1" id="4ab1" value="option1">
                <label class="form-check-label" for="4ab1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab1" id="4ab11" value="option2">
                <label class="form-check-label" for="4ab11">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab2" id="4ab2" value="option1">
                <label class="form-check-label" for="4ab2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab2" id="4ab22" value="option2">
                <label class="form-check-label" for="4ab22">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab3" id="4ab3" value="option1">
                <label class="form-check-label" for="4ab3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab3" id="4ab33" value="option2">
                <label class="form-check-label" for="4ab33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab4" id="4ab4" value="option1">
                <label class="form-check-label" for="4ab4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab4" id="4ab44" value="option2">
                <label class="form-check-label" for="4ab44">
                  NO
                </label>
              </div>
            </td>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"> Seminars
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac1" id="4ac1" value="option1">
                <label class="form-check-label" for="4ac1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac1" id="4ac11" value="option2">
                <label class="form-check-label" for="4ac11">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4ac2" id="4ac2"
                  value="option1">
                <label class="form-check-label" for="4ac2">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4ac2" id="4ac22"
                  value="option2">
                <label class="form-check-label" for="4ac22">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac3" id="4ac3">
                <label class="form-check-label" for="4ac3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac3" id="4ac33">
                <label class="form-check-label" for="4ac33">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac4" id="4ac4" value="option1">
                <label class="form-check-label" for="4ac4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac4" id="4ac44" value="option2">
                <label class="form-check-label" for="4ac44">
                  NO
                </label>
              </div>

            </td>
            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"> Written Assignments</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad1" id="4ad1" value="option1">
                <label class="form-check-label" for="4ad1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad1" id="4ad11" value="option2">
                <label class="form-check-label" for="4ad11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad2" id="4ad22" value="option1">
                <label class="form-check-label" for="4ad22">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad2" id="4ad2" value="option2">
                <label class="form-check-label" for="4ad2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad3" id="4ad3" value="option1">
                <label class="form-check-label" for="4ad3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad3" id="4ad33" value="option2">
                <label class="form-check-label" for="4ad33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad4" id="4ad4" value="option1">
                <label class="form-check-label" for="4ad4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad4" id="4ad44" value="option2">
                <label class="form-check-label" for="4ad44">
                  NO
                </label>
              </div>
            </td>
          </tr>


          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">PROGRAMMING ASSIGNMENTS</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae1" id="4ae1" value="option1">
                <label class="form-check-label" for="4ae1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae1" id="4ae11" value="option2">
                <label class="form-check-label" for="4ae11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae2" id="4ae2" value="option1">
                <label class="form-check-label" for="4ae2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae2" id="4ae22" value="option2">
                <label class="form-check-label" for="4ae22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae3" id="4ae3" value="option1">
                <label class="form-check-label" for="4ae3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae3" id="4ae33" value="option2">
                <label class="form-check-label" for="4ae33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae4" id="4ae4" value="option1">
                <label class="form-check-label" for="4ae4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae4" id="4ae44" value="option2">
                <label class="form-check-label" for="4ae44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">TUTORIALS</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af1" id="4af1" value="option1">
                <label class="form-check-label" for="4af1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af1" id="4af11" value="option2">
                <label class="form-check-label" for="4af11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af2" id="4af2" value="option1">
                <label class="form-check-label" for="4af2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af2" id="4af22" value="option2">
                <label class="form-check-label" for="4af22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af3" id="4af3" value="option1">
                <label class="form-check-label" for="4af3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af3" id="4af33" value="option2">
                <label class="form-check-label" for="4af33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af4" id="4af4" value="option1">
                <label class="form-check-label" for="4af4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af4" id="4af44" value="option2">
                <label class="form-check-label" for="4af44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">GATE BASED MCQ'S</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag1" id="4ag1" value="option1">
                <label class="form-check-label" for="4ag1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag1" id="4ag11" value="option2">
                <label class="form-check-label" for="4ag11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag2" id="4ag2" value="option1">
                <label class="form-check-label" for="4ag2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag2" id="4ag22" value="option2">
                <label class="form-check-label" for="4ag22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag3" id="4ag3" value="option1">
                <label class="form-check-label" for="4ag3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag3" id="4ag33" value="option2">
                <label class="form-check-label" for="4ag33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag4" id="4ag4" value="option1">
                <label class="form-check-label" for="4ag4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag4" id="4ag44" value="option2">
                <label class="form-check-label" for="4ag44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">OPEN BOOK TEST</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah1" id="4ah1" value="option1">
                <label class="form-check-label" for="4ah1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah1" id="4ah11" value="option2">
                <label class="form-check-label" for="4ah11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah2" id="4ah2" value="option1">
                <label class="form-check-label" for="4ah2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah2" id="4ah22" value="option2">
                <label class="form-check-label" for="4ah22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah3" id="4ah3" value="option1">
                <label class="form-check-label" for="4ah3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah3" id="4ah33" value="option2">
                <label class="form-check-label" for="4ah33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah4" id="4ah4" value="option1">
                <label class="form-check-label" for="4ah4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah4" id="4ah44" value="option2">
                <label class="form-check-label" for="4ah44">
                  NO
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="4ar" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              

            </td>
          </tr>
          <!--4b-->



          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">4</td>
            <td class="tg-0pky" style="font-weight: bold;"> b. Above mentioned student centric activities fulfils the
              present-day requirements in
              terms of:</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject1</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject2</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject3</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td>
          </tr>
          <tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Present Industry need</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba1" id="4ba1"
                  value="option1">
                <label class="form-check-label" for="4ba1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba1" id="4ba11"
                  value="option2">
                <label class="form-check-label" for="4ba11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba2" id="4ba2" value="option1">
                <label class="form-check-label" for="4ba2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba2" id="4ba22" value="option2">
                <label class="form-check-label" for="4ba22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba3" id="4ba3" value="option1">
                <label class="form-check-label" for="4ba3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba3" id="4ba33" value="option2">
                <label class="form-check-label" for="4ba33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba4" id="4ba4" value="option1">
                <label class="form-check-label" for="4ba4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba4" id="4ba44" value="option2">
                <label class="form-check-label" for="4ba44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Market trend</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb1" id="4bb1"
                  value="option1">
                <label class="form-check-label" for="4bb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb1" id="4bb11"
                  value="option2">
                <label class="form-check-label" for="4bb11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb2" id="4bb2" value="option1">
                <label class="form-check-label" for="4bb2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb2" id="4bb22" value="option2">
                <label class="form-check-label" for="4bb22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb3" id="4bb3" value="option1">
                <label class="form-check-label" for="4bb3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb3" id="4bb33" value="option2">
                <label class="form-check-label" for="4bb33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb4" id="4bb4" value="option1">
                <label class="form-check-label" for="4bb4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb4" id="4bb44" value="option2">
                <label class="form-check-label" for="4bb44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Research opportunity</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc1" id="4bc1"
                  value="option1">
                <label class="form-check-label" for="4bc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc1" id="4bc11"
                  value="option2">
                <label class="form-check-label" for="4bc11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc2" id="4bc2" value="option1">
                <label class="form-check-label" for="4bc2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc2" id="4bc22" value="option2">
                <label class="form-check-label" for="4bc22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc3" id="4bc3" value="option1">
                <label class="form-check-label" for="4bc3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc3" id="4bc33" value="option2">
                <label class="form-check-label" for="4bc33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc4" id="4bc4" value="option1">
                <label class="form-check-label" for="4bc4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc4" id="4bc44" value="option2">
                <label class="form-check-label" for="4bc44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Placement support</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd1" id="4bd1"
                  value="option1">
                <label class="form-check-label" for="4bd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd1" id="4bd11"
                  value="option2">
                <label class="form-check-label" for="4bd11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd2" id="4bd2" value="option1">
                <label class="form-check-label" for="4bd2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd2" id="4bd22" value="option2">
                <label class="form-check-label" for="4bd22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd3" id="4bd3" value="option1">
                <label class="form-check-label" for="4bd3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd3" id="4bd33" value="option2">
                <label class="form-check-label" for="4bd33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd4" id="4bd4" value="option1">
                <label class="form-check-label" for="4bd4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd4" id="4bd44" value="option2">
                <label class="form-check-label" for="4bd44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Technology Support</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be1" id="4be1"
                  value="option1">
                <label class="form-check-label" for="4be1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be1" id="4be11"
                  value="option2">
                <label class="form-check-label" for="4be11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be2" id="4be2" value="option1">
                <label class="form-check-label" for="4be2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be2" id="4be22" value="option2">
                <label class="form-check-label" for="4be22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be3" id="4be3" value="option1">
                <label class="form-check-label" for="4be3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be3" id="4be33" value="option2">
                <label class="form-check-label" for="4be33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be4" id="4be4" value="option1">
                <label class="form-check-label" for="4be4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be4" id="4be44" value="option2">
                <label class="form-check-label" for="4be44">
                  NO
                </label>
              </div>
            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Promotion to higher studies</td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf1" id="4bf1"
                  value="option1">
                <label class="form-check-label" for="4bf1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf1" id="4bf11"
                  value="option2">
                <label class="form-check-label" for="4bf11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf2" id="4bf2" value="option1">
                <label class="form-check-label" for="4bf2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf2" id="4bf22" value="option2">
                <label class="form-check-label" for="4bf22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf3" id="4bf3" value="option1">
                <label class="form-check-label" for="4bf3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf3" id="4bf33" value="option2">
                <label class="form-check-label" for="4bf33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf4" id="4bf4" value="option1">
                <label class="form-check-label" for="4bf4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf4" id="4bf44" value="option2">
                <label class="form-check-label" for="4bf44">
                  NO
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="4br" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              

            </td>
          </tr>

          <!--5th QUESTION-->


          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">5</td>
            <td class="tg-0pky" style="font-weight: bold;">Have you found any innovations in the delivery methods other
              than Blackboard Teaching,
              Videos, PPTs etc. </td>
            <td class="tg-0pky" colspan="4">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="51" id="51" value="option1">
                <label class="form-check-label" for="51">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="51" id="511" value="option2">
                <label class="form-check-label" for="511">
                  NO
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5">If yes, Give Details
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="5r" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              

            </td>
          </tr>


          <!--6th question-->
          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">6</td>
            <td class="tg-0pky" style="font-weight: bold;">TUTORIALS</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject1</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject2</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject3</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td>
          </tr>



          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">a.Whether Tutorial is part of the course
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a1" id="6a1" value="option1">
                <label class="form-check-label" for="6a1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a1" id="6a11" value="option2">
                <label class="form-check-label" for="6a11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a2" id="6a2" value="option1">
                <label class="form-check-label" for="6a2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a2" id="6a22" value="option2">
                <label class="form-check-label" for="6a22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a3" id="6a3" value="option1">
                <label class="form-check-label" for="6a3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a3" id="6a33" value="option2">
                <label class="form-check-label" for="6a33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a4" id="6a4" value="option1">
                <label class="form-check-label" for="6a4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a4" id="6a44" value="option2">
                <label class="form-check-label" for="6a44">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">b.Number of classes conducted
            </td>


            <td class="tg-0pky">
              <label for="number">Number of Classes</label>
              <input type="number" name="6b1" id="number" style="width: 50px">
            </td>


            <td class="tg-0pky">
              <label for="number">Number of Classes</label>
              <input type="number" name="6b2"  id="number" style="width: 50px">
            </td>


            </td>

            <td class="tg-0pky">
              <label for="number">Number of Classes</label>
              <input type="number"name="6b3"  id="number" style="width: 50px">
            </td>

            </td>
            <td class="tg-0pky">
              <label for="number">Number of Classes</label>
              <input type="number" name="6b4" id="number" style="width: 50px">
            </td>
            </td>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">c.Tutorial sheets & Other relevant documents as a proof
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c1" id="6c1" value="option1">
                <label class="form-check-label" for="6c1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c1" id="6c11" value="option2">
                <label class="form-check-label" for="6c11">
                  Not Available
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="6c2" id="6c2"
                  value="option1">
                <label class="form-check-label" for="6c2">Available with faculty</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="6c2" id="6c22"
                  value="option2">
                <label class="form-check-label" for="6c22">Not Available </label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c3" id="6c3">
                <label class="form-check-label" for="6c3">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c3" id="6c33">
                <label class="form-check-label" for="6c33">
                  Not Available
                </label>
              </div>
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c4" id="6c4" value="option1">
                <label class="form-check-label" for="6c4">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c4" id="6c44" value="option2">
                <label class="form-check-label" for="6c44">
                  Not Available
                </label>
              </div>

            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the effectiveness of the Tutorial
              classes


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 1
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="6r1" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="6r2" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="6r3" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="6r4" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <!--7th QUESTION-->
          <!--7th QUESTION-->

          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">7</td>
            <td class="tg-0pky" style="font-weight: bold;">Midterm test questions quality (consider blooms level)</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject1</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject2</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject3</td>
            <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">a. On-par with blooms taxonomy
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a1" id="7a1" value="option1">
                <label class="form-check-label" for="7a1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a1" id="7a11" value="option2">
                <label class="form-check-label" for="7a11">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a2" id="7a2" value="option1">
                <label class="form-check-label" for="7a2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a2" id="7a22" value="option2">
                <label class="form-check-label" for="7a22">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a3" id="7a3" value="option1">
                <label class="form-check-label" for="7a3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a3" id="7a33" value="option2">
                <label class="form-check-label" for="7a33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a4" id="7a4" value="option1">
                <label class="form-check-label" for="7a4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a4" id="7a44" value="option2">
                <label class="form-check-label" for="7a44">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">b. Questions matches with the COs</td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b1" id="7b1" value="option1">
                <label class="form-check-label" for="7b1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b1" id="7b11" value="option2">
                <label class="form-check-label" for="7b11">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b2" id="7b2" value="option1">
                <label class="form-check-label" for="7b2">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b2" id="7b22" value="option2">
                <label class="form-check-label" for="7b22">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b3" id="7b3" value="option1">
                <label class="form-check-label" for="7b3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b3" id="7b33" value="option2">
                <label class="form-check-label" for="7b33">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b4" id="7b4" value="option1">
                <label class="form-check-label" for="7b4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b4" id="7b44" value="option2">
                <label class="form-check-label" for="7b44">
                  NO
                </label>
              </div>
            </td>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">c. Have you found scheme & solution for evaluation of mid-term test

            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c1" id="7c1" value="option1">
                <label class="form-check-label" for="7c1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c1" id="7c11" value="option2">
                <label class="form-check-label" for="7c11">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7c2" id="7c2"
                  value="option1">
                <label class="form-check-label" for="7c2">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7c2" id="7c22"
                  value="option2">
                <label class="form-check-label" for="7c22">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c3" id="7c3">
                <label class="form-check-label" for="7c3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c3" id="7c33">
                <label class="form-check-label" for="7c33">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c4" id="7c4" value="option1">
                <label class="form-check-label" for="7c4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c4" id="7c44" value="option2">
                <label class="form-check-label" for="7c44">
                  NO
                </label>
              </div>

            </td>
            </td>


          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">d. Whether the MSE paper is single to all sections</td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d1" id="7d1" value="option1">
                <label class="form-check-label" for="7d1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d1" id="7d11" value="option2">
                <label class="form-check-label" for="7d11">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7d2" id="7d2"
                  value="option1">
                <label class="form-check-label" for="7d2">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7d2" id="7d22"
                  value="option2">
                <label class="form-check-label" for="7d22">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d3" id="7d3">
                <label class="form-check-label" for="7d3">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d3" id="7d33">
                <label class="form-check-label" for="7d33">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d4" id="7d4" value="option1">
                <label class="form-check-label" for="7d4">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d4" id="7d44" value="option2">
                <label class="form-check-label" for="7d44">
                  NO
                </label>
              </div>
            </td>

          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 1
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7ra1" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7ra2" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7ra3" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7ra4" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note 2: Regarding the innovations in Midterm test questions:


            </td>
          </tr>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 1
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7rb1" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7rb2" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7rb3" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="7rb4" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>


          <!--8th QUESTION-->

          <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">8</td>
            <td class="tg-0pky" style="font-weight: bold;">Has the teacher used any Rubrics to evaluate any of the
              student
              centric activities?</td>
            <td class="tg-0pky" colspan="4">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="81" id="81" value="option1">
                <label class="form-check-label" for="81">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="81" id="811" value="option2">
                <label class="form-check-label" for="811">
                  NO
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the effectiveness of the Rubrics:
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" name="8r" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              

            </td>
          </tr>

          <!--9th QUESTION-->


          <table class="tg" style="table-layout: fixed; width: 1479px">
            <colgroup>
              <col style="width: 20px">
              <col style="width: 100px">
              <col style="width: 50px">
              <col style="width: 50px">
              <col style="width: 50px">
              <col style="width: 50px">
              <col style="width: 50px">
              <col style="width: 71px">
              <col style="width: 70px">
              <col style="width: 79px">
            </colgroup>


            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky" style="font-weight: bold;">9</td>
              <td class="tg-0pky" colspan="3" style="font-weight: bold;">Course exit survey.</td>
              <td class="tg-0pky" colspan="4" style="font-weight: bold;">Remarks</td>

            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Subject 1</td>
              <td class="tg-0pky">Course exit survey covers all COs.</td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="91a" id="91a" value="option1">
                  <label class="form-check-label" for="91a">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="91a" id="91a1" value="option2">
                  <label class="form-check-label" for="91a1">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                

                  <div class="form-group">

                    <textarea class="form-control" name="91r" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"> </textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Subject 2</td>
              <td class="tg-0pky">Course exit survey covers all COs.</td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="92a" id="92a" value="option1">
                  <label class="form-check-label" for="92a">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="92a" id="92a1" value="option2">
                  <label class="form-check-label" for="92a1">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                

                  <div class="form-group">

                    <textarea class="form-control" name="92r" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Subject 3</td>
              <td class="tg-0pky">Course exit survey covers all COs.</td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="93a" id="93a" value="option1">
                  <label class="form-check-label" for="93a">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="93a" id="93a1" value="option2">
                  <label class="form-check-label" for="93a1">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                

                  <div class="form-group">

                    <textarea class="form-control" name="93r" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Subject 4</td>
              <td class="tg-0pky">Course exit survey covers all COs.</td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="94a" id="94a" value="option1">
                  <label class="form-check-label" for="94a">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="94a" id="94a1" value="option2">
                  <label class="form-check-label" for="94a1">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">
                

                  <div class="form-group">

                    <textarea class="form-control" name="94r" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="7"> Note: kindly write your observation on the Course Exit Survey,
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="9r" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>
          </table>


          <!--10th QUESTION-->
          <table class="tg" style="table-layout: fixed; width: 1479px">
            <colgroup>
              <col style="width: 50px">
              <col style="width: 720px">
              <col style="width: 37px">
              <col style="width: 91px">
              <col style="width: 90px">
              <col style="width: 91px">
              <col style="width: 80px">
              <col style="width: 80px">
              <col style="width: 80px">
              <col style="width: 129px">
            </colgroup>
            <thead>

            </thead>
            <tbody>
              <!--10th QUESTION -->
              <tr style="background-color :#dcf0fa;">
                <td class="tg-0pky" style="font-weight: bold;">10</td>
                <td class="tg-0pky" colspan="5" style="font-weight: bold;">MSE QUESTION PAPER COVERS </td>

              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SUBJECT 1</td>
                <td class="tg-0pky" colspan="4">
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="101" id="101"
                    value="option1">
                  <label class="form-check-label" for="101">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="101" id="1011"
                    value="option2">
                  <label class="form-check-label" for="1011">
                    4 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp

                  <input class="form-check-input" type="radio" name="101" id="1012"
                    value="option3">
                  <label class="form-check-label" for="1012">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SUBJECT 2</td>
                <td class="tg-0pky" colspan="4">
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="102" id="102"
                    value="option1">
                  <label class="form-check-label" for="102">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="102" id="1021"
                    value="option2">
                  <label class="form-check-label" for="1021">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="102" id="1022"
                    value="option3">
                  <label class="form-check-label" for="1022">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SUBJECT 3</td>
                <td class="tg-0pky" colspan="4">
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="103" id="103"
                    value="option1">
                  <label class="form-check-label" for="103">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="103" id="1031"
                    value="option2">
                  <label class="form-check-label" for="1031">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="103" id="1032"
                    value="option3">
                  <label class="form-check-label" for="1032">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SUBJECT 4</td>
                <td class="tg-0pky" colspan="4">
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="104" id="104"
                    value="option1">
                  <label class="form-check-label" for="104">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="104" id="1041"
                    value="option2">
                  <label class="form-check-label" for="1041">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="104" id="1042"
                    value="option3">
                  <label class="form-check-label" for="1042">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the MSE question paper covered:


                  <br>
                  

                    <div class="form-group">

                      <textarea class="form-control" name="10r" id="exampleFormControlTextarea1" rows="3" width=12px
                        cols="111"></textarea>
                    </div>
                  

                </td>
              </tr>


          </table>
          <!--11TH QUESTION-->
          <table class="tg" style="table-layout: fixed; width: 1479px">
            <colgroup>
              <col style="width: 35px">
              <col style="width: 340px">

              <col style="width: 71px">
              <col style="width: 71px">
              <col style="width: 71px">
              <col style="width: 70px">
              <col style="width: 71px">
              <col style="width: 71px">
              <col style="width: 71px">
              <col style="width: 70px">
              <col style="width: 35px">
            </colgroup>



            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky" style="font-weight: bold;">11</td>
              <td class="tg-0pky" colspan="6" style="font-weight: bold;">CIE performance of students:</td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>

              <td class="tg-0pky" style="font-weight: bold;"> Subject Title</td>
              <td class="tg-0pky" style="font-weight: bold;">Number of students in the subject</td>
              <td class="tg-0pky" colspan="4" style="font-weight: bold;">Number of students falling under the range of

              </td>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky"></td>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" style="font-weight: bold;">
                20</td>
              <td class="tg-0pky" style="font-weight: bold;">20-30</td>
              <td class="tg-0pky" style="font-weight: bold;">31-40</td>
              <td class="tg-0pky" style="font-weight: bold;">>40</td>
            </tr>

            </tr>
            <tr>
              <td class="tg-0pky"> </td>
              
              <td class="tg-0pky">SUBJECT 1</td>
              <td class="tg-0pky"><input type="number" name="11an" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11a1" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11a2" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11a3" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11a4" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"> </td>
              <td class="tg-0pky">SUBJECT 2</td>
              <td class="tg-0pky"><input type="number" name="11bn" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11b1" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11b2" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11b3" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11b4" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"> </td>
              <td class="tg-0pky">SUBJECT 3</td>
              <td class="tg-0pky"><input type="number" name="11cn" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11c1" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11c2" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11c3" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11c4" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"> </td>
              <td class="tg-0pky">SUBJECT 4</td>
              <td class="tg-0pky"><input type="number" name="11dn" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11d1" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11d2" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11d3" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" name="11d4" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="6"> Remarks, If any


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="11r" id="exampleFormControlTextarea1" rows="5" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>

          </table>



          <!--12th QUESTION-->

          <table class="tg" style="table-layout: fixed; width: 1479px">
            <colgroup>
              <col style="width: 50px">
              <col style="width: 583px">
              <col style="width: 101px">
              <col style="width: 101px">
              <col style="width: 100px">
              <col style="width: 101px">
              <col style="width: 101px">
              <col style="width: 101px">
              <col style="width: 100px">
              <col style="width: 50px">
            </colgroup>
            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky" style="font-weight: bold;">12</td>

              <td class="tg-0pky" colspan="5"><b>CO statements</b> </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="1"> <b> Subject1 </b></td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject 2</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject 3</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">No of CO statements.</td>

              <td class="tg-0pky">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a1" id="12a1" value="option1">
                  <label class="form-check-label" for="12a1">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a1" id="12a11" value="option2">
                  <label class="form-check-label" for="12a11">
                    <4
                  </label>
                </div>

              </td>

              <td class="tg-0pky">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a2" id="12a2" value="option1">
                  <label class="form-check-label" for="12a2">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a2" id="12a22" value="option2">
                  <label class="form-check-label" for="12a22">
                    <4
                  </label>
                </div>

              </td>

              <td class="tg-0pky">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a3" id="12a3" value="option1">
                  <label class="form-check-label" for="12a33">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a3" id="12a33" value="option2">
                  <label class="form-check-label" for="12a3">
                    <4
                  </label>
                </div>

              </td>

              <td class="tg-0pky">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a4" id="12a4" value="option1">
                  <label class="form-check-label" for="12a4">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a4" id="12a43" value="option2">
                  <label class="form-check-label" for="12a43">
                    <4
                  </label>
                </div>

              </td>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Establishment of CO statements with respect to blooms level/POs
              </td>
              <td class="tg-0pky">

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b1" id="12b1" value="option1">
                  <label class="form-check-label" for="12b1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b1" id="12b11" value="option2">
                  <label class="form-check-label" for="12b11">
                    NO
                  </label>
                </div>

              </td>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b2" id="12b2" value="option1">
                  <label class="form-check-label" for="12b2">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b2" id="12b22" value="option2">
                  <label class="form-check-label" for="12b22">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b3" id="12b3" value="option1">
                  <label class="form-check-label" for="12b3">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b3" id="12b33" value="option2">
                  <label class="form-check-label" for="12b33">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b4" id="12b44" value="option1">
                  <label class="form-check-label" for="12b44">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b4" id="12b4" value="option2">
                  <label class="form-check-label" for="12b4">
                    NO
                  </label>
                </div>
              </td>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Effectiveness of CO-PO mapping
              </td>

              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c1" id="12c1" value="option1">
                  <label class="form-check-label" for="12c1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c1" id="12c11" value="option2">
                  <label class="form-check-label" for="12c11">
                    Not Effective
                  </label>
                </div>
              </td>



              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12c2" id="12c2"
                    value="option1">
                  <label class="form-check-label" for="12c2"> Effective</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12c2" id="12c22"
                    value="option2">
                  <label class="form-check-label" for="12c22">Not Effective</label>
                </div>


              </td>



              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c3" id="12c3">
                  <label class="form-check-label" for="12c3">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c3" id="12c33">
                  <label class="form-check-label" for="12c33">
                    Not Effective
                  </label>
                </div>
              </td>


              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c4" id="12c4" value="option1">
                  <label class="form-check-label" for="12c4">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c4" id="12c44" value="option2">
                  <label class="form-check-label" for="12c44">
                    Not Effective
                  </label>
                </div>

              </td>
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Course to PO correlation level mapping (3,2,1)
              </td>

              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d1" id="12d1" value="option1">
                  <label class="form-check-label" for="12d1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d1" id="12d11" value="option2">
                  <label class="form-check-label" for="12d11">
                    Not Effective
                  </label>
                </div>
              </td>



              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12d2" id="12d2"
                    value="option1">
                  <label class="form-check-label" for="12d2"> Effective</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12d2" id="12d22"
                    value="option2">
                  <label class="form-check-label" for="12d22">Not Effective</label>
                </div>


              </td>



              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d3" id="12d3">
                  <label class="form-check-label" for="12d3">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d3" id="12d33">
                  <label class="form-check-label" for="12d33">
                    Not Effective
                  </label>
                </div>
              </td>


              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d4" id="12d4" value="option1">
                  <label class="form-check-label" for="12d4">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d4" id="12d44" value="option2">
                  <label class="form-check-label" for="12d44">
                    Not Effective
                  </label>
                </div>

              </td>
              </td>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the faculty awareness on the above
                components

                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="12r" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>


            <!--13th QUESTION-->

            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky"><b>13</b></td>

              <td class="tg-0pky" colspan="5"><b>CO Attainment: CIE marks and its distribution as per scheme </b></td>
            </tr>
            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky"></td>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject1</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject2</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject3</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject4</td></b>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation through MSE Marks
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a1" id="13a11"
                    value="option1">
                  <label class="form-check-label" for="13a11">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a1" id="13a12"
                    value="option2">
                  <label class="form-check-label" for="13a12">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a1" id="13a13"
                    value="option3">
                  <label class="form-check-label" for="13a13">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a2" id="13a21"
                    value="option1">
                  <label class="form-check-label" for="13a21">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a2" id="13a22"
                    value="option2">
                  <label class="form-check-label" for="13a22">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a2" id="13a23"
                    value="option3">
                  <label class="form-check-label" for="13a23">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a3" id="13a31"
                    value="option1">
                  <label class="form-check-label" for="13a31">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a3" id="13a32"
                    value="option2">
                  <label class="form-check-label" for="13a32">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a3" id="13a33"
                    value="option3">
                  <label class="form-check-label" for="13a33">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a4" id="13a41"
                    value="option1">
                  <label class="form-check-label" for="13a41">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a4" id="13a42"
                    value="option2">
                  <label class="form-check-label" for="13a42">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a4" id="13a43"
                    value="option3">
                  <label class="form-check-label" for="13a43">Not found</label>
                </div>
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation through Rubrics


              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b1" id="13b11"
                    value="option1">
                  <label class="form-check-label" for="13b11">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b1" id="13b12"
                    value="option2">
                  <label class="form-check-label" for="13b12">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b1" id="13b13"
                    value="option3">
                  <label class="form-check-label" for="13b13">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b2" id="13b21"
                    value="option1">
                  <label class="form-check-label" for="13b21">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b2" id="13b22"
                    value="option2">
                  <label class="form-check-label" for="13b22">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b2" id="13b23"
                    value="option3">
                  <label class="form-check-label" for="13b23">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="313b" id="313b1"
                    value="option1">
                  <label class="form-check-label" for="313b1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b3" id="13b32"
                    value="option2">
                  <label class="form-check-label" for="13b32">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b3" id="13b33"
                    value="option3">
                  <label class="form-check-label" for="13b33">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b4" id="13b41"
                    value="option1">
                  <label class="form-check-label" for="13b41">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b4" id="13b42"
                    value="option2">
                  <label class="form-check-label" for="13b42">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b4" id="13b43"
                    value="option3">
                  <label class="form-check-label" for="13b43">Not found</label>
                </div>
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation through Course Exit Survey


              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c1" id="13c11"
                    value="option1">
                  <label class="form-check-label" for="13c11">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c1" id="13c12"
                    value="option2">
                  <label class="form-check-label" for="13c12">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c1" id="13c13"
                    value="option3">
                  <label class="form-check-label" for="13c13">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c2" id="13c21"
                    value="option1">
                  <label class="form-check-label" for="13c21">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c2" id="13c22"
                    value="option2">
                  <label class="form-check-label" for="13c22">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c2" id="13c23"
                    value="option3">
                  <label class="form-check-label" for="13c23">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c3" id="13c31"
                    value="option1">
                  <label class="form-check-label" for="13c31">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c3" id="13c32"
                    value="option2">
                  <label class="form-check-label" for="13c32">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c3" id="13c33"
                    value="option3">
                  <label class="form-check-label" for="13c33">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c3" id="13c31"
                    value="option1">
                  <label class="form-check-label" for="13c31">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c4" id="13c32"
                    value="option2">
                  <label class="form-check-label" for="13c32">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c4" id="13c33"
                    value="option3">
                  <label class="form-check-label" for="13c33">Not found</label>
                </div>
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation through SEE


              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d1" id="13d11"
                    value="option1">
                  <label class="form-check-label" for="13d11">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d1" id="13d12"
                    value="option2">
                  <label class="form-check-label" for="13d12">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d1" id="13d13"
                    value="option3">
                  <label class="form-check-label" for="13d13">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d2" id="13d21"
                    value="option1">
                  <label class="form-check-label" for="13d21">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d2" id="13d22"
                    value="option2">
                  <label class="form-check-label" for="13d22">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d2" id="13d23"
                    value="option3">
                  <label class="form-check-label" for="13d23">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d3" id="13d31"
                    value="option1">
                  <label class="form-check-label" for="13d31">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d3" id="13d32"
                    value="option2">
                  <label class="form-check-label" for="13d32">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d3" id="13d33"
                    value="option3">
                  <label class="form-check-label" for="13d33">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d4" id="13d41"
                    value="option1">
                  <label class="form-check-label" for="13d41">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d4" id="13d42"
                    value="option2">
                  <label class="form-check-label" for="13d42">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d4" id="13d43"
                    value="option3">
                  <label class="form-check-label" for="13d43">Not found</label>
                </div>
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Final attainment computation considering MSE, SEE, Rubrics & Course Exit survey

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e1" id="13e11"
                    value="option1">
                  <label class="form-check-label" for="13e11">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e1" id="13e12"
                    value="option2">
                  <label class="form-check-label" for="13e12">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e1" id="13e13"
                    value="option3">
                  <label class="form-check-label" for="13e13">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e2" id="13e21"
                    value="option1">
                  <label class="form-check-label" for="13e21">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e2" id="13e22"
                    value="option2">
                  <label class="form-check-label" for="13e22">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e2" id="13e23"
                    value="option3">
                  <label class="form-check-label" for="13e23">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e3" id="13e31"
                    value="option1">
                  <label class="form-check-label" for="13e31">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e3" id="13e32"
                    value="option2">
                  <label class="form-check-label" for="13e32">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e3" id="13e33"
                    value="option3">
                  <label class="form-check-label" for="13e33">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e4" id="13e41"
                    value="option1">
                  <label class="form-check-label" for="13e41">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e4" id="13e42"
                    value="option2">
                  <label class="form-check-label" for="13e42">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e4" id="13e43"
                    value="option3">
                  <label class="form-check-label" for="13e43">Not found</label>
                </div>
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation of CO attainment Target

              </td>

              <td class="tg-0pky">

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f1" id="13f11"
                    value="option1">
                  <label class="form-check-label" for="13f11">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f1" id="13f12"
                    value="option2">
                  <label class="form-check-label" for="13f12">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f2" id="13f21"
                    value="option1">
                  <label class="form-check-label" for="13f21">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f2" id="13f22"
                    value="option2">
                  <label class="form-check-label" for="13f22">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f3" id="13f31"
                    value="option1">
                  <label class="form-check-label" for="13f31">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f3" id="13f32"
                    value="option2">
                  <label class="form-check-label" for="13f32">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                    value="option1">
                  <input class="form-check-input" type="radio" name="13f4" id="13f41"
                    value="option1">
                  <label class="form-check-label" for="13f41">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f4" id="13f42"
                    value="option2">
                  <label class="form-check-label" for="13f42">Not Found</label>
                </div>

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> Gap Analysis: if any</td>

            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 1 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="131r" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 2 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="132r" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 3 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="133r" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 4 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="134r" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Observation Listed .</td>
              <td class="tg-0pky">
                <div class="form-check">


                  <input class="form-check-input" type="radio" name="13g1" id="13g11"
                    value="option1">
                  <label class="form-check-label" for="13g11">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g1" id="13g12"
                    value="option2">
                  <label class="form-check-label" for="13g12">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g2" id="13g21" value="option1">
                  <label class="form-check-label" for="13g21">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g2" id="13g22" value="option2">
                  <label class="form-check-label" for="13g22">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g3" id="13g31" value="option1">
                  <label class="form-check-label" for="13g31">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g3" id="13g32" value="option2">
                  <label class="form-check-label" for="13g32">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g4" id="13g41" value="option1">
                  <label class="form-check-label" for="13g41">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g4" id="13g42" value="option2">
                  <label class="form-check-label" for="13g42">
                    NO
                  </label>
                </div>
              </td>
            <tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Action Taken </td>
              <td class="tg-0pky">
                <div class="form-check">


                  <input class="form-check-input" type="radio" name="13h1" id="13h11"
                    value="option1">
                  <label class="form-check-label" for="13h11">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h1" id="13h12"
                    value="option2">
                  <label class="form-check-label" for="13h12">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h2" id="13h21" value="option1">
                  <label class="form-check-label" for="13h21">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h2" id="13h22" value="option2">
                  <label class="form-check-label" for="13h22">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h3" id="13h31" value="option1">
                  <label class="form-check-label" for="13h31">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h3" id="13h32" value="option2">
                  <label class="form-check-label" for="13h32">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h4" id="13h41" value="option1">
                  <label class="form-check-label" for="13h41">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h4" id="13h42" value="option2">
                  <label class="form-check-label" for="13h42">
                    NO
                  </label>
                </div>
              </td>
            <tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the above


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="13r" id="13r" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>



          </table>




          <!--14th question-->

          <table class="tg" style="table-layout: fixed; width: 1479px">
            <colgroup>
              <col style="width: 45px">
              <col style="width: 250px">
              <col style="width: 170px">
              <col style="width: 170px">
              <col style="width: 170px">
              <col style="width: 140px">
              <col style="width: 80px">
              <col style="width: 80px">
              <col style="width: 80px">
              <col style="width: 80px">
            </colgroup>


            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky" style="font-weight: bold;">14</td>
              <td class="tg-0pky" colspan="5" style="font-weight: bold;">SEE Results:</td>

            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky"></td>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject 1</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject 2</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject 3</td>
              <td class="tg-0pky" colspan="1" style="font-weight: bold;">Subject 4</td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Pass Percentage

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a1" id="14a11"
                    value="option1">
                  <label class="form-check-label" for="14a11">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a1" id="14a12"
                    value="option2">
                  <label class="form-check-label" for="14a12">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a1" id="14a13"
                    value="option3">
                  <label class="form-check-label" for="14a13">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a2" id="14a21"
                    value="option1">
                  <label class="form-check-label" for="14a21">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a2" id="14a22"
                    value="option2">
                  <label class="form-check-label" for="14a22">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a2" id="14a23"
                    value="option3">
                  <label class="form-check-label" for="14a23">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a3" id="14a31"
                    value="option1">
                  <label class="form-check-label" for="14a31">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a3" id="14a32"
                    value="option2">
                  <label class="form-check-label" for="14a32">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a3" id="14a33"
                    value="option3">
                  <label class="form-check-label" for="14a33">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a4" id="14a41"
                    value="option1">
                  <label class="form-check-label" for="14a41">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a4" id="14a42"
                    value="option2">
                  <label class="form-check-label" for="14a42">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a4" id="14a43"
                    value="option3">
                  <label class="form-check-label" for="14a43">
                    <75% </label>
                </div>
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Grades

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b1" id="14b11"
                    value="option1">
                  <label class="form-check-label" for="14b11"> No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b1" id="14b12"
                    value="option2">
                  <label class="form-check-label" for="14b12">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b1" id="14b13"
                    value="option3">
                  <label class="form-check-label" for="14b13">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b2" id="14b21"
                    value="option1">
                  <label class="form-check-label" for="14b21">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b2" id="14b22"
                    value="option2">
                  <label class="form-check-label" for="14b22">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b2" id="14b23"
                    value="option3">
                  <label class="form-check-label" for="14b23">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b3" id="14b31"
                    value="option1">
                  <label class="form-check-label" for="14b31">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b3" id="14b32"
                    value="option2">
                  <label class="form-check-label" for="14b32">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b3" id="14b33"
                    value="option3">
                  <label class="form-check-label" for="14b33">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b4" id="14b41"
                    value="option1">
                  <label class="form-check-label" for="14b41">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b4" id="14b42"
                    value="option2">
                  <label class="form-check-label" for="14b42">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b4" id="14b43"
                    value="option3">
                  <label class="form-check-label" for="14b43"> X/F>1 </label>
                </div>
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">S+A Grades

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="14c11"
                    value="option1">
                  <label class="form-check-label" for="14c11"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="14c12"
                    value="option2">
                  <label class="form-check-label" for="14c12">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="14c13"
                    value="option3">
                  <label class="form-check-label" for="14c13">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="14c14"
                    value="option4">
                  <label class="form-check-label" for="14c14">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="14c15"
                    value="option5">
                  <label class="form-check-label" for="14c15"> ≤10% </label>
                </div>
              </td>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="14c21"
                    value="option1">
                  <label class="form-check-label" for="14c21"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="14c22"
                    value="option2">
                  <label class="form-check-label" for="14c22">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="14c23"
                    value="option3">
                  <label class="form-check-label" for="14c23">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="14c24"
                    value="option4">
                  <label class="form-check-label" for="14c24">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="14c25"
                    value="option5">
                  <label class="form-check-label" for="14c25"> ≤10% </label>
                </div>
              </td>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="14c31"
                    value="option1">
                  <label class="form-check-label" for="14c31"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="14c32"
                    value="option2">
                  <label class="form-check-label" for="14c32">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="14c33"
                    value="option3">
                  <label class="form-check-label" for="14c33">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="14c34"
                    value="option4">
                  <label class="form-check-label" for="14c34">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="14c35"
                    value="option5">
                  <label class="form-check-label" for="14c35"> ≤10% </label>
                </div>
              </td>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="14c41"
                    value="option1">
                  <label class="form-check-label" for="14c41"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="14c42"
                    value="option2">
                  <label class="form-check-label" for="14c42">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="14c44"
                    value="option3">
                  <label class="form-check-label" for="14c44">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="14c45"
                    value="option4">
                  <label class="form-check-label" for="14c45">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="14c46"
                    value="option5">
                  <label class="form-check-label" for="14c46"> ≤10% </label>
                </div>
              </td>

            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the above


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="14r" id="14r1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>


            <!--15th QUESTION-->

            <tr style="background-color :#dcf0fa;">
              <td class="tg-0pky" style="font-weight: bold;">15</td>
              <td class="tg-0pky" colspan="2" style="font-weight: bolder;">Course File Records</td>
              <td class="tg-0pky" colspan="3" style="font-weight: bold;">Remarks</td>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Syllabus (LTP, COs, CO-PO mapping, Assessment method, DeliveryMethod & Reference
                Material)
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15a" id="15a1"
                    value="option1">
                  <label class="form-check-label" for="15a1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15a" id="15a2"
                    value="option2">
                  <label class="form-check-label" for="15a2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15ar" id="15ar1" rows="5" width=30px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Calendar of Events
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15b" id="15b1"
                    value="option1">
                  <label class="form-check-label" for="15b1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15b" id="15b2"
                    value="option2">
                  <label class="form-check-label" for="15b2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15br" id="15br1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Lesson Plan
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15c" id="15c1"
                    value="option1">
                  <label class="form-check-label" for="15c1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15c" id="15c2"
                    value="option2">
                  <label class="form-check-label" for="15c2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15cr" id="15cr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Work done dairy
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15d" id="15d1"
                    value="option1">
                  <label class="form-check-label" for="15d1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15d" id="15d2"
                    value="option2">
                  <label class="form-check-label" for="15d2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15dr" id="15dr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Student Ledger
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15e" id="15e1"
                    value="option1">
                  <label class="form-check-label" for="15e1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15e" id="15e2"
                    value="option2">
                  <label class="form-check-label" for="15e2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15er" id="15er1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Class Time Table
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15f" id="15f1"
                    value="option1">
                  <label class="form-check-label" for="15f1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15f" id="15f2"
                    value="option2">
                  <label class="form-check-label" for="15f2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15fr" id="15fr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Personal Time Table
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15g" id="15g1"
                    value="option1">
                  <label class="form-check-label" for="15g1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15g" id="15g2"
                    value="option2">
                  <label class="form-check-label" for="15g2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15gr" id="15gr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">List of Shortage of attendance
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15h" id="15h1"
                    value="option1">
                  <label class="form-check-label" for="15h1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15h" id="15h2"
                    value="option2">
                  <label class="form-check-label" for="15h2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15hr"id="15hr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Availability of list of ineligible students
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15i" id="15i1"
                    value="option1">
                  <label class="form-check-label" for="15i1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15i" id="15i2"
                    value="option2">
                  <label class="form-check-label" for="15i2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15ir" id="15ir1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">I, II, & III Internal test question papers
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15j" id="15j1"
                    value="option1">
                  <label class="form-check-label" for="15j1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15j" id="15j2"
                    value="option2">
                  <label class="form-check-label" for="15j2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15jr" id="15jr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Scheme & Solution for MSE Question Paper
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15k" id="15k1"
                    value="option1">
                  <label class="form-check-label" for="15k1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15k" id="15k2"
                    value="option2">
                  <label class="form-check-label" for="15k2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15kr" id="15kr" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Tutorial sheets/case study/programming assignments/surprise test
                question papers

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15l" id="15l1"
                    value="option1">
                  <label class="form-check-label" for="15l1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15l" id="15l2"
                    value="option2">
                  <label class="form-check-label" for="15l2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15lr" id="15lr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Rubrics for case study/programming assignments
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15m" id="15m1"
                    value="option1">
                  <label class="form-check-label" for="15m1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15m" id="15m2"
                    value="option2">
                  <label class="form-check-label" for="15m2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15mr" id="15mr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Course exit survey (questionnaire + calculation)
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15n" id="15n1"
                    value="option1">
                  <label class="form-check-label" for="15n1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15n" id="15n2"
                    value="option2">
                  <label class="form-check-label" for="15n2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15nr" id="15nr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">CO attainment (excel sheet calculation)
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15o" id="15o1"
                    value="option1">
                  <label class="form-check-label" for="15o1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15o" id="15o2"
                    value="option2">
                  <label class="form-check-label" for="15o2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15or" id="15or1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">SEE Question Paper with Scheme & Solution
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15p" id="15p1"
                    value="option1">
                  <label class="form-check-label" for="15p1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15p" id="15p2"
                    value="option2">
                  <label class="form-check-label" for="15p2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15pr" id="15pr1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the above


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="15r" id="15r1git " rows="3" width=12px
                      cols="117"></textarea>
                  </div>
                

              </td>
            </tr>

          </table>






        </tbody>
        <br>
        

      </table>
    </div>

    <div id="mybutton">
      <button class="feedback" style="border-radius: 12%;">Save</button>
    </div>


    <div style="text-align:center">
<!-- 
      <a href="./table2.php" button class="btn fifth" style="align-items: center;">Save &
        Next</button></a> -->
      <button type="submit" value="Save & Next" class="btn fifth" >Save & Next</button>
    </div>


</form>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>

  </body>

</html>