<?php   
    // variável do tipo String
    $nome = 'Meu nome é Raí';
    echo "A variável $nome é inteira? " . (is_long($nome) ? 'Sim' : 'Não') . "<br>";

    // variável do tipo inteiro
    $ano = 2023;
    echo "A variável $ano é inteira? " . (is_long($ano) ? 'Sim' : 'Não') . "<br>";

    // variavel do tipo float 
    $pi = 3.14159265;
    echo "A variável $pi é inteira? " . (is_long($pi) ? 'Sim' : 'Não') . "<br>";

    // variavel do tipo booleano
    $sim = true;
    echo "A variável $sim é inteira? " . (is_long($sim) ? 'Sim' : 'Não') . "<br>";
?>
