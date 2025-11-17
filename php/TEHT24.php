<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="pun"> 
    <?php
      $taulu = array(
                array("1.rivi:", A , B , C , D , E ),
                array("2.rivi:", F , G , H , I , J ),
                array("3.rivi:", K , L , M , N , O ),
                array("4.rivi:", P , Q , R , S , T ),
                array("5.rivi:", U , V , W , X , Y ),
				  array("6.rivi:", Z , Å , Ä , Ö , Y ),
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