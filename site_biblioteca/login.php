<?php
include('conexao.php');

if(isset($_POST['usuario_email']) || isset($_POST['usuario_cpf'])) {

    if(strlen($_POST['usuario_email'])== 0 ) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['usuario_cpf'])== 0 ) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['usuario_email']);
        $senha = $mysqli->real_escape_string($_POST['usuario_cpf']);

        $sql_code = "SELECT * FROM usuario WHERE usuario_email = '$email' AND usuario_cpf = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['usuario_id'] = $usuario['usuario_id'];
            $_SESSION['usuario_nome'] = $usuario['usuario_nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao Logar! E-mail ou senha incorretos";
        }

    }



}
?>