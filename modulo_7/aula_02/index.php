<?php
    include ('Exemplo.class.php');

    // Instanciando
    $exemplo = new Exemplo();
    
    //$exemplo->$var1 = "Olá";  // Não roda pq $var1 é privado
    
    $exemplo->var2 = "Paulo Duque";
    
    echo $exemplo->var2;
    
    
    $exemplo2 = new Exemplo;
    
    $exemplo2 -> var2 = "José Terra";
    
    echo'<br />';
    echo $exemplo2 -> var2;
    
    
    echo'<br />';
    echo Exemplo::$var3;
    Exemplo::metodoEstatico();
    
    Exemplo::$var3 = 'Mudou o valor do que era statico';
    echo'<br />';
    echo Exemplo::$var3;
    
    
    echo'<br />';
    Exemplo::metodoEstatico();
    
    echo'<br />';
    $exemplo = new Exemplo();
    $exemplo->setVar4('Marcia Joia');
    echo $exemplo->pegaVar4();
    
    echo'<br />';
    $exemplo = new Exemplo();
    $exemplo->setVar4('Duque');
    echo $exemplo->pegaVar4();
    
    
?>