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
  <div class="pun">
   <?php
 
    $resistances = array(10, 10, 10, 0);


    function parallel_resistance($resistances) {
        $inverse_sum = 0;
        foreach ($resistances as $resistance) {
            if ($resistance != 0) {
                $inverse_sum += 1 / $resistance;
            }
        }
        if ($inverse_sum == 0) {
            return 0;
        } else {
            return 1 / $inverse_sum;
        }
    }

 
    $total_resistance = parallel_resistance($resistances);

    echo "<h2>Vastusten arvot</h2>";
    echo "<ul>";
    echo "<li>R1 = " . $resistances[0] . " Ω</li>";
    echo "<li>R2 = " . $resistances[1] . " Ω</li>";
    echo "<li>R3 = " . $resistances[2] . " Ω</li>";
    echo "<li>Rkok = " . $total_resistance . " Ω</li>";
    echo "</ul>";
   ?>
  </div>
</body>
</html>

