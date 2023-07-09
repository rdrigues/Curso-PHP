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
        <h1>Resultado do Processamento</h1>
    </header>

    <main>
    <?php 
        $n = $_GET ["nome"] ?? "Anonimo";
        $s = $_GET ["snome"] ?? "Anonimo";
    
        echo "Ola, seja bem vindo ao meu site <strong>$n $s<strong>";
    ?>
    <a href="index.php"><input type="submit" value="Voltar"></a>
    </main>
</body>
</html>