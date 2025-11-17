 <!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>lähetä viestit</title>
  <style>
    .vari1 {
      color: RED;
    }
    
    .esimerkki {
      background-color: RGB(248, 244, 253);
      width: 50%;
      border: 1px solid RGB(41, 20, 82);
      padding: 20px;
      margin: 20px;
      box-shadow: 7px 7px 5px grey;
    }
    .koodisini {
      color: DARKRED;
      font-size: 130%;
    }
	  .RED-box {
      background-color: RED;
      padding: 20px;
      border-radius: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div>
<div class="vari2">
 
     <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nimi = htmlspecialchars($_POST["nimi"]);
          $sahkoposti = htmlspecialchars($_POST["sahkoposti"]);
          $viesti = htmlspecialchars($_POST["viesti"]);
          
          echo "<p>Nimi: " . $nimi . "</p>";
          echo "<p>Sähköposti: " . $sahkoposti . "</p>";
          echo "<p>Viesti: " . ($viesti) . "</p>";
        }
      ?>
       <div class="RED-box">
      <form action="tervetuloa.php" method="POST">
        Nimi: <input type="text" name="nimi" required><br>
        Sähköposti: <input type="email" name="sahkoposti" required><br>
        Viesti: <textarea name="viesti" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Lähetä">
      </form>
</div>

</div>
 </div>
 
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
} 

?>

<?php
if (!empty($ilmoitus)) {

    echo $ilmoitus;
}
?>
</body>
</html>
