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


                <input class="form-check-input" type="radio" name="exampleRadios1a" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">

                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1a" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>

              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios1aa" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios1aa" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa1aaa" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa1aaa" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb1aaaa" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb1aaaas" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="Radioso1b" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso1b" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc1bb" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc1bb" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd1bbb" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd1bbb" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose1bbbb" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose1bbbb" id="Radiose2" value="option2">
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
                <input class="form-check-input" type="radio" name="Radiosop1c" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop1c" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions1cc" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions1cc" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1ccc" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1ccc" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp1cccc" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp1cccc" id="Radiosp2" value="option2">
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
                <input class="form-check-input" type="radio" name="exampleRadios2a" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios2a" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios2aa" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios2aa" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa2aaa" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa2aaa" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb2aaaa" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb2aaaa" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="Radioso2b" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso2b" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc22bb" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc22bb" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd2bbb" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd2bbb" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose2bbbb" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose2bbbb" id="Radiose2" value="option2">
                <label class="form-check-label" for="Radiose2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>

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
                <input class="form-check-input" type="radio" name="exampleRadios3a" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios3a" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios3aa" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios3aa" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa3aaa" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa3aaa" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb3aaaa" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb3aaaa" id="Radiosb2" value="option2">
                <label class="form-check-label" for="Radiosb2">
                  NO
                </label>
              </div>
            </td>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: kindly write your observation on the above
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>

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
                <input class="form-check-input" type="radio" name="exampleRadios41" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios41" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios42" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios42" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa43" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa43" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb44" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="Radioso45" id="Radioso1" value="option1">
                <label class="form-check-label" for="Radioso1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radioso45" id="Radioso2" value="option2">
                <label class="form-check-label" for="Radioso2">
                  NO
                </label>
              </div>

            </td>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc46" id="Radiosc1" value="option1">
                <label class="form-check-label" for="Radiosc1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosc46" id="Radiosc2" value="option2">
                <label class="form-check-label" for="Radiosc2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd47" id="Radiosd1" value="option1">
                <label class="form-check-label" for="Radiosd1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosd47" id="Radiosd2" value="option2">
                <label class="form-check-label" for="Radiosd2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose48" id="Radiose1" value="option1">
                <label class="form-check-label" for="Radiose1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiose48" id="Radiose2" value="option2">
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
                <input class="form-check-input" type="radio" name="Radiosop49" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop49" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  NO
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions410" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions410" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">NO</label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault411" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault411" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>
            </td>






            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp412" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp412" id="Radiosp2" value="option2">
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
                <input class="form-check-input" type="radio" name="exampleRadios4a13" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios4a13" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4b14" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios4b14" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa415" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa425" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb426" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb416" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="exampleRadios417" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios417" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios418" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios418" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa419" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa419" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb420" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb420" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="exampleRadios421" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios421" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios422" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios422" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa423" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa423" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb424" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb424" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="exampleRadios425" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios425" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios426" id="Radios1" value="option1">
                <label class="form-check-label" for="Radios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios427" id="Radios2" value="option2">
                <label class="form-check-label" for="Radios2">
                  NO
                </label>
              </div>

            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa428" id="Radiosa1" value="option1">
                <label class="form-check-label" for="Radiosa1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosa429" id="Radiosa2" value="option2">
                <label class="form-check-label" for="Radiosa2">
                  NO
                </label>
              </div>
            </td>
            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb430" id="Radiosb1" value="option1">
                <label class="form-check-label" for="Radiosb1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosb430" id="Radiosb2" value="option2">
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
                <input class="form-check-input" type="radio" name="exampleRadios431" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios431" id="exampleRadios2"
                  value="option2">
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
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>

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
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>

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
                <input class="form-check-input" type="radio" name="exampleRadios5a" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios5a" id="exampleRadios2" value="option2">
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
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>

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
                <input class="form-check-input" type="radio" name="Radioso6c" id="Radiosop1" value="option1">
                <label class="form-check-label" for="Radiosop1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosop6c" id="Radiosop2" value="option2">
                <label class="form-check-label" for="Radiosop2">
                  Not Available
                </label>
              </div>
            </td>



            <td class="tg-0pky">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions6cc" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">Available with faculty</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions6cc" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">Not Available </label>
              </div>


            </td>



            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6ccc" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6ccc" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Not Available
                </label>
              </div>
            </td>

            <td class="tg-0pky">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp6cccc" id="Radiosp1" value="option1">
                <label class="form-check-label" for="Radiosp1">
                  Available with faculty
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Radiosp6cccc" id="Radiosp2" value="option2">
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
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


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
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


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
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 2
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 3
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


            </td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Subject 4
              <br>
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>


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
                <input class="form-check-input" type="radio" name="exampleRadios!!8a" id="exampleRadios1"
                  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  YES
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios!!8a" id="exampleRadios2"
                  value="option2">
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
              <form>
                <div class="form-group">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                    cols="111"></textarea>
                </div>
              </form>

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
                  <input class="form-check-input" type="radio" name="Radiosp9a" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp9a" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"> </textarea>
                  </div>
                </form>
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Subject 2</td>
              <td class="tg-0pky">Course exit survey covers all COs.</td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp9b" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp9b" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"></textarea>
                  </div>
                </form>
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Subject 3</td>
              <td class="tg-0pky">Course exit survey covers all COs.</td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp9c" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp9c" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"></textarea>
                  </div>
                </form>
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Subject 4</td>
              <td class="tg-0pky">Course exit survey covers all COs.</td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp9d" id="Radiosp1" value="option1">
                  <label class="form-check-label" for="Radiosp1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosp9d" id="Radiosp2" value="option2">
                  <label class="form-check-label" for="Radiosp2">
                    NO
                  </label>
                </div>
              </td>

              <td class="tg-0pky" colspan="4">
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" width=50px
                      cols="54"></textarea>
                  </div>
                </form>
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="7"> Note: kindly write your observation on the Course Exit Survey,
                <br>
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

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
                  <form>
                    <div class="form-group">

                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                        cols="111"></textarea>
                    </div>
                  </form>

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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=30px
                      cols="63"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13a" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13a" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13a" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13b" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13b" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13b" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13c" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13c" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13c" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13d" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13d" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13d" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13e" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13e" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13e" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13f" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13f" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13f" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13g" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13g" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13g" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13i" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13i" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13i" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13j" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13j" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13j" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13k" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13k" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13k" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13l" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13l" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13l" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13m" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13m" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13m" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13n" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13n" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13n" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13p" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13p" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13p" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13q" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13qq" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13q" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13r" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13r" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13r" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13s" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13s" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13s" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13t" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13t" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13t" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13u" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13u" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13u" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13v" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13v" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Accurate</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13v" id="inlineRadio2"
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
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13w" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13w" id="inlineRadio2"
                    value="option3">
                  <label class="form-check-label" for="inlineRadio2">Not found</label>
                </div>
              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13x" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13x" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13y" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13y" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Not Found</label>
                </div>

              </td>

              <td class="tg-0pky">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13z" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Found</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions13z" id="inlineRadio2"
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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 2 -Remarks:
                <br>
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 3 -Remarks:
                <br>
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5"> SUBJECT 4 -Remarks:
                <br>
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

              </td>
            </tr>

            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky">Observation Listed .</td>
              <td class="tg-0pky">
                <div class="form-check">


                  <input class="form-check-input" type="radio" name="exampleRadios131" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios131" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios132" id="Radios1" value="option1">
                  <label class="form-check-label" for="Radios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios132" id="Radios2" value="option2">
                  <label class="form-check-label" for="Radios2">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa133" id="Radiosa1" value="option1">
                  <label class="form-check-label" for="Radiosa1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa133" id="Radiosa2" value="option2">
                  <label class="form-check-label" for="Radiosa2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb134" id="Radiosb1" value="option1">
                  <label class="form-check-label" for="Radiosb1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb134" id="Radiosb2" value="option2">
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


                  <input class="form-check-input" type="radio" name="exampleRadios135" id="exampleRadios1"
                    value="option1">
                  <label class="form-check-label" for="exampleRadios1">

                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios135" id="exampleRadios2"
                    value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    NO
                  </label>

                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios136" id="Radios1" value="option1">
                  <label class="form-check-label" for="Radios1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radios136" id="Radios2" value="option2">
                  <label class="form-check-label" for="Radios2">
                    NO
                  </label>
                </div>

              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa137" id="Radiosa1" value="option1">
                  <label class="form-check-label" for="Radiosa1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosa137" id="Radiosa2" value="option2">
                  <label class="form-check-label" for="Radiosa2">
                    NO
                  </label>
                </div>
              </td>
              <td class="tg-0pky">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb138" id="Radiosb1" value="option1">
                  <label class="form-check-label" for="Radiosb1">
                    YES
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radiosb138" id="Radiosb2" value="option2">
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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

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
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="111"></textarea>
                  </div>
                </form>

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


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=30px
                      cols="60"></textarea>
                  </div>
                </form>
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


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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


                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
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
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=50px
                      cols="60"></textarea>
                  </div>
                </form>
              </td>
            </tr>
            <tr>
              <td class="tg-0pky"></td>
              <td class="tg-0pky" colspan="5">Note: kindly write your observation on the above


                <br>
                <form>
                  <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px
                      cols="117"></textarea>
                  </div>
                </form>

              </td>
            </tr>

          </table>






        </tbody>
        <br>
        <a href="./table2.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"
          style="position: fixed;">SAVE & NEXT </a>


      </table>
    </div>

    <div id="mybutton">
      <button class="feedback" style="border-radius: 12%;">Save</button>
    </div>


    <div style="text-align:center">

      <a href="./table2.php" button class="btn fifth" style="align-items: center;">Save &
        Next</button></a>

    </div>





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
