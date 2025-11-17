<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <div class="pun">
<?php

$time = date("H.i");

if ($time >= 5.00 && $time <= 9.00) {
   echo "hyvää huomenta.";
} elseif ($time > 9.01 && $time <= 14.00) {
    echo "hyvää päivää.";
} elseif ($time > 14.01 && $time <= 18.00) {
   echo "hyvää iltapäivää.";
} elseif ($time > 18.01 && $time <= 22.00) {
  echo "hyvää iltaa.";
} elseif ($time > 22.01 && $time <= 4.99) {
    echo "rauhallista yötä.";
} else {
    echo "virhe.";
}
?>
	</div>
	</body>
</html>
