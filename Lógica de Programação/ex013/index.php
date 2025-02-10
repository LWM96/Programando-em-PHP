<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For </title>
</head>
<body>
    <?php 
    //For
    echo "For<br>";
    for($i = 0; $i < 5; $i++){
        echo $i . "<br>";     //Imprime o valor de $i e pula uma linha
    }

    for($a = 1; $a <= 5; $a++){
        echo "O quadrado de $a é " . ($a * $a) . "<br>";   //Imprime o valor de $i e pula uma linha
    }
    echo "<br>Foreach<br>";
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
    foreach($frutas as $fruta){
        echo $fruta . "<br>";   //Imprime o valor de $fruta e pula uma linha
    }
    echo "<br>";
    $idades = [
        "João" => 25, 
        "Maria" => 30, 
        "Pedro" => 20
        ];

    foreach($idades as $nome => $idade){
        echo "$nome tem $idade anos.<br>";   //Imprime o valor de $nome e $idade e pula uma linha
    }
    ?>
</body>
</html>