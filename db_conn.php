<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "webphp";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Bağlantı Hatası!";
}