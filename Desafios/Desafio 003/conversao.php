<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php 
            //Cotação copiada do google
            $cotacao = 5.75;
            
            //Quanto de dinheiro voçê tem??
            $real = $_REQUEST["num"] ?? 0;

            //Equivalência em dolar
            $dolar = $real/$cotacao;

            //Mostrar o resultado de forma simples
            
            //echo "Seus R\$" . number_format($real, 2, ",",".") . " equivale a US\$" . number_format($dolar, 2, ",",".");  // \$ é o escape para imprimir o $  /// number_format($real, 2) o número será formatado com duas casas decimais /// "," = separador deciaml  "." = separador de milhar

            //Mostrar o resultado de moedas com internacionalização
            //Biblioteca intl (internallization)

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); // NumberFormatter::CURRENCY  =  padrao de número apresentado para quem está no Brasil
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>