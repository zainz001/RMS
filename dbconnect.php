<?php
$servername="localhost";
$username="root";
$password="";
$database="rms";
try{
$conn=new PDO("mysql: host=$servername; dbname=$database",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "CONNECT";

}
catch(PDOException $e){
echo "dissconect".$e->getmessage();
}
?>
