<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSL | Prüfungen</title>

    <!-- Set meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link files -->
    <link rel="icon" type="image/png" href="../assets/msl_logo.png" sizes="32x32">
    <link rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">


    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<section class="main">
    <!-- Navbar -->
    <?php require_once("../php/components/header.php") ?>

    <div class="container" id="main_text_countdown">
        <div class="col-md-auto text-center">
            <div class="text-center">
                <p class="text-color-blue text-weight-bold" style="font-size: 2em;">Qualirechner der MS Landau</p>
            </div>
        </div>
    </div>
</section>
</body>

<section class="background-blue text-color-white" style="margin-top: 180px;">
    <div id="calculatorContainer" class="container">
        <div class="row calculator text-center text-weight-bold">
            <div class="col-md-4 sub-title">
                <p>Prüfung</p>
            </div>
            <div class="col-md-4 sub-title">
                <p>Jahresnote</p>
            </div>
            <div class="col-md-4 sub-title">
                <p>Prüfungsnote</p>
            </div>
        </div>

        <!-- German -->
        <div class="row calculator">
            <div class="col-md-4">
                <p>Deutsch:</p>
            </div>
            <div class="col-md-4">
                <input type="text" id="jn-german" class="form-control CalcInput" name="username" tabindex="1" placeholder="Zeugnis" maxlength="1" required="" autofocus="" />
            </div>
            <div class="col-md-4">
                <input type="text" id="pn-german" class="form-control CalcInput" name="password" tabindex="2" placeholder="Prüfung" maxlength="1" required=""/>
            </div>
        </div>

        <!-- Math -->
        <div class="row calculator">
            <div class="col-md-4">
                <p>Mathe:</p>
            </div>
            <div class="col-md-4">
                <input type="text" id="jn-math" class="form-control CalcInput" name="username" tabindex="3" placeholder="Zeugnis" maxlength="1" required=""/>
            </div>
            <div class="col-md-4">
                <input type="text" id="pn-math" class="form-control CalcInput" name="password" tabindex="4" placeholder="Prüfung" maxlength="1" required=""/>
            </div>
        </div>

        <!-- English/GSE/PCB -->
        <div class="row calculator">
            <div class="col-md-4">
                <select class="form-control" id="selEnglisch">
                    <option>Englisch</option>
                    <option>GSE</option>
                    <option>PCB</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" id="jn-english" class="form-control CalcInput" name="username" tabindex="5" placeholder="Zeugnis" maxlength="1" style="margin-top: 5px;" required=""/>
            </div>
            <div class="col-md-4">
                <input type="text" id="pn-english" class="form-control CalcInput" name="password" tabindex="6" placeholder="Prüfung" maxlength="1" style="margin-top: 5px;" required=""/>
            </div>
        </div>

        <!-- AWT -->
        <div class="row calculator">
            <div class="col-md-4">
                <p>AWT:</p>
            </div>
            <div class="col-md-4">
                <input type="text" id="jn-awt" class="form-control CalcInput" name="username" tabindex="7" placeholder="Zeugnis" maxlength="1" required=""/>
            </div>
            <div class="col-md-4">
                <!-- <input type="text" id="pn-awt" class="form-control myFontInput CalcInput" name="password" tabindex="8" placeholder="Prüfung" maxlength="1" required=""/>   -->
            </div>
        </div>

        <!-- Tech / Soz / Wirt -->
        <div class="row calculator">
            <div class="col-md-4">
                <select class="form-control" id="selEnglisch">
                    <option>Technik</option>
                    <option>Soziales</option>
                    <option>Wirtschaft</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" id="jn-technik" class="form-control CalcInput" name="username" tabindex="9" placeholder="Zeugnis" maxlength="1" style="margin-top: 5px;" required=""/>
            </div>
            <div class="col-md-4">
                <!-- <input type="text" id="pn-technik" class="form-control myFontInput CalcInput" name="password" tabindex="10" placeholder="Prüfung" maxlength="1" style="margin-top: 5px;" required=""/>  -->
            </div>
        </div>

        <!-- Project -->
        <div class="row calculator">
            <div class="col-md-4">
                <p>Projektprüfung:</p>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <input type="text" id="pn-project" class="form-control CalcInput" name="password" tabindex="11" placeholder="Prüfung" maxlength="1" required=""/>
            </div>
        </div>

        <!-- Reli / Ethik / Sport / Musik / Kunst /Informatik -->
        <div class="row calculator">
            <div class="col-md-4">
                <select class="form-control" id="selEnglisch">
                    <option>Religion</option>
                    <option>Ethik</option>
                    <option>Sport</option>
                    <option>Musik</option>
                    <option>Kunst</option>
                    <option>Informatik</option>

                </select>
            </div>
            <div class="col-md-4">
                <input type="text" id="jn-sport" class="form-control CalcInput" name="username" tabindex="12" placeholder="Zeugnis" maxlength="1" style="margin-top: 5px;" required=""/>
            </div>
            <div class="col-md-4">
                <input type="text" id="pn-sport" class="form-control CalcInput" name="password" tabindex="13" placeholder="Prüfung" maxlength="1" style="margin-top: 5px;" required=""/>
            </div>
        </div>

        <div class="row calculator">
            <div class="col-md-2">
                <label for="username">Summe:</label>
            </div>

            <div class="col-md-3"">
            <input type="text" id="input_sum" class="form-control" name="password" tabindex="14" placeholder="" maxlength="3" required="" readonly/>
            </div>

            <div class="col-md-2">
                <label for="username">:  18  =</label>
            </div>

            <div class="col-md-3">
                <input type="text" id="input_result" class="form-control" name="password" tabindex="15" placeholder="" maxlength="4" required="" readonly/>
            </div>

            <div class="col-md-2" id="passed">
                <p>Quali</p>
            </div>
        </div>
</section>

<script src="../javaScript/Calculator.js"></script>

<!-- Footer -->
<?php require_once("../php/components/footer.php") ?>

</html>
