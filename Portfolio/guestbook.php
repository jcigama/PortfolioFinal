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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="images/favicon2.ico.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/stylesRes.css">


    <title>Joseph's Guestbook</title>

</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top justify-content-center TopMenuUnderline ">
        <div class="" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/index.php">Joseph Igama's Portfolio<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container" id="main" style="background-color: white;">
    <br>

    <div class="container text-center">
        <h1 class="display-5 font-weight-bold">Guestbook Sign-Up</h1>
    </div>
    <h3><strong>Contact Info</strong></h3>
    <p class="font-italic">Fields with * are required</p>
        <form id="guestForm" method="post" action="confirmation.php">

            <div class="form-group">
                <label for="fname">First Name*</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name here">
                <span class="d-none err text-danger" id="err-fname">⚠ Required</span>
            </div>

            <div class="form-group">
                <label for="lname">Last Name*</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name here">
                <span class="d-none err text-danger" id="err-lname">⚠ Required</span>
            </div>

            <div class="form-group">
                <label for="jobTitle">Job Title</label>
                <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Enter job title here">
                <span class="d-none err text-danger" id="err-jobTitle"></span>
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Enter company here">
                <span class="d-none err text-danger" id="err-company"></span>
            </div>

            <div class="form-group">
                <label for="linkedIn">LinkedIn</label>
                <input type="text" class="form-control" id="linkedIn" name="linkedIn" placeholder="https://www.linkedin.com/in/yourURL">
                <span class="d-none err text-danger" id="err-linkedIn">Invalid URL(Must start with http & end with .com)</span>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                <span class="d-none err text-danger" id="err-email">Invalid e-mail</span>
            </div>

            <div class="form-group">
                <label for="choice">How we met*</label>
                <select class="form-control" id="choice" name="choice">
                    <option value="none">Select an Option</option>
                    <option value="meetup">Meetup</option>
                    <option value="jobFair">Job Fair</option>
                    <option value="notMet">We haven't met yet</option>
                    <option value="socialMedia">Social Media</option>
                    <option value="other">Other</option>// Text box if other
                </select>
                <span class="d-none text-danger font-weight-bold" id ="errOption">Option required</span>

                <div id="otherText" class="d-none">
                    <input type="text" class="form-control" id="comments" placeholder="Comments">
                </div>
            </div>

            <br>

            <div class="form-group">
                <input name="mailList" type="checkbox" id="mailList">
                <label for="mailList">Please add me to your mailing list! (E-mail Required)</label>
            </div>

            <div id="emailChoice">
                <label class="form-check-label">
                    Choose an email format:
                </label>

                <br>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="html" value="option1">
                    <label class="form-check-label" for="html">HTML</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="text" value="option2">
                    <label class="form-check-label" for="text">Text</label>
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-secondary btn-lg btn-block btn-dark" value="Submit">Submit</button>
        </form>
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
                <li class="nav-item">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/resume.php">Resume<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
    <br>
    <br>
    <br>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="showHide.js"></script>
<!--<script src="validation.js"></script>-->
</body>
</html>


