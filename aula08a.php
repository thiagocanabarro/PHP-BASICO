<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = $_GET["v"];
        $rq = (sqrt($valor));
        echo "<br>O valor enviado foi $valor";
        echo "<br>Raiz quadrada: $rq";
    ?>
</body>
</html>