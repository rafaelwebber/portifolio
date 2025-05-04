<?php
    // Sanitização de dados
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

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
