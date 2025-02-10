<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Criação de array indexado
    $array = [10, 20, 30, 40];

    //Exibindo o array
    echo "Array original: ";
    print_r($array); //print_r() exibe o array de for

    echo "<br>";
    
    //adicionando um valor ao final array
    $array[] = 50;

    //Exibindo o array atualizado 
    echo "Array após adicionar 50: ";
    print_r($array);

    echo "<br>";

    //Alterando o valor da posição 1 para 25
    $array[1] = 25;

    echo "Array após alterar o valor na posição 1 para 25: ";
    print_r($array);

    echo "<br>";

    //Removendo o valor no índice 2
    unset($array[2]);
    echo "Array após remover o valorno índice 2";
    print_r($array);

    echo "<br>";

    //Reorganizando os indices do array
    $array = array_values($array);

    //Exibindo o array após remover o indice e reorganizar
    echo "Array após remover o valorno índice 2";
    print_r($array);
    
    echo "<br>";
    $array[] = 19;

    //Ordenando o array
    sort($array); 
    
    //Exibindo o array ordenado
    echo "Array após ordenar os valores: ";
    print_r($array);

    ?>
    
</body>
</html>