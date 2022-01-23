<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    ?>
</body>
</html>