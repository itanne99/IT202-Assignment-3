<?php
$Title = 'PPP Home Page';
include 'header.php'
?>

    <div class="container-fluid d-flex min-vh-100 justify-content-center align-items-center">
        <div class="jumbotron semi-transparent-jumbotron-bg col-12 col-md-8 text-white">
            <div class="justify-content-center">
                <h1 class="display-4 text-center">Welcome to the PPP Database Portal</h1>
            </div>
            <hr class="my-5" style="border-top: 4px solid #fff;">
            <div class="d-flex flex-lg-row flex-md-column flex-sm-column flex-column justify-content-lg-around align-content-md-around align-content-sm-around ">
                <a class="btn btn-primary btn-lg align-content-center" href="./photographer.php" role="button">Photographer Database</a>
<!--                <a class="btn btn-primary btn-lg align-content-center" href="./clients.php" role="button">Client Database</a>-->
                <a class="btn btn-primary btn-lg align-content-center" href="./client_order.php" role="button">Client Order Database</a>
                <a class="btn btn-primary btn-lg align-content-center" href="./client_appointment.php" role="button">Client Appointment Database</a>
            </div>
        </div>
    </div>

<?php include 'footer.php'?>

