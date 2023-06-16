<?php
session_start();
include('../dbconnect.php');


if (isset($_POST['add_ticket'])) {
    if (
        isset($_POST['train_name'])
        && isset($_POST['departure_date'])
        && isset($_POST['departure_time'])
        && isset($_POST['arrival_time'])
        && isset($_POST['departure_location'])
        && isset($_POST['arrival_location'])
    ) {



        $train_name = $_POST['train_name'];
        $departure_date = $_POST['departure_date'];
        $departure_time = $_POST['departure_time'];
        $arrival_time = $_POST['arrival_time'];
        $departure_location = $_POST['departure_location'];
        $arrival_location = $_POST['arrival_location'];



        $query = "INSERT INTO `train_ticket`(`train_name`, `date_available`, `departure_time`, `arrival_time`,`departure_location`, `destination`) VALUES (:train_name,:departure_date,:departure_time, :arrival_time,:departure_location,:arrival_location)";


        $query_run = $conn->prepare($query);

        $data = [

            ':train_name' => $train_name,
            ':departure_date' => $departure_date,
            ':departure_time' => $departure_time,
            ':arrival_time' => $arrival_time,
            ':departure_location' => $departure_location,
            ':arrival_location' => $arrival_location,


        ];
        $query_run->execute($data);
        echo 'inserted successfully';
        
        ?>

     
    <?php
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>    
</head>
<body>
    <p>add more tickets <button type="submit"> <a href="addTickets.php"> add</a></button> </p>
    <p><a href="admin.php">Home</a></p>
</body>
</html>