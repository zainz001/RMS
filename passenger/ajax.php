<?php
include('../dbconnect.php');



if (isset($_POST['ticketid'])) { // Change to check for POST request
    $ticketid = $_POST['ticketid'];
    $query = "SELECT * FROM train_ticket WHERE ticket_id = :ticketid";

    $statement = $conn->prepare($query);
    $statement->bindParam(':ticketid', $ticketid);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    // $return_arr[] = array("id" => $result['ticket_id'], );

    if ($result) {
        header('Content-type: application/json');
        echo json_encode($result);
    }
    // echo json_encode($return_arr);

}



?>