<?php
session_start();
include('dbconnect.php');


if(isset($_POST['signup']))
{
   
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $encpassword=md5($password);
    $contact =$_POST['contact'];
    $city =$_POST['city'];
    $user_type =$_POST['user_type'];

    $query = "INSERT INTO users(name ,email, password,  contact, city,user_type) VALUES (:name,:email,:password, :contact,:city,:user_type)";



    $query_run = $conn->prepare($query);

    $data =[
        
        ':name'=>$name,
        ':email'=>$email,
        ':password'=>$password,

        ':contact'=>$contact,

        ':city'=>$city,
        ':user_type'=>$user_type,


    ];
    $query_run->execute($data);
if ($query_execute) {
 $_SESSION['Message']= "inserted successfully";
 header('location:signup.html');
 exit(0);   
} else {
    $_SESSION['Message']= "not inserted successfully";
 header('location:signup.html');
 exit(0);
}


}

?>