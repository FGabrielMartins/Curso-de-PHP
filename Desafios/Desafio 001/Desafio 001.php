<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0; // se naõ fpr digitado nada o resultado sera 0
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu <em>antecessor</em> é $a <br>O <em>sucessor</em> é $s"; // <em></em> Itálico
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button> <!-- &#x2B05 icone -->
    </main>
</body>
</html>