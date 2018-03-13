<?php
    $conn = new mysqli('localhost', 'root', 'hostserver119/', 'gdlwebcamp');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>