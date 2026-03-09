<?php
// nastavení parametrů připojení k MySQL databázi
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "formular";

// vytvoření nového objektu mysqli pro spojení
$spojeni = new mysqli($servername, $username, $password, $dbname);

// kontrola, zda připojení proběhlo bez chyby
if ($spojeni->connect_error) {
    // ukončit skript a zobrazit chybovou zprávu
    die("Connection failed: " . $spojeni->connect_error);
}

// zajistit používání UTF‑8 pro správné kódování znaků
$spojeni->set_charset("utf8");

?>