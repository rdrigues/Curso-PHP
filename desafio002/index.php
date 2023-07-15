<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>,
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com Números aleatorios</h1>
        <form action="" method="$_GET">
            <?php
            $aleatorio = random_int(0, 100);
            echo "gerando um numero aleatoro entre 0 e 100 ... <br>";
            echo "O valor gerado foi $aleatorio";
            ?>
            <button type="submit" name="aleatorio">Gerar</button>
        </form>
    </section>
    
</body>
</html>