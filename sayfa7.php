<!DOCYTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <title>kendi kendini çağıtan (/recursive) fonksiyonu</title>
    </head>
    <body>
        <?php
        $sonuc= "";
function ikilik($a){
global $sonuc;
while($a>1){
$kalan=$a % 2;
$a=($a-$kalan)/2;
$sonuc=$kalan.$sonuc;
}
    $sonuc=$a.$sonuc;
    return $sonuc;
}

echo  ikilik(16);
echo (" İKİLİK!");
        ?>
    </body>
    </html>