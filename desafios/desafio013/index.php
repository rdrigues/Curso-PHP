<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .nota {
            height: 80px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="">Quanto você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="valor" step="5" value="<? $valor ?>" min="5">
            <p>*Notas disponiveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        
        </form>
    </main>
    <section>
        <?php
            $valor = $_GET['valor'] ?? '0';
            $sobra = $valor;
            $nota100 = intdiv($sobra , 100);
            $sobra = $sobra % 100;

            $nota50 = intdiv($sobra , 50);
            $sobra = $sobra % 50;
            
            $nota10 = intdiv($sobra , 10);
            $sobra = $sobra % 10;

            $nota5 = intdiv($sobra , 5);
            $sobra = $sobra % 5;
            ?>
            <h2>Saque de R$<?= number_format( $valor, 2, ',', '.')?> realizado</h2>
            
             <p>"O caixa eletronico vai te entregar as seguintes notas:"</p>
            
                <ul>
                    <li><img class="nota" src="imagens\100-reais.jpg" alt="Nota de 100 reais"> x<?=$nota100?></li>
                    <li><img class="nota"  src="imagens\50-reais.jpg" alt="Nota de 50 reais"> x<?=$nota50?></li>
                    <li><img class="nota"  src="imagens\10-reais.jpg" alt="Nota de 10 reais"> x<?=$nota10?></li>
                    <li><img class="nota"  src="imagens\5-reais.jpg" alt="Nota de 5 reais"> x<?=$nota5?></li>
           
    </section>
</body>
</html>