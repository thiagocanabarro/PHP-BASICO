<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $p = "Leite";
    $pr = "4.5";
   // echo "o $p custa R$" .number_format($pr,2);
   printf("O %s custa R$ %.2f", $p, $pr);
    ?>
</body>
</html>