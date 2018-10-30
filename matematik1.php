<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matematik fonksiyonlar 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="mert.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>bir sayımı </h3>
    <?php

  $a=5;
  $b="12";
  $c="012";
  $d="012.75";
  $e="5 yüz";
  if(is_numeric($a)) 
  echo("\$a sayısal bir değişken değeri $a<br/>");
   else
  echo("\$a sayısal bir değişken değil $a<br/>");
  if(is_numeric($b)) 
  echo("\$b sayısal bir değişken değeri $b<br/>");
   else
  echo("\$b sayısal bir değişken değil $b<br/>");
  if(is_numeric($c)) 
  echo("\$c sayısal bir değişken değeri $c<br/>");
   else
  echo("\$c sayısal bir değişken değil $c<br/>");
  if(is_numeric($d)) 
  echo("\$d sayısal bir değişken değeri $d<br/>");
   else
  echo("\$d sayısal bir değişken değil $d<br/>");
  if(is_numeric($e)) 
  echo("\$e sayısal bir değişken değeri $e<br/>");
   else
  echo("\$e sayısal bir değişken değil $e<br/>");





    ?>
</body>
</html>