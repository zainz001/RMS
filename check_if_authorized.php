<?php
session_start();
if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
    header('location:admin.php');
} elseif (
    isset($_SESSION['usertype']) &&
    $_SESSION['usertype'] == 'passenger'
) {
    header('location:passenger.php');
}
