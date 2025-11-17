<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Menu valikko</title>
  <style>
.menu {
  background-color: #CD5C5C; 
  width: 700px;
  margin-right: 20px; 
  padding: 10px; 
}

ul {
  list-style-type: none; 
  margin: 0;
  padding: 0;
  overflow: hidden;
  display: flex; 
}

li {
  margin-right: 20px; 
}

li a {
  display: inline-block; 
  color: white;
  text-align: center;
  padding: 10px 15px; 
  text-decoration: none;
  background-color: #CD5C5C; 
}

li a:hover {
  background-color: #F08080; 
}

  </style>
</head>
<body>

<div class="menu">
  <ul>
    <li><a href="index1.php">Tehtävät</a></li>
    <li><a href="index2.php">Viestien lähettäminen</a></li>
    <li><a href="index3.php">Saapuneet viestit</a></li>
    <li><a href="index4.php">Viestien poisto</a></li>

  </ul>
</div>

</body>
</html>
