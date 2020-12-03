<?php
//<!--
//Name: Joseph Igama
//Date: 12/02/2020
//-->

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

//Initialize variable
$err = false;
$username = "";

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//    echo "Form has been submitted";

    //Get the username and password
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

    //If they are correct
    //Actual username and password need to be stored in a seperate file
    //Should be moved to home directory ABOVE public-html
    require ('login-creds.php');


    if ($username == $adminUser && $password == $adminPassword) {

        $_SESSION['loggedin'] = true;

        if (!isset($_SESSION['page'])) {
            $_SESSION['page'] = 'admin.php';
        }
        header("location: " . $_SESSION['page']);

    }
    $err = true;

}
?>

<?php
include ('includes/header.html');
?>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/resume.php">Resume<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/guestbook.php">Guest Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/admin.php">Admin Page</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://jigama.greenriverdev.com/305/Portfolio/login.php">Login</a>
                    </li>
                </ul>

            </div>
        </nav>

        <br>

        <form method="post" action="#">

            <div class="container mt-5 mb-5 border border-light rounded" id="landing-container">
                <br>
                <div class="form-group">
                    <h3><strong>Administrator Login</strong></h3>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <span class="d-none err text-dark" id="err-admin">⚠ Invalid Credentials</span>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <span class="d-none err text-dark" id="err-password">⚠ Invalid Password</span>
                </div>

                <?php
                if ($err) {
                    echo '<span class="err">⚠ Incorrect login</span><br>';
                }
                ?>

                <input type="submit" value="Login">

                <br>
                <br>

            </div>
        </form>
    </div>

    <br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</body>


