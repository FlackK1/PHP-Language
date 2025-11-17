<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <div class="pun">
<?php
 $number = array(2.35, 5.55, -101.2, -219.7);
 

  echo "Numero " . $number[0] . ", " . $number[1] . ", " . $number[2] . " ja " . $number[3] . " pyöristettynä on:<br>";
  echo(round($number[0]) . "<br>");
  echo(round($number[1]) . "<br>");
  echo(round($number[2]) . "<br>");
  echo(round($number[3]) . "<br>");
?>
	</div>
</body>
</html>
