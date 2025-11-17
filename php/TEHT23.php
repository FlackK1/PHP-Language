<!DOCTYPE html>
<html>
<head>
</head>
<body>

 <div class="pun"> 
    <?php
      $aakkoset = array(a , b , c , d , e , f , g , h , i , j , k , l , m , n , o , p , q , r , s , t , u , v , w , x, y , z , å , ä , ö ,);
      $taulukoko = count($aakkoset);

      for($rivi = 0; $rivi <  $taulukoko; $rivi++) {
        echo $aakkoset[$rivi];
        echo "<br>";
      }
    ?>
  </div>
  </body>
</html>
