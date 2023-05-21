<?php
session_start();
include('../dbconnect.php');
include('../head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<div class="container">
    <div class="table">
<table>
            <thead>
                <tr>
                    <th hidden>ticket_id</th>
                    
                    <th>name</th>
                    <th>no_of_pessenger</th>
                    <th>departure_location</th>
                    <th>arrival_location</th>
                    <th>train_name</th>
                    <th>booking_date</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * from booking_customer";
                $statement = $conn->prepare($query);
                $statement->execute();

                $result = $statement->fetchall();
                if ($result) {
                    foreach ($result as $row) {
                        ?>

                        <tr>

                            <td>
                                <?= $row['name']; ?>
                            </td>
                            <td>
                                <?= $row['no_of_pessenger']; ?>
                            </td>
                            <td>
                                <?= $row['departure_location']; ?>
                            </td>
                            <td>
                                <?= $row['arrival_location']; ?>
                            </td>
                            <td>
                                <?= $row['train_name']; ?>
                            </td>

                            <td>
                                <?= $row['booking_date']; ?>
                            </td>
                    

                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">no record found</td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
</div>
</div>
</body>
</html>

