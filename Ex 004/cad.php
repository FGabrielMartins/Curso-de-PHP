<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        <h1>Resultado do procedimento</h1>
    </head>
    <main>
        <?php 
            //var_dump($_REQUEST); // %_GET $_POST $_COOKIES = &_REQUEST
            $nome = $_GET["nome"] ?? "Sem nome"; // ?? Quando não informado o nome
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site"; // <strong></strong> Colocar em negrito
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>