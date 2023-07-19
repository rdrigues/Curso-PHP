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
        <h1>Conversor de Moedas V1.0</h1>

       <form action="index.php">
           <?php
            $valor = $_GET ["Valor"];
            $inteira = intval($valor);
            $fracionaria = $valor - $inteira;
            echo "A parte inteira do seu número é <strong>$inteira</strong> <br>";
            echo "A parte fracionaria do seu número é <strong>$fracionaria</strong>";
           
           ?>
           <button type="submit" name="index.php">Voltar</button>
       </form>
    </section>
    
</body>
</html>