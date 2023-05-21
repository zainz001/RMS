<?php
include('dbconnect.php');

$query = "SELECT * From train_ticket";
$query_run = $conn->prepare($query);
$query_run->execute();
$result = $query_run->fetch(PDO::FETCH_ASSOC);
?>


<body>
    <?php
    if ($result) {
        foreach ($result as $row) {
    ?>
            <table>
                <thead>
                    <tr>
                        <!-- Add this column at the end of the table And make a button ajax call that will fetch data in a model to and make an update command Query of it   -->
                        <th>Update</th>


                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

    <?php
        }
    }

    ?>

</body>