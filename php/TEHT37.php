<div class="vari1">
  <form action="" method="POST">
    <p>Resistanssin lasku</p>
    <label for="R1">R1:</label>
    <input id="R1" type="text" name="R1"><br>
    <label for="R2">R2:</label>
    <input id="R2" type="text" name="R2"><br>
    <label for="R3">R3:</label>
    <input id="R3" type="text" name="R3"><br>
    
    <input type="submit" name="painike1" value="Resistanssi" />
    <input type="submit" name="painike2" value="Nollaa" />
  </form>
  
  <?php 
    $resisTulos = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $R1 = isset($_POST['R1']) ? floatval($_POST['R1']) : 0;
      $R2 = isset($_POST['R2']) ? floatval($_POST['R2']) : 0;
      $R3 = isset($_POST['R3']) ? floatval($_POST['R3']) : 0;

      if(isset($_POST['painike1'])){
     
        $resisTulos = laskeResistanssin($R1, $R2, $R3);
        echo "<h3>Resistanssin vastaus:</h3>";
        echo "Resistanssi: " . $resisTulos . "<br>";
      }
      
      if(isset($_POST['painike2'])){
      
        $resisTulos = "";
        echo "<h3>Lasku on nollattu.</h3>";
      }
    }

 
    function laskeResistanssin($R1, $R2, $R3) {
      return $R1 + $R2 + $R3;
    }
  ?>
</div>

<div class="linkki">
  <a href="http://tietokanta.dy.fi/softa24b/civelek/PHP/">Palaa tehtäviin</a>
</div>
