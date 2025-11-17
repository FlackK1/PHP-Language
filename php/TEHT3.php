<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>TESTISIVU</title>
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
  </style>
</head>
<body>
  <h1 class="vari1">Laskutoimituksia</h1>

  <div class="esimerkki koodisini">
    <?php
      $sade = 10;
      $pii = 3.14159;

      $ympyran_ala = $pii * pow($sade, 2);
      $pallon_pinta_ala = 4 * $pii * pow($sade, 2);
      $pallon_tilavuus = (4/3) * $pii * pow($sade, 3);

      echo "<h3>Ympyrän pinta-alan laskeminen</h3>";
      echo "Ympyrän pinta-ala lasketaan kaavalla:<br>";
      echo "A = π * säde<sup>2</sup><br>";
      echo "Jos säde on $sade, pinta-ala on $ympyran_ala.<br><br>";

      echo "<h3>Pallon pinta-alan laskeminen</h3>";
      echo "Pallon pinta-ala lasketaan kaavalla:<br>";
      echo "A = 4 * π * säde<sup>2</sup><br>";
      echo "Jos säde on $sade, pinta-ala on $pallon_pinta_ala.<br><br>";

      echo "<h3>Pallon tilavuuden laskeminen</h3>";
      echo "Pallon tilavuus lasketaan kaavalla:<br>";
      echo "V = (4/3) * π * säde<sup>3</sup><br>";
      echo "Jos säde on $sade, tilavuus on $pallon_tilavuus.<br><br>";
    ?>
  </div>
</body>
</html>
