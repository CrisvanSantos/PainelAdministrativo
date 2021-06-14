<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASBOARD | CSDesigner 2020</title>
    <link rel="stylesheet" href="css/cadastro_end_login.css">
    <link rel="stylesheet" href="lib-CSdesigner/bootstrap 4/css/bootstrap.css">
    <link rel="stylesheet" href="lib-CSdesigner/mdb/css/mdb.css">
    <link rel="stylesheet" href="lib-CSdesigner/font-awesome 4/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib-CSdesigner/jquery-map/css/jqvmap.css">
</head>
<body onload="loading()">
    <div class="loading">
        <img src="img/good-1.gif" alt="loading-img">
    </div>
    
    <div class="main">
        <div class="box">
            <form action="php_funcoes/cadastro.php" method="post" id="form_cadastro" name="form_cadastro">
                <div class="left-part text-white">
                    <h5 class="mb-5 troca-h1">BEM VINDO DE VOLTA!</h5>
                    <p class="text-center px-2 troca-p">Clique no botão para entrar se já possui uma conta.</p>
                    <button type="button" class="btn-login-2">ENTRAR</button>
                    <button type="button" class="btn-login-3">CADASTRAR</button>
                </div>

                <!-- cadastro -->

                <div class="right-part">
                    <h2>SIGN UP</h2>
                    <br>
                    <div class="login-box">
                        <input type="text" name="nome_cadastro" id="nome_cadastro" class="input" required>
                        <label for="nome_cadastro">Nome</label>
                    </div>

                    <div class="login-box mt-3">
                        <input type="email" name="email_cadastro" id="email_cadastro" class="input" required>
                        <label for="email_cadastro">Email</label>
                    </div>

                    <div class="login-box mt-3">
                        <input type="password" name="senha_cadastro" id="senha_cadastro" class="input" required>
                        <label for="senha_cadastro">Senha</label>
                    </div>

                    <button type="submit" class="btn-login" name="btn_cadastro">CADASTRAR</button>
                </div>
            </form>
            <!-- login  -->
            <form action="php_funcoes/login.php" method="post" id="form_login" name="form_login">
                <h2>SIGN IN</h2>
                <br>
                <div class="login-box">
                    <input type="text" name="nome_login" id="nome_login" class="input" required>
                    <label for="nome_login">Nome</label>
                </div>

                <div class="login-box mt-3">
                    <input type="password" name="senha_login" id="senha_login" class="input" required>
                    <label for="senha_login">Senha</label>
                </div>

                <button type="submit" class="btn-login" name="btn_login">ENTRAR</button>
            </form>
        </div>
    </div>


    <script src="lib-CSdesigner/jquery/jquery.min.js"></script>
    <script src="lib-CSdesigner/bootstrap 4/js/bootstrap.js"></script>
    <script src="lib-CSdesigner/mdb/js/mdb.min.js"></script>
    <script src="js/style.js"></script>
    <script src="lib-CSdesigner/charts/Chart.js"></script>
    <script src="lib-CSdesigner/charts/chart-area/chart-area-demo.js"></script>
    <script src="lib-CSdesigner/charts/chart-bar/chart-bar-demo.js"></script>
    <script src="lib-CSdesigner/jquery-map/js/jquery.vmap.js"></script>
    <script src="lib-CSdesigner/jquery-map/js/jquery.vmap.sampledata.js"></script>
    <script src="lib-CSdesigner/jquery-map/js/jquery.vmap.world.js"></script>
    <script src="lib-CSdesigner/jquery-map/js/mapa do mundo.js"></script>
</body>
</html>