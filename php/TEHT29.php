<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
    </style>
</head>
<body>
    <div class="vari2">
    <?php
       
        if (isset($_POST['R1']) && isset($_POST['R2']) && isset($_POST['R3'])) {
          
            $R1 = floatval($_POST['R1']);
            $R2 = floatval($_POST['R2']);
            $R3 = floatval($_POST['R3']);
            
   
            if ($R1 > 0 && $R2 > 0 && $R3 > 0) {
             
                $Rt = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
                
                echo "Kolmen vastuksen rinnan kytkennän kokonaisvastus on: " . round($Rt, 2) . " ohmia";
            } else {
         
                echo "Vastus-arvojen tulee olla positiivisia lukuja.";
            }
        }  
    ?>
    </div>
</body>
</html>
