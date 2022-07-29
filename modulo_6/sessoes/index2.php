<?php

    session_start();
    unset($_SESSION['nome']); //Destroi a variavel de sessao 'nome'
    session_destroy(); //Destroi todas as variaveis de sessao

    // Para verificar se uma sessão existe
    if (isset($_SESSION['nome'])){
        echo $_SESSION['nome'];

    }    
?>