<?php
// sessão iniciada pra mandar a variavel cpf do usuario que fez login pra diversos arquivos
session_start();
$_SESSION['var3'] = $cpf = $_POST['funcionario_cpf'];

include('conexao.php');

if(isset($_POST['funcionario_email']) || isset($_POST['funcionario_cpf'])) {

    if(strlen($_POST['funcionario_email'])== 0 ) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['funcionario_cpf'])== 0 ) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['funcionario_email']);
        $senha = $mysqli->real_escape_string($_POST['funcionario_cpf']);

        $sql_code = "SELECT * FROM funcionario WHERE funcionario_email = '$email' AND funcionario_cpf = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['funcionario_id'] = $usuario['funcionario_id'];
            $_SESSION['funcionario_nome'] = $usuario['funcionario_nome'];

            header("Location: ../funcionario/index.html");

        } else {
            header("Location: ../funcionario_login.html");
            echo "Falha ao Logar! E-mail ou senha incorretos";
        }

    }



}
?>