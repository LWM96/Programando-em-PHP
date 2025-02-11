<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function saudacao() {
        echo "Olá, Seja Bem-Vindo ao PHP! ";
    }
    saudacao (); //Chamando a função saudacao

    echo "<br>";

    function somar ($a, $b) {
        return $a + $b;
    }

    $resultado = somar(5, 3); //Chamando a função somar e passando os argumentos 5 e 3
    echo "Resultado da soma: " . $resultado;    //Saída: Resultado da soma: 8

    echo "<br>";

    $resultado1 = somar(8, -2); //Chamando a função somar e passando os argumentos 8 e -2
    echo "Resultado da soma: " . $resultado1;    //Saída: Resultado da soma: 6
    echo "<br>";
    function saudacaoPersonalizada($nome = "Visitante") {
        echo "Olá, $nome! Seja Bem-Vindo ao PHP! ";
    }

    saudacaoPersonalizada("Carlos"); //Chamando a função saudacaoPersonalizada e passando o argumento "Maria"
    ?>
</body>
</html>