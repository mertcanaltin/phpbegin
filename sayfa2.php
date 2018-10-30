<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Fonksiyona global değişken tanımlama</title>
    <link rel="stylesheet" href="mert.css">
</head>
<body>
    <?php
    $site="mugla meslek yüksek okulu";
function baslik($bilgi){
    global $site;
    echo("<div class=\"baslik\">");
    echo("<span>$bilgi</span>");
    echo("<h4>$site</h4>");
    echo("</div>");  
}
baslik("Muğla MYO");
    ?>
</body>
</html>
