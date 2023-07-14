<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>
        <?php
        $numero = $_GET ["numero"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        $raiz = sqrt($numero);
        $raiz2 = round($raiz);
        $quadrado = $numero * $numero;
        $binario = base_convert($numero, 10, 2);
        $hexodecimal = base_convert($numero, 10, 16);
        $v100 = $numero * 100;
        $d100 = $numero / 100;
        echo "<i>O seu antecessor é <strong>$antecessor</strong> </i>    <br>";
        echo "O número escolhido foi <strong>$numero</strong>            <br>";
        echo "<i>O teu sucessor é <strong>$sucessor</strong></i>         <br>";
        echo "E a raiz quadrada é <strong>$raiz2</strong>                <br>";
        echo "Ele ao quadrado é <strong>$quadrado</strong>              <br>";
        echo "Ele em binario <strong>$binario</strong>              <br>";
        echo "Ele em hexodecimal <strong>$hexodecimal</strong>              <br>";
        echo "Ele dividido por 100 <strong>$d100</strong>              <br>";
        echo "Ele multiplicado por 100 <strong>$v100</strong>              <br>";



        ?>
    </section>
    
</body>
</html>