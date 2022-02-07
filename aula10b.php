<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $RS = isset($_GET["RS"])?$_GET["RS"]:0;
    $SP = isset($_GET["SP"])?$_GET["SP"]:0;

    $est = ($_GET["est"])?$_GET["est"]:0;

    switch ($est) {
        case $RS:
        echo "Região Sul";
        break;
        case $SP:
        echo "Região Sudeste";
        }
    ?>
</body>
</html>