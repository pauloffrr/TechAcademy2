<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

$nome = addslashes($_POST['nome']);    
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "paulo_efr@outlook.com";
$subject = "Contato - OnSET";

$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem; 

$header = "From: pauloffr1@gmail.com"."\n"
        ."Reply-to: ".$email."\n"
        ."X=Mailer:PHP/". phpversion();

if(mail($to,$subject,$body,$header)){
    echo("E-mail enviado com sucesso!");
}else{
    echo ("Houve um erro ao enviar o email!");
}

}

?>