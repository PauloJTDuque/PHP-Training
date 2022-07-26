<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - GET e POST</title>
</head>
<body>

<?php
    // Mátodo GET
    // if(isset($_GET['acao]'])){
    //     $nome = $_GET['nome'];  // Apresenta mensagem de erro pq nome e email ainda não foram definidos e não estão na URL
    //     $email = $_GET['email'];
    //     echo '<br>';
    //     $nome = @$_GET['nome'];  // @ inibe a mensagem de erro pq nome e email continuam sem definição e tb não estão na URL
    //     $email = @$_GET['email'];
    //     echo $nome;
    //     echo '<br>';
    //     echo $email;
    // }
    
    //Metdo POST
    // if(isset($_POST['acao]'])){
    //     $nome = $_POST['nome'];  // Apresenta mensagem de erro pq nome e email ainda não foram definidos e não estão na URL
    //     $email = $_POST['email'];
    //     // echo '<br>';
    //     // $nome = @$_POST['nome'];  // @ inibe a mensagem de erro pq nome e email continuam sem definição e tb não estão na URL
    //     // $email = @$_POST['email'];
    //     // echo $nome;
    //     echo '<br>';
    //     echo $email;
    // }

    // if(isset($_POST['acao'])){     
    //     echo $_POST['nome'];
    // }

    if(isset($_POST['acao'])){     
        foreach($_POST['valor'] as $key => $value) {
            echo $key;
            echo '=>';
            echo $value;

            echo'<hr>';
        }        
    }
    ?>

    <!-- <form method="post">
        <input type="text" name="Nome" />
        <input type="text" name="Email" />
        <input type="submit" name="acao" value="Enviar" />
    </form> -->
    
    <form method="post">
        <select name="nome">
            <option value="Paulo">Paulo</option>
            <option value="Duque">Duque</option>
        </select>
        <input type="checkbox" name="valor[]" value="10" />10
        <input type="checkbox" name="valor[]" value="20" />20
        <input type="checkbox" name="valor[]" value="30" />30
        <input type="checkbox" name="valor[]" value="40" />40

        <input type="submit" name="acao" value="Enviar" />
        <!-- <input type="text" name="numero1" />
        <input type="text" name="numero2" /> -->



    </form>






</body>
</html>


