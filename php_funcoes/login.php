<?php

// incluir conexão

include ("conexao.php");

// verificar conexão

if ( mysqli_connect_errno($con) ) {
    print "erro na conexão!!";
}

// fazer o login
    
$nome_login=$_POST['nome_login'];
$senha_login=$_POST['senha_login'];  
  
$user_query="SELECT * FROM usuarios WHERE user_nome='$nome_login' AND user_senha='$senha_login'";  
  
$ex_query=mysqli_query($con,$user_query);  
  
if(mysqli_num_rows($ex_query)>0) {
    
    print "
    <script>
        alert('Usuario logado')
        window.open('../paginas/home.html','_self')
    </script>";
    
} else {
    print "
        <script>
            alert('Erro ao logar!')
            window.open('../index.php','_self')
        </script>    
            ";
    }
