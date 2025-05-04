<?php
    // Sanitização de dados
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    // Configuração do e-mail
    $para = "rafael.lumertz_webber@hotmail.com.br";
    $assunto = "Coleta de dados";

    // Corpo do e-mail
    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    // Cabeçalhos do e-mail
    $cabeca = "From: rafael.webber09@gmail.com"."\n".
              "Reply-to: ".$email."\n".
              "X-Mailer: PHP/".phpversion();

    // Envio do e-mail
    if(mail($para, $assunto, $corpo, $cabeca)){
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail!";
    }
?>
