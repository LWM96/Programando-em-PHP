<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <h2>
    <?php 
    class Carro {
        //Propriedades / Atributos
        public $marca;
        public $modelo;
        public $ano;
    
        //Métodos (Função dentro de uma classe)
        public function exibirDetalhes() {
            echo "Marca: $this->marca <br>";  //O $this é uma referência ao objeto que está chamando o método
            echo "Modelo: $this->modelo <br>"; 
            echo "Ano: $this->ano <br>";
        }
    }
    //Instanciando um objeto da classe Carro
    $meuCarro = new Carro(); //Instanciando um objeto da classe Carro
    $meuCarro->marca = "Fiat";
    $meuCarro->modelo = "Uno";
    $meuCarro->ano = 2019;
    
    $meuCarro->exibirDetalhes(); //Chamando o método exibirDetalhes

    echo "<br>";

    //Nova classe
    class Pessoa {
        public $nome;
        public $idade;

        //Método
        public function saudacao() {
            echo "Olá, meu nome é $this->nome e tenho $this->idade anos!";
        }
    }
    $joão = new Pessoa();
    $joão->nome = "João";
    $joão->idade = 30;

    $joão->saudacao();  //Exibe a saudação com os dados do João
    
    echo "<br>";

    class Funcionario extends Pessoa {
        public $cargo;
        public $salario;

        public function exibirDados() {
            echo "Nome: $this->nome <br>";
            echo "Idade: $this->idade <br>";
            echo "Cargo: $this->cargo <br>";
            echo "Salário: $this->salario <br>";
        }
    }
    $funcionario = new Funcionario();
    $funcionario->nome = "Maria";
    $funcionario->idade = 25;
    $funcionario->cargo = "Programadora";
    $funcionario->salario = 3000;

    $funcionario->exibirDados(); //Exibe os dados do funcionário
    
    ?>
    </h2>
</body>
</html>