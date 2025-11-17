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
    $taulukko = array(
        array("Matti Markkanen", "Teemu Järvinen", "Jooa Korkonen"),
        array(95, 87, 78), 
        array(85, 79, 88),
        array(90, 95, 80),
        array(75, 85, 85), 
        array(0, 0, 0), 
        array(0, 0, 0)  
    );

    for ($sarake = 0; $sarake < 3; $sarake++) {
        $total = 0;
        for ($rivi = 1; $rivi < 5; $rivi++) {
            $total += $taulukko[$rivi][$sarake];
        }
        $taulukko[5][$sarake] = $total;
    }

    for ($sarake = 0; $sarake < 3; $sarake++) {
        $total = $taulukko[5][$sarake];
        if ($total < 120) {
            $taulukko[6][$sarake] = 0;
        } elseif ($total < 176) {
            $taulukko[6][$sarake] = 1;
        } elseif ($total < 232) {
            $taulukko[6][$sarake] = 2;
        } elseif ($total < 288) {
            $taulukko[6][$sarake] = 3;
        } elseif ($total < 344) {
            $taulukko[6][$sarake] = 4;
        } else {
            $taulukko[6][$sarake] = 5;
        }
    }

    echo "<table border='1'>";
    echo "<thead><tr><th>Nimi</th><th>Testi 1</th><th>Testi 2</th><th>Testi 3</th><th>Testi 4</th><th>Yhteensä</th><th>Tulos</th></tr></thead>";
    echo "<tbody>";
    for ($sarake = 0; $sarake < 3; $sarake++) {
        echo "<tr>";
        echo "<td>" . $taulukko[0][$sarake] . "</td>"; 
        for ($rivi = 1; $rivi < 5; $rivi++) {
            echo "<td>" . $taulukko[$rivi][$sarake] . "</td>"; 
        }
        echo "<td>" . $taulukko[5][$sarake] . "</td>"; 
        echo "<td>" . $taulukko[6][$sarake] . "</td>"; 
        echo "</tr>";
    }
    echo "</tbody></table>";
    ?>
    </div>
</body>
</html>
