<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // Mudança para a nossa time zone GMT -03
            // O ponto é a concatenado
        echo "Hoje é dia " . date("d/M/Y"); //d (Caixa baixa) // M (Caixa alta // Y (Caixa alta)) // Se colocar o d em caixa aula retornará ó dia da semana.
        echo " e hora atual é " . date("G:i:s T");
    ?>
</body>
</html>