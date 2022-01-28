<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2 <br/>";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; 
    echo "O resultado sera $r";

    // VERIFICA SE É IGUAL SEM CONSIDERAR O TIPO (dois iguais ==)

    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "SIM":"NÃO";
    echo "<br>AS VARIAVEIS A e B são iguais ? $r";

    // VERIFICA SE É IGUA CONSIDERANDO O TIPO (três iguais ===)

    $a = 3;
    $b = "3";
    $r = ($a === $b) ? "SIM":"NÃO";
    echo "<br>AS VARIAVEIS A e B são iguais ? $r";

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = (($nota1+$nota2)/2);
    echo "<br/>A media entre $nota1 e $nota2 e $m ";
    echo "<br/>A situação do aluno é " .$sit = (($m<6)?"REPROVADO":"APROVADO");

    // PROGRAMA PRA VERIFICAR A OBRIGATORIEDADE DE UM ELEITOR

    $ano = $_GET["an"];
    $idade = (2022 - $ano);
    echo "<br>Quem nasceu em $ano tem $idade anos";
    $tipo = ($idade>= 16 && $idade <= 65) ? "obrigatório":"não obrigatório";
    echo "<br>$tipo";
    ?>
</body>
</html>