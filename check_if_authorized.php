<?php
session_start();
if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
    header('location:admin/admin.php');
} elseif (
    isset($_SESSION['usertype']) &&
    $_SESSION['usertype'] == 'passenger'
) {
    header('location:passenger/passenger.php');
}
