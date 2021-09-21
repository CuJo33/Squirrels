<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "events";

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect($host, $user, $pw, $db);

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "Not able to establish Database Connection";
    }
?>

