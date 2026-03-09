<?php
// zahrnutí skriptu pro připojení k databázi; nastaví proměnnou $spojeni
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formular</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1>Recenze</h1>
        <form action="pridat.php" method="POST">

            <!-- pole pro jméno -->
            <input class="jmeno" type="text" name="jmeno" placeholder="Jméno">

            <!-- pole pro příjmení -->
            <input class="jmeno" type="text" name="prijmeni" placeholder="Příjmení">

            <!-- textová oblast pro komentář -->
            <textarea name="koment" rows="5" cols="40" placeholder="Zpráva"></textarea>

            <!-- tlačítko odeslat -->
            <input type="submit" value="Odeslat">
        </form>
        <?php
        // dotaz pro výběr všech záznamů z tabulky 'zaznamy'
        $dotaz = "SELECT * FROM zaznamy";
        // provedení dotazu pomocí připojení z db.php
        $vysledek = $spojeni->query($dotaz);
        // kontrola, zda dotaz vrátil nějaké řádky
        if ($vysledek->num_rows > 0) {
            // projití výsledků a vypsání každé recenze
            while ($radek = $vysledek->fetch_assoc()) {
                echo "<p>" . $radek["Jmeno"] . " " . $radek["Prijmeni"] . ": " . $radek["Koment"] . "</p>";
            }
        } else {
            // žádné záznamy, zobrazíme zprávu
            echo "<p>Žádné recenze</p>";
        }
        ?>
    </div>
</body>
</html>