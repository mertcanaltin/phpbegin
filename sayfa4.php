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
function baslik($bilgi="Muğla"){
    global $site;
 $deger=  "<div class=\"baslik\">";
 $deger.=  "<span>$bilgi</span>";
 $deger.= "<h4>$site</h4>";
 $deger.=  "</div>";  
 return $deger;
}
if (function_exists("baslik")) {
    
    echo baslik("üniversite");
}

    ?>
</body>
</html>