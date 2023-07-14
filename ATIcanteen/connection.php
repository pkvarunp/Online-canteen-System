<?php
$db_host="localhost";
$db_user="username";
$db_password="password";
$db_name="ofos";

//creating connection
$conn = new mysqli($db_host,$db_user,$db_password,$db_name);
//checking connection
if($conn->connect_error){
    die("connection faild");
}
?>
