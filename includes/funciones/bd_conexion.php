<?php
    //$conn = new mysqli('localhost', 'root', 'hostserver119/', 'gdlwebcamp');
    $conn = new mysqli('localhost', 'root', '123456', 'gdlwebcamp');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>