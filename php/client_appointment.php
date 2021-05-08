<?php
$Title = 'Client Appointment DB';
include 'header.php'
?>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="margin-top: 100px;">
        <div class="jumbotron semi-transparent-jumbotron-bg col-12 col-md-8 row">
            <table class="table table-hover table-bordered table-light table-responsive-lg table-responsive-md table-responsive-sm">
                <thead class="table-dark">
                <tr>
                    <th>Appointment ID</th>
                    <th>Client First Name</th>
                    <th>Client Last Name</th>
                    <th>Event Type</th>
                    <th>Venue of Event</th>
                    <th>Date & Time</th>
                    <th>Photographer ID</th>
                    <th>Client ID</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require 'database.php';
                $result = tableResult('IT202_clients INNER JOIN IT202_client_appointments ON IT202_clients.client_id = IT202_client_appointments.client_id');
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['appointment_id'] . "</td>";
                    echo "<td>" . $row['client_first_name'] . "</td>";
                    echo "<td>" . $row['client_last_name'] . "</td>";
                    echo "<td>" . $row['event_type'] . "</td>";
                    echo "<td>" . $row['venue_of_event'] . "</td>";
                    echo "<td>" . $row['date_time'] . "</td>";
                    echo "<td>" . $row['photographer_id'] . "</td>";
                    echo "<td>" . $row['client_id'] . "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>


<?php include 'footer.php'?>