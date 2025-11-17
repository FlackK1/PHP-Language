<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>TESTISIVU</title>
  <style>
    .vari2 {
      color: GREEN;
    }
  </style>

<div class="vari2">

<?php
$otsikko1 = "<h3>Japanin Kasvu</h3>";
$otsikko2 = "<h3>Titteli</h3>";

$teksti1 = "<p>On 23 January 1942, Japanese forces seized Rabaul and fortified it extensively. The site provided an excellent harbor and numerous positions for airfields. The devastating enemy carrier and plane losses at the Battle of Midway (3–6 June 1942) had caused Imperial General Headquarters to cancel orders for the invasion of Midway, New Caledonia, Fiji, and Samoa, but plans to construct a major seaplane base at Tulagi went forward..</p>";
$teksti2 = "<p>distinguished military analyst once noted that if titles were awarded in America as they are in England, the commanding general of Marine Corps forces at Guadalcanal would be known simply as “Vandegrift of Guadalcanal.”</p>";


$kokoteksti = $otsikko1 . $teksti1 . $otsikko2 . $teksti2;


echo $kokoteksti;
?>
</div>
</body>
</html>
