<?php
    //session start
    session_start();
    //establish connection
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="farmequipmentrentals";

    //connect with mysql
    $conn = mysqli_connect($servername, $username, $password, $dbname); 

?>