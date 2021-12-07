<?php


$con = mysqli_connect('localhost', 'kekzrt', 'titok', 'kekzrt');

if (!$con) {
    die('Hiba a kapcsolódás sikertelen!');
}

$sql = "INSERT INTO dolgozok2 (nev, telepules, fizetes) 
VALUES 
('Para Béla', 'Szeged', '2850000'),
('Toma Irén', 'Szolnok', '2435000'),
('Leng Katalin', 'Szeged', '2532000');
";

if (mysqli_query($con, $sql)) {
    echo 'Az beszúrás sikeres';
} else {
    echo 'Hiba! A beszúrás során';
    echo mysqli_error($con);
}

mysqli_close($con);
