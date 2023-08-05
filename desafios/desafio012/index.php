<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="segundos">Qual o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" required value="<?php $total?>">
            <input type="submit" value="Calcular">
    
    </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        $segundos = $_GET["segundos"] ?? '1';
        $sobra = $segundos;
        $semanas = (int)($sobra / 604800);
        $sobra = $sobra % 604800;

        $dia = (int)($sobra / 86400);
        $sobra = $sobra % 86400;

        $horas = (int)($sobra / 3600);
        $sobra = $sobra % 3600;

        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;

        $segundos2 = $sobra;

        echo "Analizando o valor que você digitou, $segundos segundos, equivalem a um total de:";
        echo "<ul>
        
        <li> $semanas Semanas </li>
        <li> $dia Dias </li>
        <li> $horas Horas </li>
        <li> $minutos Minutos </li>
        <li> $segundos2 Segundos </li>
        </ul>";
        
        ?>
    </section>
</body>
</html>