<?php
//<!--
//Name: Joseph Igama
//Date: 12/02/2020
//-->

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="images/favicon2.ico.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/stylesRes.css">
    <title>Joseph's Resume</title>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top justify-content-center TopMenuUnderline ">
        <div class="" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/index.php">Joseph Igama's Portfolio<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</head>


<body>
    <div class="container" style="background-color: white">
        <br>
        <p style="text-align:left;">
        <small>jcigama77@yahoo.com</small>
            <span style="float:right;">
                <small><a href="https://www.linkedin.com/in/josephallenigama">linkedin.com/in/josephallenigama</a></small>
            </span>
        </p>

        <p style="text-align:left;">
            <small>123-456-7890</small>
            <span style="float:right;">
                <small><a href="https://www.github.com/jcigama">github.com/jcigama</a></small>
            </span>
        </p>

        <hr>

        <p class="h4 text-left font-weight-lighter"><i>Skills</i></p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <p class="font-weight-bold">Web Development</p>
                <p class="text-left" style="font-size: small;"><i>HTML, CSS, JavaScript, Bootstrap, PHP, SQL</i></p>
            </li>
            <li class="list-group-item">
                <p class="font-weight-bold">Programming</p>
                <p class="text-left" style="font-size: small"><i>Java, Python </i></p>
            </li>
            <li class="list-group-item">
                <p class="font-weight-bold">Tools</p>
                <p class="text-left" style="font-size: small"><i>Git, Repl.it</i></p>
            </li>
        </ul>


        <br>

        <p class="h4 text-left font-weight-lighter">
            <i>Education</i>
        </p>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <p class="font-weight-bold">Bachelor of Applied Science: Software Development</p>
                <p class="text-right" style="font-size: small;"><i>Green River College - 2020-2022</i></p>
            </li>
            <li class="list-group-item">
                <p class="font-weight-bold">Associate in Arts</p>
                <p class="text-right" style="font-size: small"><i>Green River College - 2016-2018</i></p>
            </li>
        </ul>

        <br>

        <p class="h4 text-left font-weight-lighter">
            <i>Experience</i>
        </p>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <p class="font-weight-bold">Choose Your Own Adventure Java Program</p>
                <p>Built a console program that allowed users to create a personalized
                    adventure based off their decisions.</p>
                <p class="font-weight-lighter text-right" style="font-size: small"><i>Auburn, WA – January 2020</i></p>
            </li>
            <li class="list-group-item">
                <p class="font-weight-bold">
                        Saint James Outreach
                    <a href="https://defnotdevs.greenriverdev.com/305/Sprint/index.php">
                        Website
                    </a>
                    </p>
                <p>Collaborated within a team of four through the agile methodology
                    to construct a website to assist people in need.</p>
                <p class="font-weight-lighter text-right" style="font-size: small"><i>Auburn, WA – October 2020</i></p>
            </li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom TopMenuUnderline ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#botNavbarNav" aria-controls="botNavbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="botNavbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/index.php">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/resume.php">Resume<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/guestbook.php">Guest Book Sign-Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/admin.php">Admin Page</a>
                </li>
                <!--Login/Logout Button-->
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '<li class="nav-item"><a class="nav-link" href="https://jigama.greenriverdev.com/305/Portfolio/logout.php">Logout</a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="https://jigama.greenriverdev.com/305/Portfolio/login.php">Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </nav>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>