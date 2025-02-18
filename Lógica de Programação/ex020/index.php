<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <?php 
    //Superclasse
    class Animal {
        public function fazerSom() {
            return "O animal faz um som.";
        }
    }

    //Subclasse 1
    class Cachorro extends Animal {
        public function fazerSom() {
            return "Au au au";
        }
    }

    //Subclasse 2
    class Gato extends Animal {
        public function fazerSom() {
            return "Miau miau miau";
        }
    }

    //Função que utiliza polimorfismo
    function emitirSomAnimal(Animal $animal) {
        echo $animal->fazerSom();"<br>";
    }

    //Criando objetos - Instancias
    $cachorro1 = new Cachorro(null);
    $gato1 = new Gato(null);


    //Chamando a função com diferentes objetos, mas com a mesma assinatura
    emitirSomAnimal($cachorro1);
    echo "<br>";
    emitirSomAnimal($gato1);

    ?>
</body>
</html>