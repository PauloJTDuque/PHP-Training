<?php

    $nome = ' Paulo Duque';
    $idade = 61;   
    $bool = true;
    $double = 10.09;
     

    echo 'Meu nome é: '. $nome . 'Aprendendo PHP' ;
    echo '<br>';
    echo 'Minha idade é: '. $idade;
    echo '<br>';
    echo 'bool é igual a: '. $bool;
    echo '<br>';
    echo 'double é igual a: '. $double;
    echo '<br>';

    // Usando aspas duplas, não é necessário usar concatenação
    echo "Meu nome é:  $nome e estou Aprendendo PHP";
    echo '<br>';
    
    // Em algumas situações requer cuidado, qdo trabalhamos junto com HTML
    $nomedaclasse = 'box';
    echo "<div class=\"$nomedaclasse\"> Meu conteúdo da Div<div>";
    

?>    