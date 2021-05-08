<?php
        $Title = 'Photographer DB';
include 'header.php'
?>
<div class="container-fluid d-flex justify-content-center align-items-center" style="margin-top: 100px;">
    <div class="jumbotron semi-transparent-jumbotron-bg col-12 col-md-8 row">
        <table class="table table-hover table-bordered table-light table-responsive-lg table-responsive-md table-responsive-sm">
          <thead class="table-dark">
              <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>ID</th>
                  <th>Password</th>
                  <th>Phone Number</th>
                  <th>Email</th>
              </tr>
          </thead>
          <tbody>
          <?php
          require 'database.php';
          $result = tableResult('IT202_photographers');
          while($row = mysqli_fetch_array($result)){ //mysqli_query($con,"SELECT * FROM IT202_photographers");
              echo "<tr>";
              echo "<td>" . $row['photographer_first_name'] . "</td>";
              echo "<td>" . $row['photographer_last_name'] . "</td>";
              echo "<td>" . $row['photographer_id'] . "</td>";
              echo "<td>" . $row['photographer_password'] . "</td>";
              echo "<td>" . $row['photographer_phone_number'] . "</td>";
              echo "<td>" . $row['photographer_email'] . "</td>";
              echo "</tr>";
          }
          ?>
          </tbody>
        </table>
    </div>
</div>
<?php include 'footer.php'?>
