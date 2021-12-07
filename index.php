<?php


$con = mysqli_connect('localhost', 'kekzrt', 'titok');

if (!$con) {
    die('Hiba a kapcsolódás sikertelen!');
}

$sql = 'create database kekzrt';

if (mysqli_query($con, $sql)) {
    echo 'Az adatbázis létrejött';
} else {
    echo 'Hiba! Az adatbázis létrehozás sikertelen<br>';
    echo mysqli_error($con);
}

mysqli_close($con);
