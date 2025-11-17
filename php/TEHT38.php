<div class="vari1">
  <form action="" method="POST">
    <p>Sarja- tai rinnankytkennän lasku</p>
    <label for="R1">R1:</label>
    <input id="R1" type="text" name="R1"><br>
    <label for="R2">R2:</label>
    <input id="R2" type="text" name="R2"><br>
    <label for="R3">R3:</label>
    <input id="R3" type="text" name="R3"><br>
    
    <input type="submit" name="painike1" value="Sarjankytkentä" />
    <input type="submit" name="painike2" value="Rinnankytkentä" />
    <input type="submit" name="painike3" value="Nollaa" />
  </form>
  
  <?php 
    $sarjaTulos = "";
    $rinnanTulos = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $R1 = isset($_POST['R1']) ? floatval($_POST['R1']) : 0;
      $R2 = isset($_POST['R2']) ? floatval($_POST['R2']) : 0;
      $R3 = isset($_POST['R3']) ? floatval($_POST['R3']) : 0;
    
      if(isset($_POST['painike1'])){
        $sarjaTulos = laskeSarjan($R1, $R2, $R3);
        echo "<h3>Sarjalaskun vastaus:</h3>";
        echo "Sarjakytkentä: " . $sarjaTulos . "<br>";
      }
      
      if(isset($_POST['painike2'])){
        $rinnanTulos = laskeRinnan($R1, $R2, $R3);
        echo "<h3>Rinnanlaskun vastaus:</h3>";
        echo "Rinnankytkentä: " . $rinnanTulos . "<br>";
      }
      
      if(isset($_POST['painike3'])){
        $sarjaTulos = "";
        $rinnanTulos = "";
        echo "<h3>Lasku on nollattu.</h3>";
      }
    }

    function laskeSarjan($R1, $R2, $R3) {
      return $R1 + $R2 + $R3;
    }
    
    function laskeRinnan($R1, $R2, $R3) {
      if ($R1 == 0 || $R2 == 0 || $R3 == 0) return "Virhe.";
      return 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
    }
  ?>
</div>  
