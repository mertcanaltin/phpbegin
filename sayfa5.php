<!DOCYTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <title>kendi kendini çağıtan (/recursive) fonksiyonu</title>
    </head>
    <body>
        <?php
        $sonuc= 1;
function faktoriyel($a){
global $sonuc;
if($a>1){
$sonuc*=$a;
$a--;
faktoriyel($a);
}
return $sonuc;

}
echo  faktoriyel(19);
echo (" Fucktoriyel!");
        ?>
    </body>
    </html>