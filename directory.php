<?php 
    include './connection.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Patient Directory</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="directory.css">
        <link rel="icon" href="./Images/Stethoscope 1.png" type="image/png">
    </head>
    <body>
        <nav class="navbar fixed-top bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand">
                    <img src="./Images/Stethoscope 1.png" alt="Logo" width="40" height="30" style="padding-right: 10px; "class="d-inline-block align-text-top">
                    <span style="font-weight: 500;">PATIENT MEDICAL CHECKUP</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./homepage.php" title="Visit Homepage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about-us.php" title="Visit Dev Profile">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" id="tableRow">
            <div class="row">        
                <main role="main">
                    <div class="d-flex justify-content-between flex-md-nowrap align-items-center mb-3 border-bottom">
                        <div class="">
                            <h3 class="h3">Patient Directory</h3>
                            <h4 class="text-muted">Let you manage the Patients</h4>
                        </div>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#registerPatient">Register Patient</button>
                        </div>
                    </div>
                    <?php 
                        include "patient_directory.php";                    
                    ?>    
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    </body>
</html>