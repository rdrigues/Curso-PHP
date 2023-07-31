<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <h1>Medias Aritmetricas</h1>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="">1º Valor</label>
        <input type="number" name="v1" id="">
        <label for="">1º Peso</label>
        <input type="number" name="p1" id="" min = 1>
        <label for="">2º Valor</label>
        <input type="number" name="v2" id="">
        <label for="">2º Peso</label>
        <input type="number" name="p2" id=""  min = 1>
        <input type="submit" value="Calcular Medias">
    </form>
    </main>
    <section>
    <h2>Resultado do Calculo</h2>
    <?php 
    $v1 = $_GET['v1']?? 0;
    $v2 = $_GET['v2']?? 0;
    $p1 = $_GET['p1']?? 0;
    $p2 = $_GET['p2']?? 0;

    $ms = ($v1 + $v2) / 2;
    $ms2 = number_format($ms, 2, ',', '.');

    $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
    $mp2 = number_format($mp, 2, ',', '.');

    echo "Analisando os números $v1 e $v2:";
    echo "<ol>
           A <strong>Média Aritmetrica Simples</strong> entre os valores é igual a $ms2
        </ol>";
        echo "<ol>
        A <strong>Média Aritmetrica Ponderada</strong> entre os valores é igual a $mp2
     </ol>";
    ?>

    </section>
    
</body>
</html>