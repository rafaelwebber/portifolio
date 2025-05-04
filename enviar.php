<?php

    $nome = addslashes($_POST ['nome']);
    $email = addslashes($_POST ['email']);
    $telefone = addslashes($_POST ['telefone']);
    $mensagem= addslashes($_POST ['mensagem']);

    $para = "rafael.lumertz_webber@hotmail.com.br";
    $assunto = "Coleta de dados";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: rafael.webber09@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca,$mensagem)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }
?>