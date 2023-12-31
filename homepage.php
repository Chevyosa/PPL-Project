<?php
    include './connection.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Homepage - Patient Checkup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="./Images/Stethoscope 1.png" type="image/png">
    </head>
    <body>
        <nav class="navbar fixed-top bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand">
                    <img src="./Images/Stethoscope 1.png" alt="Logo" width="50" height="30" style="padding-right: 10px; padding-left: 10px" class="d-inline-block align-text-top">
                    <span style="font-weight: 500;">PATIENT MEDICAL CHECKUP</span>
                </a>
                <div class="navbar-expand">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" id="active" href="./homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about-us.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>                
        <div id="center-square">
            <div class="container-fluid d-flex flex-column align-items-center"  id="square">
                <div style="margin-bottom: 15px">
                    <img src="./Images/Stethoscope 1.png" alt="Logo" width="120" height="100" style="padding-right: 10px; padding-left: 10px;">
                </div>
                <div>
                    <span style="font-weight: 500; font-size: 30px">PATIENT MEDICAL CHECKUP</span>
                </div>
                <div>
                    <span style="font-weight: 200; font-size: 15px">Group Five Medical Solution</span>
                </div>
                <div>
                    <a href="./directory.php"><button class="directoryButton">Manage Patient Data</button></a>
                </div>
            </div>
        </div>
    </body>
</html>