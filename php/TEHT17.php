<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .vari2 {
            color: Maroon;
        }
    </style>
</head>
<body>
    <div class="vari2">
        <?php
        $luku1 = 0;
        $luku2 = 118;
        $luku3 = 119;
        $luku4 = 212;
        $luku5 = 213;
        $luku6 = 305;
        $luku7 = 306;
        $luku8 = 400;

        $total = $luku1 + $luku2;

        if ($total >= 0 && $total <= 118) {
            echo "Arvosana on 0";
        } elseif ($total > 118 && $total <= 212) {
            echo "Arvosana on 1";
        } elseif ($total > 212 && $total <= 305) {
            echo "Arvosana on 2";
        } elseif ($total > 305 && $total <= 400) {
            echo "Arvosana on 3";
        }
        ?>
    </div>
</body>
</html>
