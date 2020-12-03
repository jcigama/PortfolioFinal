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
        <link rel="icon" href="images/favicon2.ico.png" type="image/x-icon">
        <link rel="stylesheet" href="styles/stylesRes.css">
        <title>Joseph's Resume</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

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
        <div class="parallax">
            <br>
            <br>

            <div class="headingOne">
                WELCOME TO MY PORTFOLIO
                <p class="paragraphOne">Nice to meet you</p>
                <p class="paragraphOne">I'm Joseph, Junior Software Developer at Green River College</p>
                <img src="images/Joooseph.jpg" alt="JosephAtLaketapps" class="mx-auto d-block" width="400" height="400" style="border-radius: 50%; margin-top: 50px;">
            </div>

            <br>

            <div class="card container" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">A bit about me</h5>
                    <p class="card-text">In all my years of embracing technology,
                        I've harnessed it’s power and channeled it mostly towards my creative interests.
                        Whether it would be creating music on a music sequencer, cutting clips on a video editor
                        or manipulating photos on a photo editor; I've always found the synergy of technology and creativity immaculate.
                        This sparked an interest in me to know the inner workings of all-things-tech.
                        A career in the software development industry allows me to do that. I'm hoping to secure a spot as a full-stack intern in the near future.
                    </p>
                </div>


                <p class="paragraphOne">
                    <a href="https://www.linkedin.com/in/josephallenigama/" target="_blank">
                        <img src="images/linkedin.png" alt="linkedin"  width="75" height="75">
                        LinkedIn
                    </a>
                </p>

                <p class="paragraphOne">
                    <a href="http://jigama.greenriverdev.com/305/Portfolio/resume.php" target="_blank">
                        <img src="images/resume.png" alt="resume"  width="100" height="100">
                        Resume
                    </a>
                </p>
            </div>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/resume.php">Resume<span class="sr-only"></span></a>
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
    </body>
</html>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>