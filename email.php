<?php

if(isset($_POST(['email']) && !empty($_POST(['email']))
$nome = addslaches($_POST(['name']))
$email = addslaches($_POST(['email']))
$mensagem = addslaches($_POST(['message']))


$to = "pedrohenrique_sa@yahoo.com"
$subject = "Contato do Feedbackson";
$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Mensagem: ".$mensagem;
$header = "From: pedrohenrique_sa@yahoo.com"."\r\n".
            ."Reply-To:".$email."\e\n"
            ."X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$body,$header)){

  echo("Email enviado com sucesso!")

}else{
    echo("O email não pode ser enviado")";"

}


?>