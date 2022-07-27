<?php
$servername="localhost";
$username="root";
$password="";

//establishing connection
$conn = new mysqli($servername,$username,$password);

if(!$conn){
    dies("connection failed dude".$conn->connect_error);
}
else{
    $sql1 = "CREATE DATABASE products";
    if($conn->query($sql1)===TRUE){
    echo "Database created successfully";
}
}
?>
