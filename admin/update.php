<?php
include('../dbconnect.php');
include('../head.php');
if (isset($_POST['update'])) {
    if (isset($_POST['ticketid']) && isset($_POST['train_name']) && isset($_POST['booking_date']) && isset($_POST['departure_time']) && isset($_POST['arrival_time']) && isset($_POST['departure_location']) && isset($_POST['destination'])) {
        $ticket_id = $_POST['ticketid'];
        $train_name = $_POST['train_name'];
        $date_available = $_POST['booking_date'];
        $departure_time = $_POST['departure_time'];
        $arrival_time = $_POST['arrival_time'];
        $departure_location = $_POST['departure_location'];
        $destination = $_POST['destination'];
       $query=" UPDATE train_ticket SET train_name=:train_name ,date_available=:date_available, departure_time=:departure_time,arrival_time=:arrival_time, departure_location=:departure_location, destination=:destination WHERE ticket_id=:ticket_id";
       // $query = "UPDATE train_ticket SET  train_name=:train_name, date_available=:date_available, departure_time=:departure_time, arrival_time=:arrival_time,departure_location=:departure_location,destination=:destination WHERE id=:ticket_id";
        $statement = $conn->prepare($query);

        $data = [
            ':train_name' => $train_name,
            ':date_available' => $date_available,
            ':departure_time' => $departure_time,
            ':arrival_time' => $arrival_time,
            ':departure_location' => $departure_location,
            ':destination' => $destination,
            ':ticket_id' => $ticket_id,


        ];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['Message'] = "update successfully";
            header('location:allpackages.php');
            exit(0);
        }
    }
    echo "error";
}
?>