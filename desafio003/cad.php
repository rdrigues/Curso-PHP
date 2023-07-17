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
            $dolar = round($valor / 4.80, 2);
            echo "Seus <strong>R$$valor</strong> equivalem a US$ <strong>$dolar</strong> <br>";
            echo "<strong>*Cotação fixa de 4.80*</strong>";

           ?>
           <button type="submit" name="index.php">Voltar</button>
       </form>
    </section>
    
</body>
</html>