<?php
//<!--
//Name: Joseph Igama
//Date: 12/02/2020
//-->


//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    header("location: login.php");
}
//Include files
include ('includes/header.html');
require ('includes/dbcred.php');
?>


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

        <br>

        <h3><strong>Guest Book Summary</strong></h3>
        <table id="guest-table" class="display">
            <thead>
            <tr>
                <td>Guest ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Job Title</td>
                <td>Company</td>
                <td>LinkedIn</td>
                <td>E-mail</td>
                <td>Met By</td>
                <td>Mail List Method</td>
                <td>Date Stamp</td>
            </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM guest_book ORDER BY date_signed DESC";
                    $result = mysqli_query($cnxn, $sql);

                    foreach ($result as $row){
                        $guest_id = $row['guest_id'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $jobTitle = $row['job_title'];
                        $company = $row['company'];
                        $linkedIn = $row['linkedIn'];
                        $email = $row['email'];
                        $metBy = $row['met_by'];
                        $mailList = $row['mail_list_method'];
                        $dateSigned = date("M d, Y g:i a", strtotime($row['date_signed']));

                        echo "<tr>";
                        echo "<td>$guest_id</td>";
                        echo "<td>$fname</td>";
                        echo "<td>$lname</td>";
                        echo "<td>$jobTitle</td>";
                        echo "<td>$company</td>";
                        echo "<td>$linkedIn</td>";
                        echo "<td>$email</td>";
                        echo "<td>$metBy</td>";
                        echo "<td>$mailList</td>";
                        echo "<td>$dateSigned</td>";
                        echo "</tr>";

                    }
                ?>
            </tbody>
        </table>
    </div>

    <br>

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
                <li class="nav-item">
                    <a class="nav-link" href="http://jigama.greenriverdev.com/305/Portfolio/guestbook.php">Guest Book Sign-Up</a>
                </li>
                <li class="nav-item active" >
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="validation.js"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script>
        $('#guest-table').DataTable( {
            "order": [[ 0, "desc" ]]
        } );
    </script>

</body>
</html>


