<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $prijmeni = htmlspecialchars($_POST['prijmeni']);
    $koment = htmlspecialchars($_POST['koment']);

    $sql = "INSERT INTO zaznamy (jmeno, prijmeni, koment) VALUES ('$jmeno', '$prijmeni', '$koment')";

    if (mysqli_query($spojeni, $sql)) {
        echo "Nový záznam byl úspěšně vytvořen";
    }
    else {
        echo "Chyba: " . $sql . "<br>" . mysqli_error($spojeni);
    }
}
?>