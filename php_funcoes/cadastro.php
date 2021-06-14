<?php

// inclir conexão

include ("conexao.php");

// verificar conexão

if(mysqli_connect_errno($con)) {
    print "
        
        <script>
            alert('erro ao conectar!');
        </script>
        
    ";
}
    
// cadastrar usuario

    $nome_cadastro = $_POST['nome_cadastro'];
    $email_cadastro = $_POST['email_cadastro'];
    $senha_cadastro = $_POST['senha_cadastro'];

    $qsl = "INSERT INTO usuarios (user_nome,user_email,user_senha) VALUES ('$nome_cadastro','$email_cadastro','$senha_cadastro')";

    if ($qsl = true) {
        # cadastrados !!!
        print "
            <script>
                alert('Usuario Cadastrado com sucesso!')
                window.open('../index.php','_self')
            </script>
        ";
    } else {
        # erro ao cadastrar!!!
        print "
            <script>
                alert('Usuario não Cadastrado!')
                window.open('../index.php','_self')
            </script>
        ";
    }
    

    mysqli_query($con,$qsl);