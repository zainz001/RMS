<?php
session_start();
include('../dbconnect.php');

if (isset($_POST['addpayment'])) {
    if (isset($_POST['cardtype']) && isset($_POST['cardnum'])) {
        $cardtype = $_POST['cardtype'];
        $cardnum = $_POST['cardnum'];
        $query = "INSERT INTO payment_detail( user_id, card_num, card_type) VALUES (:userid,:cardnum,:cardtype) ";
        $query_run = $conn->prepare($query);
        $data = [
            ':userid' => $_SESSION['id'],
            ':cardtype' => $cardtype,
            ':cardnum' => $cardnum
        ];
        $result = $query_run->execute($data);
        if($result){
            header('location:allticket.php');
        }
    }
}



?>