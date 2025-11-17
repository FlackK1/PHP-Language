  <!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="pun">
	<?php
      function etuNimi($nimi, $ika)
      {
        $nykyinenVuosi = date("Y"); 
        $syntymavuosi = $nykyinenVuosi - $ika; 
        echo "$nimi Rupunen. Syntyi vuonna $syntymavuosi <br>"; 
      }

  
      etuNimi("Tuomas", 25);
      etuNimi("Henri", 27);
      etuNimi("Petteri", 30); 
    ?>
</div>

      </body>
</html>