<?php
// připojení k databázi (soubor db.php definuje $spojeni)
include 'db.php';

// kontrola, že data přišla metodou POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // očista vstupních hodnot před uložením
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $prijmeni = htmlspecialchars($_POST['prijmeni']);
    $koment = htmlspecialchars($_POST['koment']);

    // SQL příkaz pro vložení nového záznamu do tabulky
    $sql = "INSERT INTO zaznamy (jmeno, prijmeni, koment) VALUES ('$jmeno', '$prijmeni', '$koment')";

    // provedení dotazu a kontrola, zda se vložení podařilo
    if (mysqli_query($spojeni, $sql)) {
        echo "Nový záznam byl úspěšně vytvořen";
    }
    else {
        // výpis chyby při selhání dotazu
        echo "Chyba: " . $sql . "<br>" . mysqli_error($spojeni);
    }
}
?>