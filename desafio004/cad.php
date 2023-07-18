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
        <h1>Conversor de Moedas V2.0</h1>

       <form action="index.php">
           <?php

            $valor = $_GET ["Valor"];
            $inicio = date("m-d-Y", strtotime("-1 days"));
            $fim = date("m-d-Y");
    
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            //var_dump($dados);
    
            $cotação = $dados["value"][0]["cotacaoCompra"];
            $dolar = round($valor / $cotação);
            echo "Seus <strong>R$$valor</strong> equivalem a US$ <strong>$dolar</strong> <br>";
            echo "<strong>*Cotação atual do Banco Central do Brasil*</strong>";
           
           ?>
           <button type="submit" name="index.php">Voltar</button>
       </form>
    </section>
    
</body>
</html>