<?php   
    // Objeto de exemplo
    class Exemplo {
        public $propriedade;
    }

    $meuObjeto = new Exemplo();

    echo "A variável \$meuObjeto é um objeto? " . (is_object($meuObjeto) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo string
    $nome = 'Meu nome 123';
    echo "A variável \$nome é um objeto? " . (is_object($nome) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo inteiro
    $ano = 2023;
    echo "A variável \$ano é um objeto? " . (is_object($ano) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo float 
    $pi = 3.14159265;
    echo "A variável \$pi é um objeto? " . (is_object($pi) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo booleano
    $sim = true;
    echo "A variável \$sim é um objeto? " . (is_object($sim) ? 'Sim' : 'Não') . "<br>";
?>
