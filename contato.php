<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $contato = addslashes($_POST['phone']);
    $email = addslashes($_POST['email']);
    $plano = addslashes($_POST['plan']);
    $agendamento = addslashes($_POST['dtAgenda']);
    $mensagem = addslashes($_POST['message']);

    $to = "lucasberce71@gmail.com";
    $subject = "Agendamento facillitta";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email."\r\n".
            "Plano Selecionado: ".$plano."\r\n".
            "Data de agendamento: ".$agendamento."\r\n".
            "Mensagem: ".$mensagem;
    $header = "From:contato@andersonberce.com"."\r\n".
                "Reply-To:".$email."\e\n".
                "X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        header("Location: postContact.html");
    }else{
        header("Location: postContactError.html");
    }
}


?>