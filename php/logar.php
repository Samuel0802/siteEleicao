<?php
    // PHP 7
    $link = mysqli_connect("localhost", "root", "", "eleicao_db");

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $query = 'SELECT * FROM eleitor WHERE cpf = "'.$cpf.'" and senha = "'.$senha.'" ';
    $result = mysqli_query($link, $query);
	$dados = mysqli_fetch_assoc($result);
    $total = mysqli_num_rows($result);

    if ($total) {
        header('Location: ../home.php');
    } else {
        header('Location: ../erro.php');
    }
?>