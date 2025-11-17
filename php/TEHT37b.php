<div class="vari1">
  <form action="" method="POST">
   <!-- Lomake-kentät joilla annetaan resistanssiarvoja -->
	 
   <p>Rinnankytkennän resistanssi lasku</p>
   <label for="">Vastus 1 (R1):</label>
    <input id="lomake" type="text" name="R1"><br>
   <label for="">Vastus 2 (R2):</label> 
    <input id="lomake" type="text" name="R2"><br>
   <label for="">Vastus 3 (R3):</label>
	<input id="lomake" type="text" name="R3"><br>
	  
   <input type="submit" name="painike1" id="pnk" value="Laske Rinnankytkentä" />
   <input type="submit" name="painike2" id="pnk" value="Nollaa" />
  </form>
	
  <?php 
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $R1 = $_POST['R1'];
       $R2 = $_POST['R2'];
       $R3 = $_POST['R3'];
  
       if(isset($_POST['painike1'])){
           laskeRinnankytkenta($R1, $R2, $R3);
       }
       if(isset($_POST['painike2'])){
           echo "";
       }
   }
   
   function laskeRinnankytkenta($R1, $R2, $R3)
   {
       if ($R1 > 0 && $R2 > 0 && $R3 > 0) {
           $Rtotal = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
           echo "Annettujen vastusten rinnankytkennän resistanssi on:<br> 
                 R1 = $R1 Ω<br>R2 = $R2 Ω<br>R3 = $R3 Ω<br> 
                 Kokonaisresistanssi = " . round($Rtotal, 2) . " Ω";
       } else {
           echo "Vastus ei voi olla nolla, tai negatiivinen arvo.";
       }
   }
  ?>
</div>  
