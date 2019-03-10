<?php include("php/basic.php");?>

<!DOCTYPE html>
<html lang="de">
<head>
    <title>MSL | Prüfungen</title>

    <!-- Set meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link files -->
    <link rel="icon" type="image/png" href="assets/msl_logo.png" sizes="32x32">
    <link rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
</head>

<body>
    <!--

        MSA:
           Englisch mdl. 27.5.2019 8:00 bis 29.05.2019
           Projektprüfung 3.6.2019 8:00 bis 5.6.2019 12:00
           Deutsch 25.6.2019 8:00 bis 12:00
           Englisch 26.6.2019 8:00 bis 12:00
           Mathematik 27.6.2019 8:00 bis 12:00
           Deutsch mdl. 1.7.2019 8:00 bis 12:00

        Quali:
           Projektprüfung 6.5.2019 8:00 bis 9.5.2019 12:00
           Quali Sport, Kunst, Religion, Informatik 15.5.2019 8:00 bis 12:00
           Englisch mdl. und externe Teilnehmer 20.5.2019 8:00 bis 12:00
           Englisch 1.7.2019 8:00 bis 12:00
           Deutsch 2.7.2019 8:00 bis 12:00
           Mathematik 3.7.2019 8:00 bis 12:00
           PCB/GSE 4.7.2019 8:00 bis 12:00
    -->

    <!-- Header -->
    <section class="main">
        <?php require_once("php/components/header.php"); ?>

        <!-- Main text -->
        <div class="container" id="main_text_countdown">
            <div class="col-md-auto text-center">
                <div class="text-center">
                    <p class="text-color-blue text-weight-bold" style="font-size: 2em;">Alle Prüfungstermine der Abschlussprüfung 2019 im Überblick</p>
                </div>
            </div>
        </div>

        <!-- Countdown -->
        <div class="container-fluid" id="main_countdown">
            <div class="col-md-auto text-center">
                <div class="countdown box">
                    <p class="text-weight-bold" style="font-size: 1.8em;" id="Global_title"></p>
                    <ul style="font-size: 1.65rem;">
                        <li><span id="Global_days"></span> Tag(en)</li>
                        <li><span id="Global_hours"></span> Stunde(n)</li>
                        <li><span id="Global_minutes"></span> Minute(n)</li>
                        <li><span id="Global_seconds"></span> Sekunde(n)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="msa">
        <div class="container-fluid text-color-black text-center">
            <h1 class="text-weight-bold">MSA Prüfungstermine</h1>

            <!-- Content: English mdl, Project-->
            <div class="row" >
                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="MSA_english_mdl_title"></p>
                        <ul>
                            <li><span id="MSA_english_mdl_days"></span> Tag(en)</li>
                            <li><span id="MSA_english_mdl_hours"></span> Stunde(n)</li>
                            <li><span id="MSA_english_mdl_minutes"></span> Minute(n)</li>
                            <li><span id="MSA_english_mdl_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="MSA_project_title"></p>
                        <ul>
                            <li><span id="MSA_project_days"></span> Tag(en)</li>
                            <li><span id="MSA_project_hours"></span> Stunde(n)</li>
                            <li><span id="MSA_project_minutes"></span> Minute(n)</li>
                            <li><span id="MSA_project_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Content: German, English-->
            <div class="row" style="padding: 10px;">
                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="MSA_german_title"></p>
                        <ul>
                            <li><span id="MSA_german_days"></span> Tag(en)</li>
                            <li><span id="MSA_german_hours"></span> Stunde(n)</li>
                            <li><span id="MSA_german_minutes"></span> Minute(n)</li>
                            <li><span id="MSA_german_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="MSA_english_title"></p>
                        <ul>
                            <li><span id="MSA_english_days"></span> Tag(en)</li>
                            <li><span id="MSA_english_hours"></span> Stunde(n)</li>
                            <li><span id="MSA_english_minutes"></span> Minute(n)</li>
                            <li><span id="MSA_english_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content: Math, German mdl-->
            <div class="row" style="padding: 15px;">
                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="MSA_math_title"></p>
                        <ul>
                            <li><span id="MSA_math_days"></span> Tag(en)</li>
                            <li><span id="MSA_math_hours"></span> Stunde(n)</li>
                            <li><span id="MSA_math_minutes"></span> Minute(n)</li>
                            <li><span id="MSA_math_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="MSA_german_mdl_title"></p>
                        <ul>
                            <li><span id="MSA_german_mdl_days"></span> Tag(en)</li>
                            <li><span id="MSA_german_mdl_hours"></span> Stunde(n)</li>
                            <li><span id="MSA_german_mdl_minutes"></span> Minute(n)</li>
                            <li><span id="MSA_german_mdl_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quali">
        <div class="container-fluid text-color-white background-blue text-center">
            <h1 class="text-weight-bold">Quali Prüfungstermine</h1>

            <!-- Content: Project , Sport, Kunst, Religion, Informatik -->
            <div class="row" >
                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="Quali_project_title"></p>
                        <ul>
                            <li><span id="Quali_project_days"></span> Tag(en)</li>
                            <li><span id="Quali_project_hours"></span> Stunde(n)</li>
                            <li><span id="Quali_project_minutes"></span> Minute(n)</li>
                            <li><span id="Quali_project_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="Quali_projects_title"></p>
                        <ul>
                            <li><span id="Quali_projects_days"></span> Tag(en)</li>
                            <li><span id="Quali_projects_hours"></span> Stunde(n)</li>
                            <li><span id="Quali_projects_minutes"></span> Minute(n)</li>
                            <li><span id="Quali_projects_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content: English mdl, English -->
            <div class="row" >
                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="Quali_english_mdl_title"></p>
                        <ul>
                            <li><span id="Quali_english_mdl_days"></span> Tag(en)</li>
                            <li><span id="Quali_english_mdl_hours"></span> Stunde(n)</li>
                            <li><span id="Quali_english_mdl_minutes"></span> Minute(n)</li>
                            <li><span id="Quali_english_mdl_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="Quali_english_title"></p>
                        <ul>
                            <li><span id="Quali_english_days"></span> Tag(en)</li>
                            <li><span id="Quali_english_hours"></span> Stunde(n)</li>
                            <li><span id="Quali_english_minutes"></span> Minute(n)</li>
                            <li><span id="Quali_english_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content: German, Math -->
            <div class="row" >
                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="Quali_german_title"></p>
                        <ul>
                            <li><span id="Quali_german_days"></span> Tag(en)</li>
                            <li><span id="Quali_german_hours"></span> Stunde(n)</li>
                            <li><span id="Quali_german_minutes"></span> Minute(n)</li>
                            <li><span id="Quali_german_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="Quali_math_title"></p>
                        <ul>
                            <li><span id="Quali_math_days"></span> Tag(en)</li>
                            <li><span id="Quali_math_hours"></span> Stunde(n)</li>
                            <li><span id="Quali_math_minutes"></span> Minute(n)</li>
                            <li><span id="Quali_math_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content: PCB/GSE -->
            <div class="row" >
                <div class="col">
                    <div class="countdown box">
                        <p class="text-weight-bold" id="Quali_pcb_gse_title"></p>
                        <ul>
                            <li><span id="Quali_pcb_gse_days"></span> Tag(en)</li>
                            <li><span id="Quali_pcb_gse_hours"></span> Stunde(n)</li>
                            <li><span id="Quali_pcb_gse_minutes"></span> Minute(n)</li>
                            <li><span id="Quali_pcb_gse_seconds"></span> Sekunde(n)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once("php/components/footer.php"); ?>

    <!-- Load scripts -->
    <script type="text/javascript" src="javaScript/Countdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<script type="text/javascript">

    // Header
    const global = new Countdown(
        "MSA_english_mdl",
        new Date("May 6, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Global_seconds', DisplayDate.seconds],
                ['Global_minutes', DisplayDate.minutes],
                ['Global_hours', DisplayDate.hours],
                ['Global_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der ersten Abschlussprüfung in", "Global_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Abschlussprüfungen beginnen nun!")
        .setDivideTime(true);

    global.addSubCountdown(
        new Countdown(
            "Global_sub1",
            new Date("July 4, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Global_seconds', DisplayDate.seconds],
                    ['Global_minutes', DisplayDate.minutes],
                    ['Global_hours', DisplayDate.hours],
                    ['Global_days', DisplayDate.days]
                ])
        ).setCountdownTitle("Ende der Abschlussprüfungen in", "Global_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Abschlussprüfungen sind bereits zuende.")
            .setDivideTime(true)
    );

    global.startTicker();

    //<------------------------------------- MSA ------------------------------------->
    //MSA english mdl
    const msa_english_mdl = new Countdown(
        "MSA_english_mdl",
        new Date("May 27, 2019 8:15:00").getTime(),
        new Map(
            [
                ['MSA_english_mdl_seconds', DisplayDate.seconds],
                ['MSA_english_mdl_minutes', DisplayDate.minutes],
                ['MSA_english_mdl_hours', DisplayDate.hours],
                ['MSA_english_mdl_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der mündlichen Englischprüfung in <br>(Vom 27.5. bis 29.5.2019)", "MSA_english_mdl_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfung beginnt jetzt!")
        .setDivideTime(true);

    msa_english_mdl.addSubCountdown(
        new Countdown(
            "MSA_english_mdl_sub",
            new Date("May 29, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['MSA_english_mdl_seconds', DisplayDate.seconds],
                    ['MSA_english_mdl_minutes', DisplayDate.minutes],
                    ['MSA_english_mdl_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der mündlichen Englischprüfungen in <br>(Vom 27.5. bis 29.5.2019)", "MSA_english_mdl_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die mündlichen Englischprüfungen sind bereits zuende.")
            .setDivideTime(true)
    );

    msa_english_mdl.startTicker();

    // MSA-Project
    const msa_project = new Countdown(
        "MSA_project",
        new Date("Jun 3, 2019 8:15:00").getTime(),
        new Map(
            [
                ['MSA_project_seconds', DisplayDate.seconds],
                ['MSA_project_minutes', DisplayDate.minutes],
                ['MSA_project_hours', DisplayDate.hours],
                ['MSA_project_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Projektprüfungen in <br>(Vom 3.6 bis 5.6.2019)", "MSA_project_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfung beginnt jetzt!")
        .setDivideTime(true);

    msa_project.addSubCountdown(
        new Countdown(
            "MSA_project",
            new Date("Jun 5, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['MSA_project_seconds', DisplayDate.seconds],
                    ['MSA_project_minutes', DisplayDate.minutes],
                    ['MSA_project_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Projektprüfung in <br>(Vom 3.6 bis 5.6.2019)", "MSA_project_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Projektprüfungen sind bereits zuende.")
            .setDivideTime(true)
    );

    msa_project.startTicker();

    // MSA German
    const msa_german = new Countdown(
        "MSA_german",
        new Date("Jun 25, 2019 8:15:00").getTime(),
        new Map(
            [
                ['MSA_german_seconds', DisplayDate.seconds],
                ['MSA_german_minutes', DisplayDate.minutes],
                ['MSA_german_hours', DisplayDate.hours],
                ['MSA_german_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Deutschprüfung in <br>(Am 25.6.2019)", "MSA_german_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Deutschprüfung beginnt jetzt!")
        .setDivideTime(true);

    msa_german.addSubCountdown(
        new Countdown(
            "MSA_german_sub",
            new Date("Jun 25, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['MSA_german_seconds', DisplayDate.seconds],
                    ['MSA_german_minutes', DisplayDate.minutes],
                    ['MSA_german_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Deutschprüfung in <br>(Am 25.6.2019)", "MSA_german_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Deutschprüfung ist bereits zuende.")
            .setDivideTime(true)
    );

    msa_german.startTicker();

    // MSA english
    const msa_english = new Countdown(
        "MSA_english",
        new Date("Jun 26, 2019 8:15:00").getTime(),
        new Map(
            [
                ['MSA_english_seconds', DisplayDate.seconds],
                ['MSA_english_minutes', DisplayDate.minutes],
                ['MSA_english_hours', DisplayDate.hours],
                ['MSA_english_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Englischprüfung in <br>(Am 26.6.2019)", "MSA_english_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Englischprüfung beginnt jetzt!")
        .setDivideTime(true);

    msa_english.addSubCountdown(
        new Countdown(
            "MSA_english_sub",
            new Date("Jun 26, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['MSA_english_seconds', DisplayDate.seconds],
                    ['MSA_english_minutes', DisplayDate.minutes],
                    ['MSA_english_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Englischprüfung in <br>(Am 26.6.2019)", "MSA_english_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Englischprüfung ist bereits zuende.")
            .setDivideTime(true)
    );

    msa_english.startTicker();

    // MSA math
    const msa_math = new Countdown(
        "MSA_math",
        new Date("Jun 27, 2019 8:15:00").getTime(),
        new Map(
            [
                ['MSA_math_seconds', DisplayDate.seconds],
                ['MSA_math_minutes', DisplayDate.minutes],
                ['MSA_math_hours', DisplayDate.hours],
                ['MSA_math_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Mathematikprüfung in <br>(Am 27.6.2019)", "MSA_math_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Mathematikprüfung beginnt jetzt!")
        .setDivideTime(true);

    msa_math.addSubCountdown(
        new Countdown(
            "MSA_Math_sub",
            new Date("Jun 27, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['MSA_math_seconds', DisplayDate.seconds],
                    ['MSA_math_minutes', DisplayDate.minutes],
                    ['MSA_math_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Mathematikprüfung in <br>(Am 27.6.2019)", "MSA_math_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Mathematikprüfung ist bereits zuende.")
            .setDivideTime(true)
    );

    msa_math.startTicker();

    // MSA german mdl
    const msa_german_mdl = new Countdown(
        "MSA_german_mdl",
        new Date("July 1, 2019 8:15:00").getTime(),
        new Map(
            [
                ['MSA_german_mdl_seconds', DisplayDate.seconds],
                ['MSA_german_mdl_minutes', DisplayDate.minutes],
                ['MSA_german_mdl_hours', DisplayDate.hours],
                ['MSA_german_mdl_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der mündlichen Deutschprüfung in <br>(Am 1.7.2019)", "MSA_german_mdl_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die mündliche Deutschprüfung beginnt jetzt!")
        .setDivideTime(true);

    msa_german_mdl.addSubCountdown(
        new Countdown(
            "MSA_german_mdl_sub",
            new Date("Jun 27, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['MSA_german_mdl_seconds', DisplayDate.seconds],
                    ['MSA_german_mdl_minutes', DisplayDate.minutes],
                    ['MSA_german_mdl_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der mündlichen Deutschprüfung in <br>(Am 1.7.2019)", "MSA_german_mdl_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die mündliche Deutschprüfung ist bereits zuende.")
            .setDivideTime(true)
    );

    msa_german_mdl.startTicker();

    //<------------------------------------- QUALI ------------------------------------->

    // Quali_project
    const quali_project = new Countdown(
        "Quali_project",
        new Date("May 6, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Quali_project_seconds', DisplayDate.seconds],
                ['Quali_project_minutes', DisplayDate.minutes],
                ['Quali_project_hours', DisplayDate.hours],
                ['Quali_project_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Projektprüfungen in <br>(Vom 6.5.2019 bis 9.5.2019)", "Quali_project_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Projektprüfungen beginnen jetzt!")
        .setDivideTime(true);

    quali_project.addSubCountdown(
        new Countdown(
            "Quali_project_sub",
            new Date("May 9, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Quali_project_seconds', DisplayDate.seconds],
                    ['Quali_project_minutes', DisplayDate.minutes],
                    ['Quali_project_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Projektprüfungen in <br>(Vom 6.5.2019 bis 9.5.2019)", "Quali_project_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Projektprüfungen sind bereits zuenede.")
            .setDivideTime(true)
    );

    quali_project.startTicker();

    // Quali Sport, Kunst, Religion, Informatik
    const quali_projects = new Countdown(
        "Quali_projects",
        new Date("May 15, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Quali_projects_seconds', DisplayDate.seconds],
                ['Quali_projects_minutes', DisplayDate.minutes],
                ['Quali_projects_hours', DisplayDate.hours],
                ['Quali_projects_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Prüfung in den Fächern <br> Sport, Kunst, Religion, Inforomatik in <br>(Am 15.5.2019)", "Quali_projects_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfungen beginnen jetzt!")
        .setDivideTime(true);

    quali_projects.addSubCountdown(
        new Countdown(
            "Quali_projects_sub",
            new Date("May 15, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Quali_projects_seconds', DisplayDate.seconds],
                    ['Quali_projects_minutes', DisplayDate.minutes],
                    ['Quali_projects_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Prüfung in den Fächern <br> Sport, Kunst, Religion, Inforomatik in <br>(Am 15.5.2019)", "Quali_projects_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Prüfungen sind bereits zuenede.")
            .setDivideTime(true)
    );

    quali_projects.startTicker();

    // Quali Englisch mdl
    const quali_english_mdl = new Countdown(
        "Quali_english_mdl",
        new Date("May 20, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Quali_english_mdl_seconds', DisplayDate.seconds],
                ['Quali_english_mdl_minutes', DisplayDate.minutes],
                ['Quali_english_mdl_hours', DisplayDate.hours],
                ['Quali_english_mdl_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der mündlichen Englischprüfung in <br>(Am 20.5.2019)", "Quali_english_mdl_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfung beginnt jetzt!")
        .setDivideTime(true);

    quali_english_mdl.addSubCountdown(
        new Countdown(
            "Quali_english_mdl_sub",
            new Date("May 20, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Quali_english_mdl_seconds', DisplayDate.seconds],
                    ['Quali_english_mdl_minutes', DisplayDate.minutes],
                    ['Quali_english_mdl_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der mündlichen Englischprüfung in <br>(Am 15.5.2019)", "Quali_english_mdl_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Prüfung ist bereits zuenede.")
            .setDivideTime(true)
    );

    quali_english_mdl.startTicker();

    // Quali Englisch
    const quali_english = new Countdown(
        "Quali_english",
        new Date("Jun 1, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Quali_english_seconds', DisplayDate.seconds],
                ['Quali_english_minutes', DisplayDate.minutes],
                ['Quali_english_hours', DisplayDate.hours],
                ['Quali_english_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Englischprüfung in <br>(Am 1.7.2019)", "Quali_english_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfung beginnt jetzt!")
        .setDivideTime(true);

    quali_english.addSubCountdown(
        new Countdown(
            "Quali_english_sub",
            new Date("Jun 1, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Quali_english_seconds', DisplayDate.seconds],
                    ['Quali_english_minutes', DisplayDate.minutes],
                    ['Quali_english_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Englischprüfung in <br>(Am 1.7.2019)", "Quali_english_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Prüfung ist bereits zuenede.")
            .setDivideTime(true)
    );

    quali_english.startTicker();

    // Quali german
    const quali_german = new Countdown(
        "Quali_german",
        new Date("Jun 2, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Quali_german_seconds', DisplayDate.seconds],
                ['Quali_german_minutes', DisplayDate.minutes],
                ['Quali_german_hours', DisplayDate.hours],
                ['Quali_german_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Deutschprüfung in <br>(Am 2.7.2019)", "Quali_german_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfung beginnt jetzt!")
        .setDivideTime(true);

    quali_german.addSubCountdown(
        new Countdown(
            "Quali_german_sub",
            new Date("Jun 2, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Quali_german_seconds', DisplayDate.seconds],
                    ['Quali_german_minutes', DisplayDate.minutes],
                    ['Quali_german_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Deutschprüfung in <br>(Am 2.7.2019)", "Quali_german_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Prüfung ist bereits zuenede.")
            .setDivideTime(true)
    );

    quali_german.startTicker();

    // Quali math
    const quali_math = new Countdown(
        "Quali_math",
        new Date("Jun 3, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Quali_math_seconds', DisplayDate.seconds],
                ['Quali_math_minutes', DisplayDate.minutes],
                ['Quali_math_hours', DisplayDate.hours],
                ['Quali_math_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Mathematikprüfung in <br>(Am 3.7.2019)", "Quali_math_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfung beginnt jetzt!")
        .setDivideTime(true);

    quali_math.addSubCountdown(
        new Countdown(
            "Quali_math_sub",
            new Date("Jun 3, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Quali_math_seconds', DisplayDate.seconds],
                    ['Quali_math_minutes', DisplayDate.minutes],
                    ['Quali_math_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Mathematikprüfung in <br>(Am 3.7.2019)", "Quali_math_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Prüfung ist bereits zuenede.")
            .setDivideTime(true)
    );

    quali_math.startTicker();

    // Quali PCB/GSE
    const quali_pcb_gse = new Countdown(
        "Quali_pcb_gse",
        new Date("Jun 4, 2019 8:15:00").getTime(),
        new Map(
            [
                ['Quali_pcb_gse_seconds', DisplayDate.seconds],
                ['Quali_pcb_gse_minutes', DisplayDate.minutes],
                ['Quali_pcb_gse_hours', DisplayDate.hours],
                ['Quali_pcb_gse_days', DisplayDate.days]
            ])
    ).setCountdownTitle("Beginn der Prüfungen in den Fächern <br> GSE und PCB in <br>(Am 4.7.2019)", "Quali_pcb_gse_title")
        .setElementID("msa_countdown")
        .setTimeOutText("Die Prüfungen beginnen jetzt!")
        .setDivideTime(true);

    quali_pcb_gse.addSubCountdown(
        new Countdown(
            "Quali_pcb_gse_sub",
            new Date("Jun 4, 2019 12:00:00").getTime(),
            new Map(
                [
                    ['Quali_pcb_gse_seconds', DisplayDate.seconds],
                    ['Quali_pcb_gse_minutes', DisplayDate.minutes],
                    ['Quali_pcb_gse_hours', DisplayDate.hours],
                ])
        ).setCountdownTitle("Ende der Prüfungen in den Fächern <br> GSE und PCB in<br>(Am 4.7.2019)", "Quali_pcb_gse_title")
            .setElementID("msa_countdown")
            .setTimeOutText("Die Prüfungen sind bereits zuenede.")
            .setDivideTime(true)
    );

    quali_pcb_gse.startTicker();
</script>
</html>
