<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
  <style>
    img {
      width: 100%;
      height: auto;
    }
    .row:after {
      content: "";
      clear: both;
      display: table;
    }
    [class*="col-"] {
      float: left;
      padding: 15px;
    }
    @media only screen and (min-width: 600px) {
      .col-s-1 {width: 8.33%;}
      .col-s-2 {width: 16.66%;}
      .col-s-3 {width: 25%;}
      .col-s-4 {width: 33.33%;}
      .col-s-5 {width: 41.66%;}
      .col-s-6 {width: 50%;}
      .col-s-7 {width: 58.33%;}
      .col-s-8 {width: 66.66%;}
      .col-s-9 {width: 75%;}
      .col-s-10 {width: 83.33%;}
      .col-s-11 {width: 91.66%;}
      .col-s-12 {width: 100%;}
    }
    @media only screen and (min-width: 768px) {
      .col-1 {width: 8.33%;}
      .col-2 {width: 16.66%;}
      .col-3 {width: 25%;}
      .col-4 {width: 33.33%;}
      .col-5 {width: 41.66%;}
      .col-6 {width: 50%;}
      .col-7 {width: 58.33%;}
      .col-8 {width: 66.66%;}
      .col-9 {width: 75%;}
      .col-10 {width: 83.33%;}
      .col-11 {width: 91.66%;}
      .col-12 {width: 100%;}
    }
    .custom-font {
      font-family: 'Spirax', cursive;
    }
    .RED-box {
      background-color: red;
      padding: 20px;
      border-radius: 10px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div>
    <div class="vari2">
   
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nimi = htmlspecialchars($_POST["nimi"]);
          $sahkoposti = htmlspecialchars($_POST["sahkoposti"]);
          $viesti = htmlspecialchars($_POST["viesti"]);
          
          echo "<p>Nimi: " . $nimi . "</p>";
          echo "<p>Sähköposti: " . $sahkoposti . "</p>";
          echo "<p>Viesti: " . nl2br($viesti) . "</p>";
        }
      ?>
      
      <form action="tervetuloa.php" method="POST">
        Nimi: <input type="text" name="nimi" required><br>
        Sähköposti: <input type="email" name="sahkoposti" required><br>
        Viesti: <textarea name="viesti" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Lähetä">
      </form>
      
    </div>
  </div>
</body>
</html>
