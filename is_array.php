<?php   
    // Array de exemplo
    $meuArray = array(1, 2, 3, 4, 5);

    echo "A variável \$meuArray é um array? " . (is_array($meuArray) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo string
    $nome = 'Meu nome é Raí';
    echo "A variável \$nome é um array? " . (is_array($nome) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo inteiro
    $ano = 2023;
    echo "A variável \$ano é um array? " . (is_array($ano) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo float 
    $pi = 3.14159265;
    echo "A variável \$pi é um array? " . (is_array($pi) ? 'Sim' : 'Não') . "<br>";

    // Variável do tipo booleano
    $sim = true;
    echo "A variável \$sim é um array? " . (is_array($sim) ? 'Sim' : 'Não') . "<br>";
?>
