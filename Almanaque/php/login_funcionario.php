<?php
// sessão iniciada pra mandar a variavel email funcionario que fez login pra diversos arquivos
session_start();
$_SESSION['email_funcionario'] = $email = $_POST['email_funcionario'];

include('conexao.php');

if(isset($_POST['email_funcionario']) || isset($_POST['senha_funcionario'])) {

    if(strlen($_POST['email_funcionario'])== 0 ) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha_funcionario'])== 0 ) {
        echo "Preencha sua senha";
    } else {

        $email_funcionario = $mysqli->real_escape_string($_POST['email_funcionario']);
        $senha_funcionario = $mysqli->real_escape_string($_POST['senha_funcionario']);

        $sql_code = "SELECT * FROM funcionario WHERE email_funcionario = '$email_funcionario' AND senha_funcionario = '$senha_funcionario'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            header("Location: ../funcionario/index.php");

        } else {
            header("Location: ../funcionario_login.html");
            echo "Falha ao Logar! E-mail ou senha incorretos";
        }

    }

}
?>