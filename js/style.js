// ....................... script loadding ................ //

var background = document.querySelector(".loading");
var img = document.querySelector("img");

function loading() {
        background.style.opacity = "0";
        background.style.visibility = "hidden";
        background.style.transition = "all .4s ease-out";
        background.style.zIndex = "-5000";
}

// ........................................... script da pagina inicial [cadastrar-login] ......................................//

var btn_cadastrar = document.querySelector(".btn-login-3");
var btn_entrar = document.querySelector(".btn-login-2");
var troca_p = document.querySelector(".troca-p");
var troca_h1 = document.querySelector(".troca-h1");
var form_login = document.querySelector("#form_login");

btn_entrar.onclick = function() {
    btn_entrar.style.transform = "scale(0)";
    btn_cadastrar.style.transform = "scale(1)";
    troca_p.innerHTML = "Faça o seu cadastro e torne-se um novo usuário.";
    troca_h1.innerHTML = "BEM VINDO!";
    form_login.style.left = "125px";
}

btn_cadastrar.onclick = function() {
    btn_entrar.style.transform = "scale(1)";
    btn_cadastrar.style.transform = "scale(0)";
    troca_p.innerHTML = "Clique no botão para entrar se já possui uma conta.";
    troca_h1.innerHTML = "BEM VINDO DE VOLTA!";
    form_login.style.left = "625px";
}



// ............................................ script da pagina inial [home.html] .............................................//

