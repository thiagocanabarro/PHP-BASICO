<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function soma ($a, $b) {
        $s = $a + $b;
        return $s;
    }

    $x = 3;
    $y = 4;
    $r = soma($x, $y);
    echo "A soma entre $x e $y é igual a $r";
    ?>
</body>
</html>