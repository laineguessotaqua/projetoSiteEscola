<?php

    include_once "fisica.php";

    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $cpf = $_POST['txtCpf'];

    $aluno = new Fisica();

    $aluno->setNome($nome);
    $aluno->setEmail($email);
    $aluno->setCpf($cpf);

    echo $aluno->getNome();
    echo $aluno->getEmail();
    echo $aluno->getCpf();
?>