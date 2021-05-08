<?php
$Title = 'Client DB';
include 'header.php'
?>
<div class="container-fluid d-flex justify-content-center align-items-center" style="margin-top: 100px;">
    <div class="jumbotron semi-transparent-jumbotron-bg col-12 col-md-8 row">
        <table class="table table-hover table-bordered table-light table-responsive-sm">
            <thead class="table-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>ID</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require 'database.php';
            $result = tableResult('IT202_clients');
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['client_first_name'] . "</td>";
                echo "<td>" . $row['client_last_name'] . "</td>";
                echo "<td>" . $row['client_id'] . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>


<?php include 'footer.php'?>