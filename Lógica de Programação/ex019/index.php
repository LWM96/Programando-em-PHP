<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança e polimorfismo</title>
</head>
<body>
    <?php 
    //Classe base (superclasse)
    class Animal {
        //Propriedades
        public $nome;

        //Método construtor
            public function __construct($nome) {
            $this->nome = $nome;
        }

        //Método para exibir os dados do animal
        public function falar() {
           return "O animal faz um som.";
        }
    }

    //Subclass que herda de Animal
    class Cachorro extends Animal {
        
        //Sobrescrevendo o método falar
        public function falar () {
            return "O cachorro late!";
        }
    }

    //Criando um objeto de classe Cachorro
    $cachorro = new Cachorro("Rex");
    echo $mostrar = $cachorro->nome;

    echo "<br>";

    //Chamando o método sobreescrito da subclasse
    echo $cachorro->falar();

    echo "<br>";
    //Mostrando o método falar da superclasse
    $animal = new Animal("Dudu");
    echo $mostrar = $animal->nome . "<br>";
    echo $animal->falar();

    ?>
</body>
</html>