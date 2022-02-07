<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = 10;
    $n2 = 10;
    $m = ($n1 + $n2) / 2;
    // Funções Aritméticas
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    
    echo "A adição entre $n1 e $n2 é ". ($n1 + $n2); 
    echo "<br>A subtração entre $n1 e $n2 é ". ($n1 + $n2);
    echo "<br>A multiplicação entre $n1 e $n2 é ". ($n1 * $n2);
    echo "<br>A divisão entre $n1 e $n2 é ". ($n1 / $n2);
    echo "<br>A modulo vale: ". ($n1 % $n2);
    echo "<br> A média vale:". ($m);

    // Funções Aritméticas
    echo "<br>Valores recebidos : $v1 e $v2";
    echo "<br>O valor absoluto de $v2 é: " .abs($v2);
    echo "<br>O valor de $v1 <sup>$v2</sup> é: = " .pow($v1, $v2);
    echo "<br>A raiz quadrada de $v1 é: " .sqrt($v1);
    echo "<br>O arredondamento de $v1 é: ".round($v1); // ceil (arredonda pra cima) floor (arredonda pra baixo)
    echo "<br>A parte inteira de $v2 é: " .intval($v2);  
    echo "<br>O valor de $v1 em moeda é R$: " .number_format($v1,2);

    ?>
</body>
</html>