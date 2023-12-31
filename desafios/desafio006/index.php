<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
       $dividendo = $_GET['dendo'] ?? 0; 
       $divisor = $_GET['sor'] ?? 1; 
    ?>
    <main>
        <h1>Anatomia de uma divisão </h1>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dendo" id="dendo">
        <label for="divisor">Divisor</label>
        <input type="number" name="sor" id="sor">
        <input type="submit" value="Analisar">
        </form>
</main>

    <section>
        <h2> Estrutura da Divisão </h2>
        <?php 
            $resultado = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>
         
         <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
         </table>
    </section>

    
</body>
</html>