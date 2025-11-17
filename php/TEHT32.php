  <!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="pun">
	<?php
      function testiKorkeus($minimiKorkeus = 50) 
      {
        echo "Korkeus on : $minimiKorkeus <br>";
      }
      testiKorkeus(350);
      testiKorkeus(); 
      testiKorkeus(135);
      testiKorkeus(80); 
    ?>
	</div>
            </body>
</html>