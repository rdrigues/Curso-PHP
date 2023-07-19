<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interação com formularios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Apresente-se Para Nós.</h1>
    </header>
    
    <section>
        <form action="cad.php" method="get">
            <label for="nome"> Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="snome">Sobrenome</label>
            <input type="text" name="snome" id="idsnome">
            <input type="submit" value="Enviar">
        </form>
    </section>
        
    </body>
</html>