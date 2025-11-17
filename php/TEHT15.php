<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>TESTISIVU</title>
  <style>
    .vari2 {
      color: RED;
    }
  </style>
</head>
<body>
  
<div class="vari2">
<?php
  $luku1 = 50; 
  $luku2 = 100;

  if ($luku1 >= 50 && $luku1 < 100) {
    echo "Luku 1 on 50 tai pienempi kuin 100";
  }

  if ($luku2 > 100) {
    echo "Luku2 on suurempi kuin 100";
  }
?>
</div>

</body>
</html>

