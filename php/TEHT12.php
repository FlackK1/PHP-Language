<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Satisfy', cursive;
            font-size: 24px;
        }
        .pun {
            margin: 20px;
            padding: 10px;
            border: 2px solid black;
            width: 300px;
        }
    </style>
</head>
<body>
  
 <div class="pun">
  <?php

    $arvio = array(
        "koe1" => 7, 
        "koe2" => 3, 
        "koe3" => 5, 
        "tulos" => 0
    );

   
    $arvio['tulos'] = $arvio['koe1'] + $arvio['koe2'] + $arvio['koe3'];

    echo $arvio['tulos']. "<br>";
    echo "Koe 1 = " . $arvio['koe1'] . "<br>";
    echo "Koe 2 = " . $arvio['koe2'] . "<br>";
    echo "Koe 3 = " . $arvio['koe3'] . "<br>";
    echo "Yhteispisteet = " . $arvio['tulos'];
  ?>
  </div>

</body>
</html>
