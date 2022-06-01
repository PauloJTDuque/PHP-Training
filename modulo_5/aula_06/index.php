<?php

    //Arrays = Variáveis com diversas chaves
    $nome = array(' Paulo Duque', 'Marcia', 'Caio');
    
    //Também podemos declarar assim:
    $nome1[] = 'Paulo Duque';
    $nome1[] = 'Marcia';
    echo $nome1[1];
    
    $nome1[2] = 'Caio';
    echo $nome1[2];
    
    //Versões mais novas tb podemos declarar assim:
    $nome2 = ['Paulo Duque', 'Marcia', 'Caio'];
    echo $nome2[0];
    echo'<br />';
    
    $informacao['nome'] = 'Paulo Duque';
    $informacao['idade'] = 23;
    $informacao['cidade'] = 'Rio de Janeiro';
    
    echo $informacao['nome'];
    echo'<br />';
    echo $informacao['idade'];
    echo'<br />';
    echo $informacao['cidade'];
    

?>    