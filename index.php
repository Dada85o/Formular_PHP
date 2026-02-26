<!--// Zdroj:   https://github.com/VitaPhoneCZ/opakovani_recenze.git 
                https://www.w3schools.com/php/php_mysql_insert.asp-->

<?php include 'db.php'; ?>

<html>
<head>
    <title>Formular</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h1>Recenze</h1>
        <form action="pridat.php" method="POST">
            <input type="text" name="jmeno" placeholder="Jméno">
            <input type="text" name="prijmeni" placeholder="Příjmení">
            <textarea name="koment" rows="5" cols="40" placeholder="Zpráva"></textarea>
            <input type="submit" value="Odeslat">
        </form>
        <?php
        $dotaz = "SELECT * FROM zaznamy";
        $vysledek = $spojeni->query($dotaz);
        if ($vysledek->num_rows > 0) {
            while ($radek = $vysledek->fetch_assoc()) {
                echo "<p>" . $radek["Jmeno"] . " " . $radek["Prijmeni"] . ": " . $radek["Koment"] . "</p>";
            }
        } else {
            echo "<p>Žádné recenze</p>";
        }
        ?>
    </div>
</body>
</html>