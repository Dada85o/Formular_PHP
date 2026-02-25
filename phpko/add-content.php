<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $prijmeni = htmlspecialchars($_POST['prijmeni']);
    $zprava = htmlspecialchars($_POST['zprava']);

    $sql = "INSERT INTO recenze (Jmeno, Prijmeni, Koment) VALUES ('$jmeno', '$prijmeni', '$zprava')";

    if (mysqli_query($spojeni, $sql)) {
        echo "Nový záznam byl úspěšně vytvořen";
    }
    else {
        echo "Chyba: " . $sql . "<br>" . mysqli_error($spojeni);
    }
}
?>