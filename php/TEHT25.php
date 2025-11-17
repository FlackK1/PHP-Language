<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="pun"> 
    <?php
      $taulu = array(
                array("Nimi:", koe1 , koe2 , koe3 , koe4 , arvosanat ),
                array("Alli:", 30 , 40 , 50 , 60 , 0 , 0 ),
                array("Bertta:", 40 , 50 , 60 , 70 , 0 , 0 ),
                array("Carita:", 50 , 60 , 70 , 80 , 0 , 0 ),

               );
			
      for ($rivi = 0; $rivi <= count($taulu); $rivi++) {
        for ($sarake = 0; $sarake <= 7; $sarake++){
	      echo " ". $taulu[$rivi][$sarake] ." ";
      }
      echo "<br>";
      }
    ?>
  </div>
    </body>
</html>