<?php

    $nome = addslashes($_POST ['nome']);
    $email = addslashes($_POST ['email']);
    $telefone = addslashes($_POST ['telefone']);

    $para = "rafael.lumertz_webber@hotmail.com.br";
    $assunto = "Coleta de dados";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: rafael.webber09@gmail.com". "\n"."Reply-to: ".$email. "\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }
?>