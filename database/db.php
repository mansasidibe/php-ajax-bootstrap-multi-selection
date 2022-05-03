<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "song";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $name = $_POST['name'];
    $songs = implode(', ', $_POST['songs']);
    $sql = "INSERT INTO playlist (name, songs) VALUES ('$name', '$songs')";
    $result = $mysqli->query($sql);
    echo 'Ajoutés avec succès!'
?>