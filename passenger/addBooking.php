<?php
session_start();
include('../dbconnect.php');
include('../head.php');

if (isset($_POST['bookticket'])) {

    if (isset($_POST['ticketid']) && isset($_POST['name']) && isset($_POST['no_of_pessenger']) && isset($_POST['departure_location']) && isset($_POST['destination']) && isset($_POST['train_name']) && isset($_POST['booking_date'])) {

        $ticketid = $_POST['ticketid'];
        $name = $_POST['name'];
        $no_of_pessenger = $_POST['no_of_pessenger'];
        $departure_location = $_POST['departure_location'];
        $arrival_location = $_POST['destination'];
        $train_name = $_POST['train_name'];
        $booking_date = $_POST['booking_date'];
        $query = "INSERT INTO booking_customer( user_id,name, no_of_pessenger, departure_location, arrival_location, train_name, booking_date, ticketid) VALUES (:user_id,:name,:no_of_pessenger,:departure_location,:arrival_location,:train_name,:booking_date,:ticketid)";
        //$query = "INSERT INTO booking_customer( name, no_of_pessenger, departure_location, arrival_location, train_name, booking_date, ticketid) VALUES (':name',':no_of_pessenger',':departure_location',':arrival_location',':train_name',':booking_date',':ticketid')";
        $query_run = $conn->prepare($query);
        $data = [
            ':user_id' => $_SESSION['id'],
            ':name' => $name,
            ':no_of_pessenger' => $no_of_pessenger,
            ':departure_location' => $departure_location,
            ':arrival_location' => $arrival_location,
            ':train_name' => $train_name,
            ':booking_date' => $booking_date,
            ':ticketid' => $ticketid,


        ];
        $result = $query_run->execute($data);
        $query2 = "INSERT INTO reservation( customer_id, date_reserve) VALUES (:customerid,:date)";
        $query2run = $conn->prepare($query2);
        $data2 = [
            ':customerid' => $_SESSION['id'],
            ':date' => $booking_date
        ];
        $result2 = $query2run->execute($data2);
        if ($result && $result2) {
            header('location:./paymentDetails.php');
        }
    } else {
        echo 'not insert';
    }


}
?>