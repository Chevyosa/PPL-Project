<?php
    include './connection.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us - Patient Checkup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="about-us.css">
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
                            <a class="nav-link" href="./homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./about-us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php" id="loginButton">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <div class="title text-center">
                <h1 class="titleprofile" data-aos="fade-right" data-aos-duration="1000" title="Profile Title">Our Team</h1>
            </div>
            <div class="container" id="container">
                <div class="row text-center">
                    <div class="col-lg-3 pt-5 pt-lg-1" id="profilepad" data-aos="fade-right" data-aos-duration="1000">
                        <img src="./Images/IMG_4869.JPG" class="roundedImage" id="profile">
                        <h5 class="Riyan" title="Riyanda Azis Febrian">Riyanda Azis Febrian</h5>
                        <p class="Riyan" title="NIM">211401004</p>
                    </div>
                    <div class="col-lg-3 pt-5 pt-lg-1" id="profilepad" data-aos="fade-right" data-aos-duration="1000">
                        <img src="./Images/Ayangg.png" class="roundedImage" id="profile">
                        <h5 class="Sutri" title="Riyanda Azis Febrian">Sutriyaningsih</h5>
                        <p class="Sutri" title="NIM">211401007</p>
                    </div>
                    <div class="col-lg-3 pt-5 pt-lg-1" id="profilepad" data-aos="fade-right" data-aos-duration="1000">
                        <img src="./Images/Sammytha.jpg" class="roundedImage" id="profile">
                        <h5 class="Sammy" title="Riyanda Azis Febrian">Sammytha Br Siagian</h5>
                        <p class="Sammy" title="NIM">211401019</p>
                    </div>
                    <div class="col-lg-3 pt-5 pt-lg-1" id="profilepad" data-aos="fade-right" data-aos-duration="1000">
                        <img src="./Images/Agatha.jpg" class="roundedImage" id="profile">
                        <h5 class="Agatha" title="Riyanda Azis Febrian">Agatha Alexia Sinaga</h5>
                        <p class="Agatha" title="NIM">211401115</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script>AOS.init();</script>             
    </body>
</html>