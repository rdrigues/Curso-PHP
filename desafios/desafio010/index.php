<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
$nasceu = $_GET ['nasceu'] ?? 2000;
$idade = $_GET ['idade']?? 2023;
$anoAtual = date("Y");

?>
<body>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="">Em que ano você nasceu?</label>
            <input type="number" name="nasceu" id="" max=2022 value="<?=$nasceu?>">
            <label for="">Quer saber sua idade em que ano? (Estamos em <strong>2023</strong>)</label>
            <input type="number" name="idade" id="" value="<?=$idade?>">
            <input type="submit" value="Qual será minha idade?">
         </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 

            $atidade = $idade - $nasceu;
            echo "Quem nasceu em $nasceu vai ter <strong>$atidade anos</strong> em $idade";
        
        
        ?>


    </section>
</body>
</html>