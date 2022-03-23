<?php 

function getConnection()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "ecshop";

    $conn = new mysqli($hostname, $username, $password, $database_name);

    if($conn){
        return $conn;
    } 
    else{
        die("$conn->connect_error");
    }
}

?>