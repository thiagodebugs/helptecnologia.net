<?php

if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $name = addslashes($_POST["name"]);
    $email = addslashes($_POST["email"]);
    $fone = addslashes($_POST["fone"]);
    $message = addslashes($_POST["textArea"]);

    $to = "Social Media <socialmedia@helptecnologia.net>";
    $subject = "QUERO SER CLIENTE";
    $body = "Nome: ".$name.
            "\nEmail: ".$email.
            "\nTelefone: ".$fone.
            "\nMensagem: ".$message;
    $header = "From: Social Media <socialmedia@helptecnologia.net>";

    if (mail($to, $subject, $body, $header)) {
        echo    "<script>
                    alert('Fique tranquilo, vamos entrar em contato com você!');
                    window.location = './index.html';
                </script>";
    } else {
        echo    "<script>
                    alert('Vixii, deu erro! Faz assim, mais tarde você volta aqui, blz?');
                    window.location = './index.html';
                </script>";
    }
}
echo    "<h1>Humm..</h1>
        <p>Algo de errado não esta certo, click aqui para voltar para <a href='https://helptecnologia.net'>Help Tecnologia</a>.</p>";
?>