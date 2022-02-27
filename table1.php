<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
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


                <input class="form-check-input" type="radio" name="sub1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">

                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sub1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>

              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sub2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sub2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">b. Proposed cumulative percentage of portions covered</td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose" id="Radiose2" value="option2">
                <label class="form-check-label" for="Radiose2">
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
                <input class="form-check-input" type="radio" name="Radiosop" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp2" value="option2">
                <label class="form-check-label" for="Radiosp2">
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
                <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa2" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa2" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb2" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb2" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">b. Deviations,if any </td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso2" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso2" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc2" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc2" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd2" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd2" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose2" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose2" id="Radiose2" value="option2">
                <label class="form-check-label" for="Radiose2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios3" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios3" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb3" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb3" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">Case Studies</td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso4" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso4" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc4" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc4" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd4" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd4" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose4" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose4" id="Radiose2" value="option2">
                <label class="form-check-label" for="Radiose2">
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
                <input class="form-check-input" type="radio" name="Radiosop4" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop4" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp4" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp4" id="Radiosp2" value="option2">
                <label class="form-check-label" for="Radiosp2">
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
                <input class="form-check-input" type="radio" name="exampleRadios4a" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios4a" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4b" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4b" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4c" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4c" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4c" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4c" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios4e" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios4e" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4f" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4f" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4g" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4g" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4h" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4h" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios4i" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios4i" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4j" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4j" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4k" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4k" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4l" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4l" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios4m" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios4m" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4n" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4n" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4p" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4p" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4q" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4q" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios4r" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios4r" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4s" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4s" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4t" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa4t" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4u" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb4u" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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

                  <textarea class="form-control" name="textTest" id="exampleFormControlTextarea1" rows="3" width=12px
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
                <input class="form-check-input" type="radio" name="exampleRadios44a" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios44a" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44b" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44b" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44c" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosac44c" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44d" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44d" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios44e" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios44e" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44f" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44f" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44g" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44g" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44h" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44h" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios44i" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios44i" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44j" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44j" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44k" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44k" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44l" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44l" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios44m" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios44m" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44n" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44n" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44p" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44p" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44q" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44q" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios44r" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios44r" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44s" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44s" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44t" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44t" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44u" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44u" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
                <input class="form-check-input" type="radio" name="exampleRadios44v" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios44v" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44w" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios44w" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44x" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa44x" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44y" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44y" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                <input class="form-check-input" type="radio" name="exampleRadios!!" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios!!" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
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

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                <input class="form-check-input" type="radio" name="exampleRadios6a" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios6a" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios6b" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios6b" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa6c" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa6c" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb6d" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb6d" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
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
              <input type="number" id="number" style="width: 50px">
            </td>


            <td class="tg-0pky">
              <label for="number">Number of Classes</label>
              <input type="number" id="number" style="width: 50px">
            </td>


            </td>

            <td class="tg-0pky">
              <label for="number">Number of Classes</label>
              <input type="number" id="number" style="width: 50px">
            </td>

            </td>
            <td class="tg-0pky">
              <label for="number">Number of Classes</label>
              <input type="number" id="number" style="width: 50px">
            </td>
            </td>

          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">c.Tutorial sheets & Other relevant documents as a proof
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  Not Available
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">Available with faculty</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">Not Available </label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Not Available
                </label>
              </div>
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp2" value="option2">
                <label class="form-check-label" for="Radiosp2">
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

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                <input class="form-check-input" type="radio" name="exampleRadios7a" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios7a" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios7b" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios7b" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa7c" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa7c" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb7d" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb7d" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky">b. Questions matches with the COs</td>
            <td class="tg-0pky">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso7e" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso7e" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc7f" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc7f" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd7g" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd7g" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose7f" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose7f" id="Radiose2" value="option2">
                <label class="form-check-label" for="Radiose2">
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
                <input class="form-check-input" type="radio" name="Radiosop7g" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop7g" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions7h" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions7h" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7i" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7i" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp7j" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp7j" id="Radiosp2" value="option2">
                <label class="form-check-label" for="Radiosp2">
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
                <input class="form-check-input" type="radio" name="Radiosop7k" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop7k" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions7l" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions7l" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7m" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7m" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp7n" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp7n" id="Radiosp2" value="option2">
                <label class="form-check-label" for="Radiosp2">
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

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              

                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                <input class="form-check-input" type="radio" name="exampleRadios!!" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios!!" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
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

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
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
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
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
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
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
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="7"> Note: kindly write your observation on the Course Exit Survey,
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                  <input class="form-check-input" type="radio" name="exampleRadios10a" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10a" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp

                  <input class="form-check-input" type="radio" name="exampleRadios10a" id="exampleRadios2"
                    value="option3">
                  <label class="form-check-label" for="exampleRadios2">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SUBJECT 2</td>
                <td class="tg-0pky" colspan="4">
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aB" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aB" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aB" id="exampleRadios2"
                    value="option3">
                  <label class="form-check-label" for="exampleRadios2">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SUBJECT 3</td>
                <td class="tg-0pky" colspan="4">
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aC" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aC" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aC" id="exampleRadios2"
                    value="option3">
                  <label class="form-check-label" for="exampleRadios2">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SUBJECT 4</td>
                <td class="tg-0pky" colspan="4">
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aD" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aD" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="exampleRadios10aD" id="exampleRadios2"
                    value="option3">
                  <label class="form-check-label" for="exampleRadios2">
                    3 UNITS
                  </label>
                </td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the MSE question paper covered:


                  <br>
                  

                    <div class="form-group">

                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
              <td class="tg-0pky">
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                
              </td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"> </td>
              <td class="tg-0pky">
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                
              </td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"> </td>
              <td class="tg-0pky">
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                
              </td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"> </td>
              <td class="tg-0pky">
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                
              </td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
              <td class="tg-0pky"><input type="number" id="number" style="width: 50px"></td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="6"> Remarks, If any


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=12px
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
                <div>
                  <label for="number">≥4</label>
                  <input type="number" id="number" style="width: 50px">

                </div>

                <div>
                  <label for="number">
                    <4 </label>
                      <input type="number" id="number" style="width: 50px">
                </div>

              </td>

              <td class="tg-0pky">
                <div>
                  <label for="number">≥4</label>
                  <input type="number" id="number" style="width: 50px">

                </div>

                <div>
                  <label for="number">
                    <4 </label>
                      <input type="number" id="number" style="width: 50px">
                </div>

              </td>

              <td class="tg-0pky">
                <div>
                  <label for="number">≥4</label>
                  <input type="number" id="number" style="width: 50px">

                </div>

                <div>
                  <label for="number">
                    <4 </label>
                      <input type="number" id="number" style="width: 50px">
                </div>

              </td>

              <td class="tg-0pky">
                <div>
                  <label for="number">≥4</label>
                  <input type="number" id="number" style="width: 50px">

                </div>

                <div>
                  <label for="number">
                    <4 </label>
                      <input type="number" id="number" style="width: 50px">
                </div>

              </td>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Establishment of CO statements with respect to blooms level/POs
              </td>
              <td class="tg-0pky">

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radioso12e" id="Radioso1" value="option1">
                  <label class="form-check-label" for="Radioso1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radioso12e" id="Radioso2" value="option2">
                  <label class="form-check-label" for="Radioso2">
                    NO
                  </label>
                </div>

              </td>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosc12f" id="Radiosc1" value="option1">
                  <label class="form-check-label" for="Radiosc1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosc12f" id="Radiosc2" value="option2">
                  <label class="form-check-label" for="Radiosc2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosd12g" id="Radiosd1" value="option1">
                  <label class="form-check-label" for="Radiosd1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosd12g" id="Radiosd2" value="option2">
                  <label class="form-check-label" for="Radiosd2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiose12f" id="Radiose1" value="option1">
                  <label class="form-check-label" for="Radiose1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiose12f" id="Radiose2" value="option2">
                  <label class="form-check-label" for="Radiose2">
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
                  <input class="form-check-input" type="radio" name="Radiosop12h" id="Radiosop1" value="option1">
                  <label class="form-check-label" for="Radiosop1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosop12h" id="Radiosop2" value="option2">
                  <label class="form-check-label" for="Radiosop2">
                    Not Effective
                  </label>
                </div>
              </td>



              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions12j" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> Effective</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions12j" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Effective</label>
                </div>


              </td>



              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault12k" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault12k" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Not Effective
                  </label>
                </div>
              </td>


              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios12lp" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp12p" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
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
                  <input class="form-check-input" type="radio" name="Radiosop12w" id="Radiosop1" value="option1">
                  <label class="form-check-label" for="Radiosop1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosop12w" id="Radiosop2" value="option2">
                  <label class="form-check-label" for="Radiosop2">
                    Not Effective
                  </label>
                </div>
              </td>



              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions12x" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> Effective</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions12x" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Effective</label>
                </div>


              </td>



              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault12y" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault12y" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Not Effective
                  </label>
                </div>
              </td>


              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp12z" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp12z" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
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

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation through Rubrics


              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation through Course Exit Survey


              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation through SEE


              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Final attainment computation considering MSE, SEE, Rubrics & Course Exit survey

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Computation of CO attainment Target

              </td>

              <td class="tg-0pky">

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions22" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions22" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions33" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions33" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions44" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions44" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
                </div>

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> f. &nbsp Gap Analysis: if any</td>

            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 1 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 2 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 3 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 4 -Remarks:
                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                

              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Observation Listed .</td>
              <td class="tg-0pky">
                <div class="form-check">


                  <input class="form-check-input" type="radio" name="exampleRadios13" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios13" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios13a" id="Radios1" value="option1">
                  <label class="form-check-label" for="Radios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios13a" id="Radios2" value="option2">
                  <label class="form-check-label" for="Radios2">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa13z" id="Radiosa1" value="option1">
                  <label class="form-check-label" for="Radiosa1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa13z" id="Radiosa2" value="option2">
                  <label class="form-check-label" for="Radiosa2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb13x" id="Radiosb1" value="option1">
                  <label class="form-check-label" for="Radiosb1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb13x" id="Radiosb2" value="option2">
                  <label class="form-check-label" for="Radiosb2">
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


                  <input class="form-check-input" type="radio" name="exampleRadios133" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios133" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios134" id="Radios1" value="option1">
                  <label class="form-check-label" for="Radios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios134" id="Radios2" value="option2">
                  <label class="form-check-label" for="Radios2">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa135" id="Radiosa1" value="option1">
                  <label class="form-check-label" for="Radiosa1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa135" id="Radiosa2" value="option2">
                  <label class="form-check-label" for="Radiosa2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb136" id="Radiosb1" value="option1">
                  <label class="form-check-label" for="Radiosb1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb136" id="Radiosb2" value="option2">
                  <label class="form-check-label" for="Radiosb2">
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

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14a" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14a" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14a" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14b" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14b" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14b" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14c" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14c" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14c" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14d" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14d" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14d" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14ba" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14ba" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14ba" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14ca" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14ca" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14ca" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14da" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14da" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14da" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2"> X/F>1 </label>
                </div>
              </td>
            </tr>


            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">S+A Grades

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aaa" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aaa" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aaa" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aaa" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aaa" id="inlineRadio2"
                    value="option5">
                  <label class="form-check-label" for="inlineRadio2"> ≤10% </label>
                </div>
              </td>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aab" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aab" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aab" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aab" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aab" id="inlineRadio2"
                    value="option5">
                  <label class="form-check-label" for="inlineRadio2"> ≤10% </label>
                </div>
              </td>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa1" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa1" id="inlineRadio2"
                    value="option5">
                  <label class="form-check-label" for="inlineRadio2"> ≤10% </label>
                </div>
              </td>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa7" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa7" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa7" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa7" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions14aa7" id="inlineRadio2"
                    value="option5">
                  <label class="form-check-label" for="inlineRadio2"> ≤10% </label>
                </div>
              </td>

            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the above


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15a" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15a" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=30px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15b" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15b" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15c" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15c" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15d" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15d" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15e" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15e" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15f" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15f" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15g" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15g" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15h" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15h" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15i" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15i" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15j" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15j" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15k" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15k" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15l" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15l" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15m" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15m" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15n" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15n" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15o" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15o" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="exampleRadios15p" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios15p" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the above


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
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
