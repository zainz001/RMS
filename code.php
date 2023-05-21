<?php
session_start();
include('dbconnect.php');
if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['user_type'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
        $query = "SELECT  * FROM `users` WHERE email='$email' AND password='$password' AND user_type='$user_type'";
        $query_run = $conn->prepare($query);
        $query_run->execute();
        $result = $query_run->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $id = $result['id'];
            $name = $result['name'];
            $email = $result['email'];
            $type = $result['user_type'];
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['usertype'] = $user_type;
            if ($_SESSION['usertype'] == 'admin') {
                $_SESSION['Message'] = "successfully login";
                header('location:admin.php');
                exit(0);
            } else if ($_SESSION['usertype'] == 'customer') {
                $_SESSION['Message'] = "successfully login";
                header('location:passenger.php');
                exit(0);
            } else {
                echo "incorrect";
            }
        }
    }
}


if (isset($_POST['signup'])) {
    if ($_POST['password'] == $_POST['cpassword']) {
        if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['city']) && isset($_POST['user_type'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];
            $city = $_POST['city'];
            $user_type = $_POST['user_type'];
            $query = "INSERT INTO users(name ,email, password,  contact, city,user_type) VALUES (:name,:email,:password, :contact,:city,:user_type)";
            $query_run = $conn->prepare($query);
            $data = [
                ':name' => $name,
                ':email' => $email,
                ':password' => $password,
                ':contact' => $contact,
                ':city' => $city,
                ':user_type' => $user_type,
            ];
            $query_run->execute($data);
        }
    } else if ($_POST['password'] != $_POST['cpassword']) {
        echo '<script>  alert("Match both the passwords");  </script>';
        header('location:signup.php');
    }
}
