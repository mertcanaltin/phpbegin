<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>metinden boşluk silme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
function degistir_krdsm($metin ="") {
    $metin=trim($metin);
    $Kaynak = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
    $Hedef = array('c','c','g','g','i','i','o','o','s','s','u','u','_');
    for($i=0;$i<=count($Kaynak)-1;$i++){
        $metin=str_replace($Kaynak[$i],$Hedef[$i],$metin);
    }
    return $metin;
}

$baslik="Muğla Meslek Yüksekokulu Müdürlüğü";
$donusum= degistir_krdsm($baslik);
echo("$baslik<br/>");
echo("$donusum<br/>");
    ?>
   
</body>
</html>