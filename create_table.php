<?php


$con = mysqli_connect('localhost', 'kekzrt', 'titok','kekzrt');

if (!$con) {
    die('Hiba a kapcsolódás sikertelen!');
}

$sql = "create table dolgozok2 (
	az int not null primary key auto_increment,
	nev varchar(50),
	telepules varchar(30),
	fizetes double
)";

if (mysqli_query($con, $sql)) {
    echo 'Az tábla létrejött';
} else {
    echo 'Hiba! A tábla létrehozás sikertelen<br>';
    echo mysqli_error($con);
}

mysqli_close($con);
