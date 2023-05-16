<?php
session_start();
include('dbconnect.php');

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




?>