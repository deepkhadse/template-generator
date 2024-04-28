<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "templategenerator";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `userdata`(`name`, `phone`, `email`, `subject`, `message`) VALUES ('$name','$phone','$email','$subject','$message')";

$result = mysqli_query($con , $sql);

if($result){
    echo "Data Submitted";
}
else{
    echo "Error";
}
?>