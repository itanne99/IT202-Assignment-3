<?php

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="nav-item active"';
    else
        echo 'class="nav-item"';
}

?>
<!doctype html >
<html lang = "en" >
<head>
    <?php echo '<title>'. $Title .'</title>' ?>
    <!-- Required meta tags-->
    <meta charset = "utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="./index.php">PPP Database Portal</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li <?php echoActiveClassIfRequestMatches("index")?> >
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li <?php echoActiveClassIfRequestMatches("photographer")?> >
                <a class="nav-link" href="./photographer.php">Photographer DB</a>
            </li>
<!--            <li --><?php //echoActiveClassIfRequestMatches("clients")?><!-- >-->
<!--                <a class="nav-link" href="clients.php">Client DB </a>-->
<!--            </li>-->
            <li <?php echoActiveClassIfRequestMatches("client_order")?> >
                <a class="nav-link" href="client_order.php">Client Order DB </a>
            </li>
            <li <?php echoActiveClassIfRequestMatches("client_appointment")?> >
                <a class="nav-link" href="./client_appointment.php">Client Appointment DB </a>
            </li>
        </ul>
    </div>
</nav>


