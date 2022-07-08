<?php

    function mostrarnome($nome,$idade){
        echo '<h2>Nome eh: </h2>' .$nome;
        echo'<hr>';
        echo '<h2>Idade eh: </h2>' .$idade;
        echo'<hr>';
        
    }
    mostrarnome("Paulo Terra",61);

    function calculadora($num1=10,$num2=20){
        echo ($num1 + $num2);
        
    }
    calculadora(20,30); // Se  num1 ou num2 não for passado, ele utilizará 10 para num1 e 20 para num2

    function verdade(){
        return true
    }

    function retornarString(){
        echo 'Paulo José Terra Duque';
    }

    echo retornarString(); 

?>