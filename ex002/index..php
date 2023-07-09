<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>
<body>
    <h1>Exemplo de Php</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é Dia " .  date('d/m/y');
        echo " E a hora é  " .  date('G:i:s');
    ?>
</body>
</html>