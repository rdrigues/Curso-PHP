<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
        $preco = $_GET['Preço'] ?? "0";
        $preco2 = number_format($preco, 2, ',', '.') ?? '0';

        $reaj = $_GET['reaj'] ?? '0';
        
        ?>
    <main>
        <h1>Reajuste de Preço</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="">Preço do Produto (R$)</label>
            <input type="number" name="Preço"  step="0.01" id="" min="1" value="0">

            <label for="">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj"
            min="0" max="100" step="1" oninput="mudaValor()" value="0">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
         <?php 
            $preaj = (($preco * $reaj) / 100) + $preco;
            $preaj2 = number_format($preaj, 2, ',', '.');

            echo "O produto que custava R$$preco2, com <strong>$reaj% de aumento</strong> vai passar a custar <strong>R$$preaj2</strong> a partir de agora.";
        
        ?>


    </section>
    <script>
        mudaValor()
        function
         mudaValor() {
            p.innerText = reaj.value

        }
    </script>
</body>
</html>