<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <style>
	

    </style>
</head>
<body>
  

<div class="pun">
   <?php
    echo "<h4>Kaksi-uloitteinen taulukko</h4>";
    $eka_taulu = 
       array  (
         array("Rivi 1:",  "10",20,0),
         array("Rivi 2:",  "20",30,0),
         array("Tulokset:"," 0", 0,0)
     );
    
	$eka_taulu[0][3] = $eka_taulu[0][1] + $eka_taulu[0][2];
	$eka_taulu[1][3] = $eka_taulu[1][1] + $eka_taulu[1][2];
	$eka_taulu[2][1] = $eka_taulu[0][1] + $eka_taulu[1][1];
	$eka_taulu[2][2] = $eka_taulu[0][2] + $eka_taulu[1][2];
	$eka_taulu[2][3] = $eka_taulu[0][3] + $eka_taulu[1][3];
	
	echo "<p> Taulukon sisältö laskutoimituksien jälkeen:<p>";
    
    echo $eka_taulu[0][0]." ".$eka_taulu[0][1]." ".$eka_taulu[0][2]." ". 
	      $eka_taulu[0][3]."<br>";
    echo $eka_taulu[1][0]." ".$eka_taulu[1][1]." ".$eka_taulu[1][2]." ". 
	      $eka_taulu[1][3]."<br>";
	echo $eka_taulu[2][0]." ".$eka_taulu[2][1]." ".$eka_taulu[2][2]." ". 
	      $eka_taulu[2][3]."<br>";
   ?>
  </div>
  </body>
</html>