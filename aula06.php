<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- http://127.0.0.1/PHP-BASICO/aula06.php?p=100&aa=2014 -->

    <?php
    $preco = $_GET['p'];
    echo "<br>O Preço do produto é R$ : ". $preco;
    // $preco = $preco + ($preco*0.10);
    //$preco += ($preco*0.10);
    //echo "<br>O novo preço com 10% de aumento é R$ : " .$preco;
    $preco -= ($preco*0.10);
    echo "<br>O novo preço com 10% de desconto é R$ : " .$preco;

    $atual = $_GET["aa"];
    echo "<br>O ano atual é: " .$atual;
    //echo "<br>O ano anterior é: " .--$atual;
    echo "<br>O próximo ano é: " .++$atual;
    $a = 3;
    $b = $a;
    $b += 5;
    echo "<br/>A variavel A vale $a";
    echo "<br/>A variavel B vale $b";

    $x = "abc";
    $$x = "def";

    echo "<br>O conteudo da variavel X é $x";
    echo "<br>A variavel criada recebeu o valor $abc";
    ?>
</body>
</html>