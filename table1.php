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


                <input class="form-check-input" type="radio" name="1a1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">

                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>

              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1a4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="1b1" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b1" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b2" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b2" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b3" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b3" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b4" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1b4" id="Radiose2" value="option2">
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
                <input class="form-check-input" type="radio" name="1c1" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c1" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1c2" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1c2" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c3" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c4" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="1c4" id="Radiosp2" value="option2">
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
                <input class="form-check-input" type="radio" name="2a1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2a4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="2b1" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b1" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b2" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b2" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b3" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b3" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b4" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="2b4" id="Radiose2" value="option2">
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
                <input class="form-check-input" type="radio" name="3a1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="3a4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4aa1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4aa4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4ab1" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab1" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab2" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab2" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab3" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab3" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab4" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ab4" id="Radiose2" value="option2">
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
                <input class="form-check-input" type="radio" name="4ac1" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac1" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4ac2" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4ac2" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac3" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac4" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ac4" id="Radiosp2" value="option2">
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
                <input class="form-check-input" type="radio" name="4ad1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ad4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4ae1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ae4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4af1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4af4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4ag1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ag4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4ah1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ah4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4ba1" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba1" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4ba4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4bb1" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb1" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bb4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4bc1" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc1" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bc4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4bd1" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd1" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bd4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4be1" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be1" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4be4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="4bf1" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf1" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="4bf4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="51" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="51" id="exampleRadios2" value="option2">
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
                <input class="form-check-input" type="radio" name="6a1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6a4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="6c1" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c1" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  Not Available
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="6c2" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">Available with faculty</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="6c2" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">Not Available </label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c3" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Not Available
                </label>
              </div>
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c4" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="6c4" id="Radiosp2" value="option2">
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
                <input class="form-check-input" type="radio" name="7a1" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a2" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a2" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a3" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a3" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a4" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7a4" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="7b1" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b1" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b2" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b2" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b3" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b3" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b4" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7b4" id="Radiose2" value="option2">
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
                <input class="form-check-input" type="radio" name="7c1" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c1" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7c2" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7c2" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c3" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c4" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7c4" id="Radiosp2" value="option2">
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
                <input class="form-check-input" type="radio" name="7d1" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d1" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7d2" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="7d2" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d3" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d4" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="7d4" id="Radiosp2" value="option2">
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
                <input class="form-check-input" type="radio" name="81" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="81" id="exampleRadios2" value="option2">
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
                  <input class="form-check-input" type="radio" name="91a" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="91a" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
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
                  <input class="form-check-input" type="radio" name="92a" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="92a" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                

                  <div class="form-group">

                    <textarea class="form-control" name="92a" id="exampleFormControlTextarea1" rows="4" width=50px
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
                  <input class="form-check-input" type="radio" name="93a" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="93a" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
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
                  <input class="form-check-input" type="radio" name="94a" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="94a" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
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
                  <input class="form-check-input" type="radio" name="101" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="101" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp

                  <input class="form-check-input" type="radio" name="101" id="exampleRadios2"
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
                  <input class="form-check-input" type="radio" name="102" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="102" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="102" id="exampleRadios2"
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
                  <input class="form-check-input" type="radio" name="103" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="103" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="103" id="exampleRadios2"
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
                  <input class="form-check-input" type="radio" name="104" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    5 UNITS &nbsp &nbsp
                  </label> &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="104" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    4 UNITS &nbsp &nbsp
                  </label>
                  &nbsp &nbsp
                  <input class="form-check-input" type="radio" name="104" id="exampleRadios2"
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
                  <input class="form-check-input" type="radio" name="12a1" id="Radiosd1" value="option1">
                  <label class="form-check-label" for="Radiosd1">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a1" id="Radiosd2" value="option2">
                  <label class="form-check-label" for="Radiosd2">
                    <4
                  </label>
                </div>

              </td>

              <td class="tg-0pky">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a2" id="Radiosd1" value="option1">
                  <label class="form-check-label" for="Radiosd1">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a2" id="Radiosd2" value="option2">
                  <label class="form-check-label" for="Radiosd2">
                    <4
                  </label>
                </div>

              </td>

              <td class="tg-0pky">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a3" id="Radiosd1" value="option1">
                  <label class="form-check-label" for="Radiosd1">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a3" id="Radiosd2" value="option2">
                  <label class="form-check-label" for="Radiosd2">
                    <4
                  </label>
                </div>

              </td>

              <td class="tg-0pky">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a4" id="Radiosd1" value="option1">
                  <label class="form-check-label" for="Radiosd1">
                  ≥4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12a4" id="Radiosd2" value="option2">
                  <label class="form-check-label" for="Radiosd2">
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
                  <input class="form-check-input" type="radio" name="12b1" id="Radioso1" value="option1">
                  <label class="form-check-label" for="Radioso1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b1" id="Radioso2" value="option2">
                  <label class="form-check-label" for="Radioso2">
                    NO
                  </label>
                </div>

              </td>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b2" id="Radiosc1" value="option1">
                  <label class="form-check-label" for="Radiosc1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b2" id="Radiosc2" value="option2">
                  <label class="form-check-label" for="Radiosc2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b3" id="Radiosd1" value="option1">
                  <label class="form-check-label" for="Radiosd1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b3" id="Radiosd2" value="option2">
                  <label class="form-check-label" for="Radiosd2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b4" id="Radiose1" value="option1">
                  <label class="form-check-label" for="Radiose1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12b4" id="Radiose2" value="option2">
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
                  <input class="form-check-input" type="radio" name="12c1" id="Radiosop1" value="option1">
                  <label class="form-check-label" for="Radiosop1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c1" id="Radiosop2" value="option2">
                  <label class="form-check-label" for="Radiosop2">
                    Not Effective
                  </label>
                </div>
              </td>



              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12c2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> Effective</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12c2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Effective</label>
                </div>


              </td>



              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c3" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c3" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Not Effective
                  </label>
                </div>
              </td>


              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c4" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12c4" id="Radiosp2" value="option2">
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
                  <input class="form-check-input" type="radio" name="12d1" id="Radiosop1" value="option1">
                  <label class="form-check-label" for="Radiosop1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d1" id="Radiosop2" value="option2">
                  <label class="form-check-label" for="Radiosop2">
                    Not Effective
                  </label>
                </div>
              </td>



              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12d2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> Effective</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="12d2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Effective</label>
                </div>


              </td>



              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d3" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d3" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Not Effective
                  </label>
                </div>
              </td>


              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d4" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    Effective
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="12d4" id="Radiosp2" value="option2">
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
                  <input class="form-check-input" type="radio" name="13a1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13a4" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="13b1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13b4" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="13c1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13c4" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="13d1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13d4" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="13e1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13e4" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="13f1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="13f4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
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


                  <input class="form-check-input" type="radio" name="13g1" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g1" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g2" id="Radios1" value="option1">
                  <label class="form-check-label" for="Radios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g2" id="Radios2" value="option2">
                  <label class="form-check-label" for="Radios2">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g3" id="Radiosa1" value="option1">
                  <label class="form-check-label" for="Radiosa1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g3" id="Radiosa2" value="option2">
                  <label class="form-check-label" for="Radiosa2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g4" id="Radiosb1" value="option1">
                  <label class="form-check-label" for="Radiosb1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13g4" id="Radiosb2" value="option2">
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


                  <input class="form-check-input" type="radio" name="13h1" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h1" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h2" id="Radios1" value="option1">
                  <label class="form-check-label" for="Radios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h2" id="Radios2" value="option2">
                  <label class="form-check-label" for="Radios2">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h3" id="Radiosa1" value="option1">
                  <label class="form-check-label" for="Radiosa1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h3" id="Radiosa2" value="option2">
                  <label class="form-check-label" for="Radiosa2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h4" id="Radiosb1" value="option1">
                  <label class="form-check-label" for="Radiosb1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="13h4" id="Radiosb2" value="option2">
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
                  <input class="form-check-input" type="radio" name="14a1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">
                    <75% </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">≥85% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">85% < and ≤75% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14a4" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="14b1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">X/F>1 </label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">No X Grades </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">X/F≤1 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14b4" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="14c1" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c1" id="inlineRadio2"
                    value="option5">
                  <label class="form-check-label" for="inlineRadio2"> ≤10% </label>
                </div>
              </td>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c2" id="inlineRadio2"
                    value="option5">
                  <label class="form-check-label" for="inlineRadio2"> ≤10% </label>
                </div>
              </td>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c3" id="inlineRadio2"
                    value="option5">
                  <label class="form-check-label" for="inlineRadio2"> ≤10% </label>
                </div>
              </td>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"> >50% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">>40% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">>30% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="inlineRadio2"
                    value="option4">
                  <label class="form-check-label" for="inlineRadio2">>20% </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="14c4" id="inlineRadio2"
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

                    <textarea class="form-control" name="14r" id="exampleFormControlTextarea1" rows="3" width=12px
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
                  <input class="form-check-input" type="radio" name="15a" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15a" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15ar" id="exampleFormControlTextarea1" rows="5" width=30px
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
                  <input class="form-check-input" type="radio" name="15b" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15b" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15br" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15c" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15c" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15cr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15d" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15d" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15dr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15e" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15e" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15er" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15f" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15f" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">


                

                  <div class="form-group">

                    <textarea class="form-control" name="15fr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15g" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15g" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15gr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15h" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15h" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15hr"id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15i" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15i" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15ir" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15j" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15j" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15jr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15k" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15k" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15kr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15l" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15l" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15lr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15m" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15m" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15mr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15n" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15n" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15nr" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15o" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15o" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15or" id="exampleFormControlTextarea1" rows="5" width=50px
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
                  <input class="form-check-input" type="radio" name="15p" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="15p" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky" colspan="3">
                

                  <div class="form-group">
                    <textarea class="form-control" name="15pr" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the above


                <br>
                

                  <div class="form-group">

                    <textarea class="form-control" name="15pr" id="exampleFormControlTextarea1" rows="3" width=12px
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
