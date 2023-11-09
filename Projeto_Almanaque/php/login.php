<?php
// sessão iniciada pra mandar a variavel email do usuario que fez login pra diversos lugares
session_start();
include_once('../include/conexao.php');
if(isset($_POST['email_usuario']) || isset($_POST['senha_usuario'])) {

    if(strlen($_POST['email_usuario'])== "" ) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha_usuario'])== "" ) {
        echo "Preencha sua senha";
    } else {

        $email_usuario = $mysqli->real_escape_string($_POST['email_usuario']);
        $senha_usuario = $mysqli->real_escape_string($_POST['senha_usuario']);
        $_SESSION['email_usuario'] = $email = $_POST['email_usuario'];

        $sql_coder = "SELECT * FROM usuario WHERE email_usuario = '$email_usuario' LIMIT 1";
        $sql_exec = $mysqli->query($sql_coder) or die($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();
        if(password_verify($senha_usuario, $usuario['senha_usuario'])){


            $sql_code = "SELECT * FROM usuario WHERE email_usuario = '$email_usuario'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $sql = mysqli_query($mysqli, "SELECT * FROM usuario WHERE email_usuario = '$email_usuario'");
            while ($result = mysqli_fetch_array($sql)){
                $id_usuario = $result['id_usuario'];
                $id_sessao = $result['id_sessao'];
            };

            $quantidade = $sql_query->num_rows;
            if($quantidade == 1) {

                $_SESSION['id_usuario'] = $id_usuario;
                $_SESSION['id_sessao'] = $id_sessao;
                header('Location: ../index.php');

            } else {
                $_SESSION['erro-login'] = "<p style='color: red;'>Falha ao Logar! E-mail ou senha incorretos</p>";
                header('Location: ../usuario_login.php');
            }
        }
        else{
            $_SESSION['erro-login'] = "<p style='color: red;'>Falha ao Logar! E-mail ou senha incorretos</p>";
            header('Location: ../usuario_login.php');
        }
    }
}
?>