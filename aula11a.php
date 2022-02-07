<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="get" action="aula11b.php">

        <?php
        $c = 1;
        while ($c <= 5) {
        echo "Valor $c: <input type='number' name='v$c' <br/><br/>";
        $c++;
        }
       ?>
       <input type="submit" value="enviar">
    </form>
</body>
</html>