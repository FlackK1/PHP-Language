<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lähetä viesti</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $viesti = htmlspecialchars($_POST["viesti"]); 
    $tiedosto = "viestit.txt";
    
    if (!empty($viesti)) {
      
        file_put_contents($tiedosto, $viesti . "\n", FILE_APPEND);
        echo "<p>Viestisi on tallennettu!</p>";
    } else {
        echo "<p>Viestikenttä ei saa olla tyhjä.</p>";
    }
} else {
    echo "<p>Lomake ei ole lähetetty oikein.</p>";
}
?>
<a href="lomake.php">Lähetä uusi viesti</a><br>
<a href="index.php">Palaa etusivulle</a>
</body>
</html>