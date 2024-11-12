<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos de primitivos</h1>
   <?php 
        // 0x = hecadecimal; 0b = binário; 0 = octal
        //$num = 300;
        //echo "O valor da variável é $num";

        //$v = 300;
        //var_dump($v);   //Informa na tela todas as informações sobre essa variavel (Imprime o tipo de variavel)

        //$Num = 3e2; // 3 x 10^2
        //echo "O valor é: $Num";
        //var_dump($Num);

        // Forçando para que seja int
        //$Num = (integer) 3e2; //coerção
        //var_dump($Num);

        //$NUm = (float) "950";
        //var_dump($NUm);

        //$casado = true; // valor true = 1; valor false = 0
        //var_dump($casado);
        //echo ("Estado civil $casado");

        //$vet = [6, 2.5, "Gabriel", 3, false]; //vetor
        //var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
   ?> 
</body>
</html>