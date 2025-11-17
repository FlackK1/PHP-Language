<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poista viestit</title>
</head>
<body>

<?php
$tiedosto = "viestit.txt";

if (file_exists($tiedosto)) {
    file_put_contents($tiedosto, ""); 
    echo "<p>Kaikki viestit on poistettu.</p>";
} else {
    echo "<p>Viestitiedostoa ei löytynyt.</p>";
}

?>
<a href="index1.php">Palaa etusivulle</a>

</body>
</html>