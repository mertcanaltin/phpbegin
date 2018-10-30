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
$metin="          muğla     ";
$uzunluk=strlen($metin);
echo("\$metin değişkeninin değeri $metin ve uzunluğu $uzunluk<br/>");

$metin=trim($metin);
$uzunluk=strlen($metin);
echo("\$metin değişkeninin değeri $metin ve uzunluğu $uzunluk<br/>");


    ?>
</body>
</html>