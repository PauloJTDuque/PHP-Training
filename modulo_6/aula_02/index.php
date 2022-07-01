<?php

    // Arrays single

    $meuArray = array('Paulo', 'Jose', 'Terra', 'Duque');

    $meuArray = array('Duque1','chave1' => 'Paulo');


    $meuArray [0] = 'Duque';
    $meuArray []= 'Jose';
   

    // Arrays Multidimensionais

    $meuArray = array(array('Paulo', 'Jose', 'Terra', 'Duque'), array(61,62,63,64));

    echo $meuArray[1][0];
        
    $meuArray2[0] = array('chave1'=>'Paulo', 'Jose');
        
    echo $meuArray2[0]['chave1'];
    
    $meuArray3[0]['chave1'] ='Duque';
        
    echo $meuArray3[0]['chave1'];




?>