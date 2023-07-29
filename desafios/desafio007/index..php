<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Minimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>informe seu salário</h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
    <label for="salario">Salário em R$</label>
    <input type="number" name="slr" id="">
    <p> Considerando o salário minímo de <strong>R$ 1.320,00</strong> </p>
    <input type="submit" value="Consultar">
</form>
</main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $salario = $_GET['slr'];
        $slrmin = 1320;

        echo "Quem recebe um Salário de $salario ganha"
        ?>
    </section>

    
    
</body>
</html>