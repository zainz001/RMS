<?php
session_start();
include('dbconnect.php');


if (isset($_POST['add_ticket'])) {
    if (
        isset($_POST['train_name'])
        && isset($_POST['departure_date'])
        && isset($_POST['departure_time'])
        && isset($_POST['arrival_time'])
        && isset($_POST['departure_location'])
        && isset($_POST['arrival_location'])
    ) {
        

    }
}