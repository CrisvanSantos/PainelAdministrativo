<?php

// incluir conexão

include("conexao.php");

// verificar conexão 

if(mysqli_connect_errno($con)) {
    print "
    
        <script>
            window.alert('erro na conexão !!!!');
        </script>
    
    ";
} else {
    
   /* print " 
    
    <script>
        window.alert('arquivo preparado !!!!');
        window.open('../paginas/home.html','_self');
    </script>
    
    "; */

    $out_nome = $_POST['nome_out'];
    $out_senha = $_POST['senha_out'];

    if ($out_nome == "" && $out_senha == "") {
        
        print " 

            <script>
                window.alert('prencha os campos vasios!!!');
                window.open('../paginas/home.html','_self');
            </script>
        
        ";  

    } else {
        $out_query = "SELECT * FROM usuarios WHERE user_nome = '$out_nome' AND user_senha = '$out_senha' ";

        $out_rum_query = mysqli_query($con,$out_query);

        if (mysqli_num_rows($out_rum_query) > 0 ) {  
            
            print " 
        
                <script>
                    window.alert('sessão terminada!');
                    window.open('../index.php','_self');
                </script>
        
            ";
        
        }
    }
    
}