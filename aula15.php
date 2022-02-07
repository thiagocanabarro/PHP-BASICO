<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function teste(&$x) {
        $x += 2;
        echo "<br>O valor de X e $x";
    }

    $a = 3;

    teste($a); // aqui vai passar la pra cima o $a vai pro $x e por causa do & vai mudar diretamente

    echo "<br>O valor de A e $a";    
    ?>
</body>
</html>