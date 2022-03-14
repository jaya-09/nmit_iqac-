<?php

session_start();

if ($_SESSION['loggedin'] != 'TRUE') {
    header("Location: login-error.html");
    exit();
}
;
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Page 2</title>
        <link href="styl.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <form action="./process2.php" method="post">
                <div class="flex-containers">

                    <table class="tg" style="table-layout: fixed; width: 1479px">
                        <colgroup>
                            <col style="width: 40px">
                            <col style="width: 573px">
                            <col style="width: 71px">
                            <col style="width: 71px">
                            <col style="width: 70px">
                            <col style="width: 71px">
                            <col style="width: 71px">
                            <col style="width: 71px">
                            <col style="width: 70px">
                            <col style="width: 71px">
                        </colgroup>
                        <thead>
                            <tr style="background-color:#84cdee;">
                                <th class="tg-0pky" style="font-weight: bold;">S.no</th>
                                <th class="tg-0pky" style="font-weight: bold;">Questions</th>
                                <th class="tg-c3ow" colspan="4" style="font-weight: bold;">Choose the Appropriate One
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--16th QUESTION-->
                            <tr style="background-color :#dcf0fa;">
                                <td class="tg-0pky" style="font-weight: bold;">16</td>
                                <td class="tg-0pky" style="font-weight: bold;" colspan="5">Academic Projects</td>
                            </tr>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="1">Identification of Problem statement by:</td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="16a" id="16a1"
                                            value="option1">
                                        <label class="form-check-label" for="16a1">
                                            FACULTY
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="16a" id="16a2"
                                            value="option2">
                                        <label class="form-check-label" for="16a2">
                                            STUDENT
                                        </label>
                                    </div>
                                </td>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="5">a. Projects guided during AY 20-21</td>

                            </tr>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="">Nature of the Project</td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Industry"
                                            id="16b1" name="16b1">
                                        <label class="form-check-label" for="16b1">
                                            Industry Relevant
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Research" id="16b2"
                                            name="16b2">
                                        <label class="form-check-label" for="16b2">
                                            Research
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            value="IPD" id="16b3" name="16b3">
                                        <label class="form-check-label" for="16b3">
                                            Innovative product Development
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Societal"
                                            id="16b4" name="16b4">
                                        <label class="form-check-label" for="16b4">
                                            Societal application
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Env" id="16b5"
                                            name="16b5">
                                        <label class="form-check-label" for="16b5">
                                            Environment
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Other" id="16b6"
                                            name="16b6">
                                        <label class="form-check-label" for="16b6">
                                            Any other
                                        </label>
                                    </div>


                                </td>

                            </tr>


                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="">Nature of the Project<br><br>
                                    <br> Outcome/achievement on all projects guided:


                                </td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Pub" id="16c1"
                                            name="16c1">
                                        <label class="form-check-label" for="16c1">
                                            Publication
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Award" id="16c2"
                                            name="16c2">
                                        <label class="form-check-label" for="16c2">
                                            Award
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Patent" id="16c3"
                                            name="16c3">
                                        <label class="form-check-label" for="16c3">
                                            Patent
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Funding" id="16c4"
                                            name="16c4">
                                        <label class="form-check-label" for="16c4">
                                            Funding
                                        </label>
                                    </div>

                                </td>

                            </tr>


                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="1">b. Whether Project has been funded by any?
                                    If yes, mention the funding agency and amount
                                </td>

                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="16da" id="16da1"
                                            value="option1">
                                        <label class="form-check-label" for="16da1">
                                            YES
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="16da" id="16da2"
                                            value="option2">
                                        <label class="form-check-label" for="16da2">
                                            NO
                                        </label>
                                    </div>

                                    <br>
                                    <form class="bd-example">
                                        <p>
                                            <label for="input">Funding agency</label>



                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3 "
                                                name="16dr1" width=12px cols="33"></textarea>


                                        </p>


                                        <form class="bd-example">
                                            <p>
                                                <label for="input">Amount</label><br>

                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3 " name="16dr2" width=12px cols="33"></textarea>
                                            </p>



                                </td>
                            </tr>

                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="1"> c. Whether the project is submitted to
                                    any Inter-national/National/ State level competition?
                                </td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="16e" id="16e1"
                                            value="option1">
                                        <label class="form-check-label" for="16e1">
                                            YES
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="16e" id="16e2"
                                            value="option2">
                                        <label class="form-check-label" for="16e2">
                                            No
                                        </label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="1">If yes, mention the details
                                </td>
                                <td class="tg-0pky" colspan="4">



                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3 "
                                            name="16r" width=12px cols="33"></textarea>
                                    </div>

                                </td>
                            </tr>
                            <!--17th QUESTION   -->
                            <tr style="background-color :#dcf0fa;">
                                <td class="tg-0pky" style="font-weight: bold;">17</td>
                                <td class="tg-0pky" style="font-weight: bold;" colspan="">Mentoring</td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17a" id="17a1"
                                            value="option1">
                                        <label class="form-check-label" for="17a1"> Done Regularly </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17a" id="17a2"
                                            value="option2">
                                        <label class="form-check-label" for="17a2">Not Done Regularly </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17a" id="17a3"
                                            value="option3">
                                        <label class="form-check-label" for="17a3"> NA </label>
                                    </div>
                                </td>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="5"> Outcome/Remarks:
                                    <br>

                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="17b" width=12px cols="111"></textarea>
                                    </div>


                                </td>
                            </tr>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="">a. Mentoring records </td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17c" id="17c1"
                                            value="option1">
                                        <label class="form-check-label" for="17c1"> Maintained </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17c" id="17c2"
                                            value="option2">
                                        <label class="form-check-label" for="17c2">Not Maintained </label>
                                    </div>

                                </td>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="5"> Reasons for not Manintaining
                                    <br>

                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="17d" width=12px cols="111"></textarea>
                                    </div>


                                </td>
                            </tr>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="">b. Identification of Weak Students </td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17e" id="17e1"
                                            value="option1">
                                        <label class="form-check-label" for="17e1"> Identified </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17e" id="17e2"
                                            value="option2">
                                        <label class="form-check-label" for="17e2">Not Identified </label>
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="">c. Mentor-student Interaction
                                    done
                                </td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17f" id="17f1"
                                            value="option1">
                                        <label class="form-check-label" for="17f1"> Daily </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17f" id="17f2"
                                            value="option2">
                                        <label class="form-check-label" for="17f2">Weekly </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17f" id="17f3"
                                            value="option3">
                                        <label class="form-check-label" for="17f3"> Once in 15 days </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17f" id="17f4"
                                            value="option4">
                                        <label class="form-check-label" for="17f4"> Monthly </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17f" id="17f5"
                                            value="option5">
                                        <label class="form-check-label" for="17f5"> Not Done </label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="">d. Mentor-parents Interaction held</td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17g1" id="17g11"
                                            value="option1">
                                        <label class="form-check-label" for="17g11"> YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="17g1" id="17g12"
                                            value="option2">
                                        <label class="form-check-label" for="17g12">NO </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="number">If YES, Frequency of interaction </label>
                                        <input type="number" id="number" style="width: 50px" name="17g2">

                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="">e. Number of students benefited from the mentoring
                                    activity
                                </td>
                                <td class="tg-0pky" colspan="4">
                                    <div>
                                        <label for="number">Number </label>
                                        <input type="number" id="number" style="width: 50px" name="17h">

                                    </div>

                                </td>

                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="1">Names of students benefited from the mentoring activity
                                    (seperate using commas)
                                </td>
                                <td class="tg-0pky" colspan="4">



                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                            name="17i" width=12px cols="33"></textarea>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="5"> f. Any best practices: Remarks

                                    <br>

                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="17j" width=12px cols="111"></textarea>
                                    </div>


                                </td>
                            </tr>




                            <!--18th QUESTION -->
                            <tr style="background-color :#dcf0fa;">
                                <td class="tg-0pky" style="font-weight: bold;">18</td>
                                <td class="tg-0pky" style="font-weight: bold;" colspan="5">Publications during AY Number
                                    of
                                    papers ( Total Number of papers: <input type="number" id="number"
                                        style="width: 50px" name="18a"> )
                                </td>
                            </tr>
                            <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="1">a. At least 1 paper</td>
                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="18b" id="18b1"
                                            value="option1">
                                        <label class="form-check-label" for="18b1">
                                            YES
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="18b" id="18b2"
                                            value="option2">
                                        <label class="form-check-label" for="18b2">
                                            NO
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class="tg-0pky"></td>
                                <td class="tg-0pky" colspan="1">b.Indexed by
                                </td>

                                <td class="tg-0pky" colspan="4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="18c1" id="18c1"
                                            value="SCOPUS" onchange="togglebox('18c2')">
                                        <label class="form-check-label" for="18c1">
                                            SCOPUS
                                        </label>
                                        <input type="number" id="18c2" style="width: 50px" name="18c2" disabled>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="18c3" id="18c3"
                                            value="WOS" onchange="togglebox('18c4')">
                                        <label class="form-check-label" for="18c3">
                                            WEB OF SCIENCE
                                        </label>
                                        <input type="number" id="18c4" style="width: 50px" name="18c4" disabled>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="18c5" id="18c5"
                                            value="SCI" onchange="togglebox('18c6')">
                                        <label class="form-check-label" for="18c5">
                                            SCI
                                        </label>
                                        <input type="number" id="18c6" style="width: 50px" name="18c6" disabled>
                                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="18c7" id="18c7" value="ANY OTHER" onchange="togglebox('18c8')">
                    <label class="form-check-label" for="18c7">
                        ANY OTHER
                    </label>
                </div>


                <br>
                <div class="bd-example">
                    <p><label for="input">Mention the same :</label>

                        <textarea class="form-control" id="18c8" rows="3 " width=12px name="18c8"
                            cols="33" disabled></textarea>
                    </p>
                </div>
                    </td>
                    </tr>
                    <tr>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky" colspan="1">c. Papers in Q1/Q2/Q3/Q4 rated journals</td>
                        <td class="tg-0pky" colspan="4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="18d" id="18d1" value="option1">
                                <label class="form-check-label" for="18d1">
                                    YES
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="18d" id="18d2" value="option2">
                                <label class="form-check-label" for="18d2">
                                    NO
                                </label>
                            </div>
                        </td>
                    <tr>





                        <!--19th QUESTION-->

                    <tr style="background-color :#dcf0fa;">
                        <td class="tg-0pky" style="font-weight: bold;">19</td>
                        <td class="tg-0pky" style="font-weight: bold;" colspan="5">Status of Patent during AY 20-21
                            <input type="number" id="number" style="width: 50px" name="19aa">
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky" colspan="1">a. Patent Status: (Along with count for each type)</td>
                        <td class="tg-0pky" colspan="4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="19a1" id="19a1" value="F" onchange="togglebox('19a2')">
                                <label class="form-check-label" for="19a1">
                                    FILED
                                </label>
                                <input type="number" id="19a2" style="width: 50px" name="19a2" disabled>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="19a3" id="19a3" value="P" onchange="togglebox('19a4')">
                                <label class="form-check-label" for="19a3">
                                    PUBLISHED
                                </label>
                                <input type="number" id="19a4" style="width: 50px" name="19a4" disabled>
                            </div><br>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="19a5" id="19a5" value="G" onchange="togglebox('19a6')">
                                <label class="form-check-label" for="19a5">
                                    GRANTED
                                </label>
                                <input type="number" id="19a6" style="width: 50px" name="19a6" disabled>
                            </div>
        </div>
        <tr>

        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1"> b. Applied for Examination
            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="19b" id="19b1" value="option1">
                    <label class="form-check-label" for="19b1">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="19b" id="19b2" value="option2">
                    <label class="form-check-label" for="19b2">
                        No
                    </label>
                </div>
            </td>
        </tr>

        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1"> c. Category of Patent
            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="19c1" id="19c1" value="INDIAN" onchange="togglebox('19c2')">
                    <label class="form-check-label" for="19c1">
                        INDIAN PATENT
                    </label>
                    <input type="number" id="19c2" style="width: 50px" name="19c2" disabled>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="19c3" id="19c3" value="FOREIGN" onchange="togglebox('19c4')">
                    <label class="form-check-label" for="19c3">
                        FOREIGN PATENT
                    </label>
                    <input type="number" id="19c4" style="width: 50px" name="19c4" disabled>
                </div>


            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1"> d. Type of Patent
            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="19d1" id="19d1" value="DESIGN" onchange="togglebox('19d2')">
                    <label class="form-check-label" for="19d1">
                        DESIGN
                    </label>
                    <input type="number" id="19d2" style="width: 50px" name="19d2" disabled>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="19d3" id="19d3" value="PRODUCT" onchange="togglebox('19d4')">
                    <label class="form-check-label" for="19d3">
                        PRODUCT
                    </label>
                    <input type="number" id="19d4" style="width: 50px" name="19d4" disabled>
                </div><br>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="19d5" id="19d5" value="IDEAS" onchange="togglebox('19d6')">
                    <label class="form-check-label" for="19d5">
                        IDEAS
                    </label>
                    <input type="number" id="19d6" style="width: 50px" name="19d6" disabled>
                </div>
            </td>
        </tr>

        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1">Please provide details of patents aided or any other details:
            </td>
            <td class="tg-0pky" colspan="4">



                <div class="form-group">

                    <textarea class="form-control" id="19e" rows="5" width=12px name="19e"
                        cols="33"></textarea>
                </div>

            </td>
        </tr>


        <!--20TH  QUESTION-->
        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">20</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1"> Projects funded
            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="20a" id="20a1" value="option1">
                    <label class="form-check-label" for="20a1">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="20a" id="20a2" value="option2">
                    <label class="form-check-label" for="20a2">
                        No
                    </label>
                </div>
            </td>
        </tr>
        <tr>

        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan=""> a.) Funding obtained from

            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="IN-ORG" id="20b11"
                        name="20b1">
                    <label class="form-check-label" for="20b11">
                        Inter-National Organization
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="N-ORG" id="20b21"
                        name="20b2">
                    <label class="form-check-label" for="20b21">
                        National Organization
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="SN-ORG" id="20b31"
                        name="20b3">
                    <label class="form-check-label" for="20b31">
                        State-National Organization
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="I" id="20b41" name="20b4">
                    <label class="form-check-label" for="20b41">
                        Industry
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="NMIT" id="20b51" name="20b5">
                    <label class="form-check-label" for="20b51">
                        NMIT
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="OTHER" id="20b61" name="20b6">
                    <label class="form-check-label" for="20b61">
                        Any other
                    </label>
                </div>

            </td>

        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Provide details:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="20c"
                        cols="111"></textarea>
                </div>


            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1">
                <h6>b. Title of the Project</h6>
                <br><br>
                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=12px name="20d1"
                        cols="70"></textarea>
                </div>


            </td>

            <td class="tg-0pky" colspan="4">
                <h6>Funded</h6>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="20d2"
                        cols="30"></textarea>
                </div>




                <h6>Amount</h6>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="20d3"
                        cols="30"></textarea>
                </div>


            </td>

            </td>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="">c. Status of the Project </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="20e" id="20e1" value="option1">
                    <label class="form-check-label" for="20e1"> Completed </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="20e" id="20e2" value="option2">
                    <label class="form-check-label" for="20e2">Report Available </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="20e" id="20e3" value="option3">
                    <label class="form-check-label" for="20e3"> On - Going </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="20e" id="20e4" value="option4">
                    <label class="form-check-label" for="20e4">Applied </label>
                </div>

            </td>

        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5">Note: Documents available for the statements made above regarding the
                project’s status
            </td>
        </tr>




        <!--21 QUESTION-->
        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">21</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1"> Consultancy if any,
            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="21a" id="21a1" value="option1">
                    <label class="form-check-label" for="21a1">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="21a" id="21a2" value="option2">
                    <label class="form-check-label" for="21a2">
                        No
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Provide details:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="21b"
                        cols="111"></textarea>
                </div>


            </td>
        </tr>
        <!--22 QUESTION-->
        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">22</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1"> FDPs/Workshops/Training/Pedagogy attended

            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="22a" id="22a1" value="option1">
                    <label class="form-check-label" for="22a1">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="22a" id="22a2" value="option2">
                    <label class="form-check-label" for="22a2">
                        No
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Nature of the activity:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="22b"
                        cols="111"></textarea>
                </div>


            </td>
        </tr>
        <tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Duration of the activity:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="22c"
                        cols="111"></textarea>
                </div>


            </td>
        </tr>
        <tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Report submitted to Dean:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="22d"
                        cols="111"></textarea>
                </div>


            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5">Note: Copy of the Reports available for the statements made above
                regarding the FDPs/Workshops/Training/Pedagogy organized
            </td>
        </tr>


        <!--23rd QUESTION-->
        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">23</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1"> Have you conducted/organized any activity
                such as Training/FDPs/Workshops/Pedagogy programmes/seminars:
            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="23a" id="23a1" value="option1">
                    <label class="form-check-label" for="23a1">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="23a" id="23a2" value="option2">
                    <label class="form-check-label" for="23a2">
                        No
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Remarks:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=12px name="23b"
                        cols="111"></textarea>
                </div>


            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="5"> Note: Reports available for the statements made above regarding the
                Training/FDPs/Workshops/
                Pedagogy programmes/seminars conducted/organised for the perusal of the committee members

            </td>
        </tr>




        <!--24th QUESTION-->


        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">24</td>
            <td class="tg-0pky" style="font-weight: bold;">Are you a member of.</td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="DUGC" id="24a1" name="24a1">
                    <label class="form-check-label" for="24a1">
                        DUGC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="DPGC" id="24a2" name="24a2">
                    <label class="form-check-label" for="24a2">
                        DPGC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="BOS" id="24a3" name="24a3">
                    <label class="form-check-label" for="24a3">
                        BOS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="BOE" id="24a4" name="24a4">
                    <label class="form-check-label" for="24a4">
                        BOE
                    </label>
                </div>



            </td>

            <!--25th QUESTION-->
        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">25</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="1"> Research/Academic Interaction with other
                organization/Industry/COE of NMIT
            </td>
            <td class="tg-0pky" colspan="4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="25a" id="25a1" value="option1">
                    <label class="form-check-label" for="25a1">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="25a" id="25a2" value="option2">
                    <label class="form-check-label" for="25a2">
                        NO
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1"> If Yes, Name of the Organization:
            </td>
            <td class="tg-0pky" colspan="4">



                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="25b"
                        cols="33"></textarea>
                </div>

            </td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1"> If Yes, Name of the Organization:
            </td>
            <td class="tg-0pky" colspan="4">



                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="25c"
                        cols="33"></textarea>
                </div>

            </td>
        </tr>

        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1">Type of Organization
            </td>
            <td class="tg-0pky" colspan="4">



                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="25d"
                        cols="33"></textarea>
                </div>

            </td>
        </tr>

        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="1">Nature of Interaction
            </td>
            <td class="tg-0pky" colspan="4">



                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" width=12px name="25e"
                        cols="33"></textarea>
                </div>

            </td>
        </tr>



        <!--26th QUESTION-->


        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">26</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="5">Faculty contribution towards slow learners
                and fast learners:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=12px name="26a"
                        cols="110"></textarea>
                </div>

            </td>
        </tr>
        <!--27th QUESTION-->


        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">27</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="5">Faculty contribution towards departmental
                activities:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=12px name="27a"
                        cols="110"></textarea>
                </div>

            </td>
        </tr>
        <!--28th QUESTION-->


        <tr style="background-color :#dcf0fa;">
            <td class="tg-0pky" style="font-weight: bold;">28</td>
            <td class="tg-0pky" style="font-weight: bold;" colspan="5">Faculty contribution towards institutional
                activities:
                <br>

                <div class="form-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" width=12px name="28a"
                        cols="110"></textarea>
                </div>

            </td>
        </tr>



        </table>

        </tbody>
        </table>
        </div>
        <br><br>

        <div style="text-align:center">


            <button class="popup btn btn-primary btn-lg active" type="submit" onclick="myFunction()"
                style="background-color: #007bff;">SUBMIT
                <span class="popuptext" id="myPopup">Submitted</span>
            </button>

            <script>
                // When the user clicks on div, open the popup
                function myFunction() {
                    var popup = document.getElementById("myPopup");
                    popup.classList.toggle("show");
                }
                function togglebox(id_sent){ 
                    document.getElementById(id_sent).disabled = !document.getElementById(id_sent).disabled;
                    document.getElementById(id_sent).value = "";
                }
            </script>
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