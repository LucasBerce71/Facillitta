function validarLogin(){
    var msg = document.getElementById("erroLogin");
    var login = document.getElementById("nomeUsuario").value;
    var loginEstilo = document.getElementById("nomeUsuario");


    if(login === "" || login === null){
        msg.innerText = "Código de acesso incorreto, talvez você não seja administrador do sistema";
        loginEstilo.style.backgroundColor = "#f08080";
        loginEstilo.style.borderColor = "#ff0000";
    }else if(login.length < 5){
        msg.innerText = "O campo login deve ter no minímo 5 caracteres para ser válido!";
        loginEstilo.style.backgroundColor = "#f08080";
        loginEstilo.style.borderColor = "#ff0000";
    }else{
        window.location = "https://andersonberce.com/facillittaLucas";
    }
    window.location = "https://andersonberce.com/facillittaLucas";
}