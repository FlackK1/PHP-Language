 <!DOCTYPE HTML> 
  <html> 
   <head>
     <meta charset="UTF-8"> 
     <title> TESTISIVU </title>
	 <style>
	  .vari1{
	    color: SlateBlue;
	  }
	 </style>
   </head>
   <body>
   
    <div class="vari1">
    <?php
     $piin_likiarvo= 3.14;
     echo "<h3> Tehdään PhP </h3>";
     echo "Hyvää huomenta.<br>";
     echo "Tänään opettelen PHP:tä.<br>";
     echo "Tämä ", "ei ", "ole ", "hyvä ", "tapa.<br>";
     echo "Vakion π likiarvo on " . $piin_likiarvo . ".";
    ?>
    </div> 
 
  </body>
  </html>