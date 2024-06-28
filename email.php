<h1><strong>Mensagem enviada</strong></h1>




<?php
    //mostrar na tela o array do formulario
    //print_r($_POST);

    $nome = $_POST["nome"] ?? NULL;
    $email = $_POST["email"] ?? NULL;
    $mensagem = $_POST["mensagem"] ?? NULL;

    //funcao chamada msg que passa uma $msg
    function mensagem($msg)
    {
    echo "<script>alert('{$msg}');history.back();</script>";
    }

    if (empty($nome)) {
    mensagem("Preencha o seu nome");
    } else if (empty($mensagem)) {
    mensagem("Digite sua mensagem");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mensagem("E-mail inválido");
    }

    echo "<p>Nome: {$nome}<br>
            E-mail: {$email}<br>
            Mensagem: {$mensagem}</p>";
?>