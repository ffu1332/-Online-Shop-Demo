<?php
$dbconnection = mysqli_connect("localhost", "root", "", "onlineshopdemo");

//Check if the connection is successful.
if (mysqli_connect_errno()){
    return "Failed to connect to Mysql: ". mysqli_connect_error();
    exit();
}

// echo mysqli_get_client_info();


mysqli_set_charset($dbconnection, "utf8");
?>