<?php

    session_start();
    setcookie('nome','Paulo Duque',time()+(60*60*24), '/');  //Expira em 24 horas 60 seg * 60 = 1 hora * 24 = 24 horas - 
                                                                                    // Comando indica que estara disponivel para todas as páginas e não somente
                                                                                    // na página atual

                                                                                    // Para exluir o coockie declarar um tempo negativo -(60*60*24)
    echo $_COOKIE['nome'];

?>