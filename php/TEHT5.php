<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <style>
        .koodisini {
            color: darkblue;
            font-size: 130%;
        }
    </style>
</head>
<body>
<div class="koodisini">
<?php

    $R1 = 4.7;
    $R2 = 3.3;
    $R3 = 5.6;

    $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));

    echo "Alkuperäiset arvot:<br> 
         R1 = $R1 ohmia<br> 
         R2 = $R2 ohmia<br> 
         R3 = $R3 ohmia<br><br>";


    echo "Desimaalit asetettuna:<br>";
    $R1_formatted = number_format($R1, 2, ',', ' ');
    $R2_formatted = number_format($R2, 2, ',', ' ');
    $R3_formatted = number_format($R3, 2, ',', ' ');
    $Rkok_formatted = number_format($Rkok, 2, ',', ' ');

    echo "R1 = $R1_formatted ohmia<br>";
    echo "R2 = $R2_formatted ohmia<br>";
    echo "R3 = $R3_formatted ohmia<br>";
    echo "Rkok = $Rkok_formatted ohmia<br>";
?>
</div>
</body>
</html>
