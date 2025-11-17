<!DOCTYPE html>
<html>
<head>
<style>
   .vari2 {
            color: GREEN;
        }
</style>
</head>
<body>
  <div class="vari2">
    <?php
   
      $testitulokset = [123, 234, 456, 567];

      foreach ($testitulokset as $tulos) {
 
        echo "\n$tulos <br>";

        switch ($tulos) {
          case 123:
            echo "Tulos on 123!<br>";
            break;
          case 234:
            echo "Tulos on 234!<br>";
            break;
          case 456:
            echo "Tulos on 456!<br>";
            break;
          case 567:
            echo "Tulos on 567!<br>";
            break;
          default:
            echo "Sinun tulos ei ole mikään näistä luvuista!<br>";
        }

       
        echo "<br>";
      }
    ?> 
  </div>
</body>
</html>
