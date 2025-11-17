<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lue viestit</title>
</head>
<body>
    <h1>Saapuneet viestit</h1>

    <?php
    $tiedosto = "viestit.txt";

    if (file_exists($tiedosto)) {
        $viestit = file($tiedosto); 
        if (count($viestit) > 0) {
            echo "<ul>";
            foreach ($viestit as $viesti) {
                echo "<li>" . htmlspecialchars($viesti) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Ei viestejä.</p>";
        }
    } else {
        echo "<p>Ei viestejä löytynyt.</p>";
    }
    ?>


</body>
</html>