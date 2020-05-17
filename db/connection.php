<?php

    $servername = "localhost";
    $username = "genetlab_db_user";
    $password = "12ggd%^&#dma#";
    $dbname = "genetlab_genet";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

?>