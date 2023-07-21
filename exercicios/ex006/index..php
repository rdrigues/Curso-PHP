<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Retroalimentaveis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       $valor1 = $_GET['v1'] ?? 0; 
       $valor2 = $_GET['v2'] ?? 0; 
    ?>
    <main>
        <h1>Somador De Valores</h1>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?php echo $valor1 ?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?php echo $valor2 ?>">
        <input type="submit" value="Somar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
    <?php 
         $soma = $valor1 + $valor2;
        echo "<p> A soma entre o $valor1 e o $valor2, é igual a <strong>$soma<strong</p>";
    ?>

    </section>
    
    
</body>
</html>