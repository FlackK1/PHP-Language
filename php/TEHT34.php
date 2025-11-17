   <!DOCTYPE html>
<html>
<head>
</head>
<body>
 <div class="pun">
	<?php
      function yhteenlasku($luku1, $luku2) 
      {
        $summa = $luku1 + $luku2;
        return $summa;
      }
      echo "5 + 10 = " . yhteenlasku(5, 10) . "<br>";
      echo "7 + 13 = " . yhteenlasku(7, 13) . "<br>";
      echo "2 + 4 = "  . yhteenlasku(2, 4); 
    ?>
	</div>
	</body>
</html>
