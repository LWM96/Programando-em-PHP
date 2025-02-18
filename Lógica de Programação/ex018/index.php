<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Funcionario {
        //Propriedades com diferentes modificadores de acesso
        public $nome;           //Pode ser acessado de qualquer lugar
        protected $salario;     //Pode ser acessado apenas dentro da superclasse e subclasse 
        private $cpf;           //Pode ser acessado apenas dentro da superclasse

        //Construtor para inicializar os valores
        public function __construct($nome, $salario, $cpf) {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cpf = $cpf;
        }
        //Método publico para exibir o nome do funcionário
        public function exibirNome() {
            echo "Nome: $this->nome <br>";
        }

        //Método protegido para exibir o salário do funcionário (somente para subclasses ou na própria classe)
        protected function exibirSalario() {
            echo "Salário: R$ $this->salario <br>";
        }

        //Método privado para exibir o CPF do funcionário (somente na própria classe)
        private function exibirCpf() {
            echo "CPF: $this->cpf <br>";
        }
        //Método publico para chamar o metodo privado e protegido na própria classe
        public function exibirDetalhes() {
            $this->exibirNome();
            $this->exibirSalario();
            $this->exibirCpf();
        }
    }

    //Instanciando um objeto da classe Funcionario
    $funcionario = new Funcionario("Carlos Silva", 7000, "123.456.789-00");

    //Acessando o nome diretamente (public)
    $funcionario->exibirNome();

    //Acessando o salário indiretamente (protected)
    //$funcionario->exibirSalario(); //Comentado para não gerar erro

    //Acessando o CPF indiretamente (private)
    //$funcionario->exibirCpf(); //Comentado para não gerar erro

    //Chamando o método público que exibe todos os dados
    $funcionario->exibirDetalhes();

    ?>
</body>
</html>