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


        // for ($cont = 0; $cont < 10; $cont++) {
        //     echo 'Eu creio no meu libertador.';
        //     echo '<hr>';
        // }


        // $i = 0;
        // while($i < 10){
        //     echo 'Ele se levantará em meu favor';
        //     echo '<hr>';
        //     $i ++;
        // }
        
        // # outra forma de comentar
        
        // $i = 10;
        // do{
        //     echo 'Ainda hoje';
        //     echo '<hr>';
        //     $i ++;
        // }while($i < 20);

?>