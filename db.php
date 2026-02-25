<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "formular";


$spojeni = new mysqli($servername, $username, $password, $dbname);

if ($spojeni->connect_error) {
    die("Connection failed: " . $spojeni->connect_error);
}

$spojeni->set_charset("utf8");



?>