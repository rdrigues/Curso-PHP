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
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
    
    </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        $segundos = $_GET["segundos"] ?? '1';
        

       $minutos =  intdiv ($segundos, 60) ;
       $segundos2 = $minutos % $segundos;
         
        echo "Analizando o valor que você digitou, $segundos segundos, equivalem a um total de:";
        echo "<ul>
        
        <li> tantas horas </li>
        <li> Minutos $minutos </li>
        <li> Segundos $segundos2 </li>
        </ul>";
        
        ?>
    </section>
</body>
</html>