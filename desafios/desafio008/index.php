<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Informe um número</h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
    <label for="nrm">Numero</label>
    <input type="number" name="numero" id="">
    <input type="submit" value="Analizar Raizes">
</form>
</main>


    <section>
    <h2>Resultado Final</h2>
    <?php 
     $numero = $_GET ['numero'] ?? 0;
     $raiz = sqrt($numero);
     $r = number_format($raiz, 3, ',', '.');
     $cubica = $numero ** (1/3);
     $c = number_format($cubica, 3, ',', '.');
    echo "Analisando o <strong>numero $numero</strong>, temos:<br>";
    echo "A raiz quadrada é <strong>$r</strong> <br>";
    echo "A raiz cubica é <strong>$c</strong>";
    ?>

    </section>
</body>
</html>