<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h2>Operadores de Atribuição</h2>
    <?php 
    //String
    $rua = "Rua Amador Bueno ";
    //Atribuição com cocatenação
    $rua .= "na Cidade de São Paulo";

    //float
    $preco = 2.45;
    //Atribuição de soma
    $preco += 2.50;
    //Atribuição de subtração
    $preco -= 1.20;

    //Formata o número para usar vírgula
    $preco_formatado = number_format($preco, 2, ',', '.') ;

    //Exibe o resultado
    echo "$rua, <br> Preço R$ $preco_formatado";

    ?>
</body>
</html>