<?php
// sessão iniciada pra mandar a variavel email do usuario que fez login pra diversos lugares
session_start();
$_SESSION['email_usuario'] = $email = $_POST['email_usuario'];

include('conexao.php');

if(isset($_POST['email_usuario']) || isset($_POST['senha_usuario'])) {

    if(strlen($_POST['email_usuario'])== 0 ) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha_usuario'])== 0 ) {
        echo "Preencha sua senha";
    } else {

        $email_usuario = $mysqli->real_escape_string($_POST['email_usuario']);
        $senha_usuario = $mysqli->real_escape_string($_POST['senha_usuario']);

        $sql_code = "SELECT * FROM usuario WHERE email_usuario = '$email_usuario' AND senha_usuario = '$senha_usuario'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $sql = mysqli_query($mysqli, "SELECT * FROM usuario WHERE email_usuario = '$email_usuario'");
        while ($result = mysqli_fetch_array($sql)){
            $id_usuario = $result['id_usuario'];
        };

        $_SESSION['id_usuario'] = $id_usuario;

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            header("Location: ../usuario/index.php");

        } else {
            header("Location: ../usuario_login.html");
            echo "Falha ao Logar! E-mail ou senha incorretos";
        }

    }

}
?>