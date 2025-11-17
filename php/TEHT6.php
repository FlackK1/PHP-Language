<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <style>
	
	.sininen {
		color: blue;
	}
      .vihrea {
        color: green; 
      }
      .violetti {
        color: rgb(132, 0, 230);
        font-family: 'Satisfy', cursive;	  
      }
      .koko {
        font-size: 120%; 
      }
    </style>
</head>
<body>
  <?php
    $aforismi1 = "\"Lähes kaikki suuri on nuorten tekemää.\" - Benjamin Franklin";
    $aforismi2 = "\"Nuoressa ei huilaaminen mene hukkaan.\" - Suomalainen sananlasku";
    $aforismi3_osa1 = "\"Nuoret ovat säännöllisesti";
    $aforismi3_osa2 = "ajattelemattomia.\" - Homeros";

echo "<p class='sininen'>$aforismi1</p>";
echo "<p class='vihrea'>$aforismi2</p>";
echo "<p class='violetti koko'>$aforismi3_osa1<br>$aforismi3_osa2</p>";
?>

</body>
</html>





