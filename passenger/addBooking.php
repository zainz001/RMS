<?php
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
        $query ="INSERT INTO booking_customer( name, no_of_pessenger, departure_location, arrival_location, train_name, booking_date, ticketid) VALUES (:name,:no_of_pessenger,:departure_location,:arrival_location,:train_name,:booking_date,:ticketid)";
        //$query = "INSERT INTO booking_customer( name, no_of_pessenger, departure_location, arrival_location, train_name, booking_date, ticketid) VALUES (':name',':no_of_pessenger',':departure_location',':arrival_location',':train_name',':booking_date',':ticketid')";
        $query_run = $conn->prepare($query);
        $data = [

            ':name' => $name,
            ':no_of_pessenger' => $no_of_pessenger,
            ':departure_location' => $departure_location,
            ':arrival_location' => $arrival_location,
            ':train_name' => $train_name,
            ':booking_date' => $booking_date,
            ':ticketid' => $ticketid,


        ];
        $query_run->execute($data);
        if ($data) {
            header('location:./admin/allBooking,php');
            
            
        }
        header('location:../admin/allBookings.php');
    } else {
        echo 'not insert';
    }


}
?>