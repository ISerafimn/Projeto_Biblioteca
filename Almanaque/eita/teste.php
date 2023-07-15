<!DOCTYPE html>
<html>
<head>
    <title>Operações de Usuário</title>
</head>
<body>
    <h1>Consultar, Atualizar e Excluir Usuário</h1>
    <h2>Consultar Usuário</h2>
    <form action="" method="POST">
        <label for="id_usuario">ID do Usuário:</label>
        <input type="text" id="id_usuario" name="id_usuario">
        <input type="submit" name="consultar" value="Consultar">
    </form>

    <?php
    include ('../php/conexao.php');

    if(isset($_POST['consultar'])) {
        $id_usuario = $_POST['id_usuario'];
        $id_usuario2 = $id_usuario;

        $resultado = mysqli_query($mysqli, "SELECT * FROM usuario WHERE id_usuario='$id_usuario'");

        if ($id_usuario = mysqli_num_rows($resultado)) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $id_usuario = $row['id_usuario'];
                $nome_usuario = $row['nome_usuario'];
                $email_usuario = $row['email_usuario'];
                $cpf_usuario = $row['cpf_usuario'];
                $data_usuario = $row['data_usuario'];
                $senha_usuario = $row['senha_usuario'];
                $endereco_usuario = $row['endereco_usuario'];
                $telefone_usuario = $row['telefone_usuario'];

                echo "<h2>Dados do Usuário</h2>";
                echo "ID: $id_usuario <br>";
                echo "Nome: $nome_usuario<br>";
                echo "Email: $email_usuario<br>";
                echo "CPF: $cpf_usuario<br>";
                echo "Data de Nascimento: $data_usuario<br>";
                echo "Senha: $senha_usuario<br>";
                echo "Endereço: $endereco_usuario<br>";
                echo "Telefone: $telefone_usuario<br>";
            }
        } else {
            echo "<p>Nenhum registro encontrado para o ID do usuário: $id_usuario2</p>";
        }
    }

    if(isset($_POST['atualizar'])) {
        $id_usuario_atualizar = $_POST['id_usuario_atualizar'];
        $nome_usuario_atualizar = $_POST['nome_usuario_atualizar'];
        $email_usuario_atualizar = $_POST['email_usuario_atualizar'];
        $cpf_usuario_atualizar = $_POST['cpf_usuario_atualizar'];
        $data_usuario_atualizar = $_POST['data_usuario_atualizar'];
        $senha_usuario_atualizar = $_POST['senha_usuario_atualizar'];
        $endereco_usuario_atualizar = $_POST['endereco_usuario_atualizar'];
        $telefone_usuario_atualizar = $_POST['telefone_usuario_atualizar'];

        $resultado = mysqli_query($mysqli, "UPDATE usuario SET nome_usuario='$nome_usuario_atualizar', email_usuario='$email_usuario_atualizar', cpf_usuario='$cpf_usuario_atualizar', data_usuario='$data_usuario_atualizar', senha_usuario='$senha_usuario_atualizar', endereco_usuario='$endereco_usuario_atualizar', telefone_usuario='$telefone_usuario_atualizar' WHERE id_usuario='$id_usuario_atualizar'");

        if ($resultado) {
            echo "<p>Usuário atualizado com sucesso.</p>";
        } else {
            echo "<p>Ocorreu um erro ao atualizar o usuário.</p>";
        }
    }

    if(isset($_POST['excluir'])) {
        $id_usuario_excluir = $_POST['id_usuario_excluir'];

        $query = "DELETE FROM usuario WHERE id_usuario = ?";
        $stmt = mysqli_prepare($mysqli, $query);
        mysqli_stmt_bind_param($stmt, "i", $id_usuario_excluir);
        mysqli_stmt_execute($stmt);
        $num_rows = mysqli_stmt_affected_rows($stmt);

        if ($num_rows > 0) {
            echo "<p>Usuário com ID $id_usuario_excluir foi excluído com sucesso.</p>";
        } else {
            echo "<p>Nenhum usuário encontrado para o ID $id_usuario_excluir. Nenhum registro foi excluído.</p>";
        }
    }
    ?>

    <h2>Atualizar Usuário</h2>
    <form action="" method="POST">
        <label for="id_usuario_atualizar">ID do Usuário:</label>
        <input type="text" id="id_usuario_atualizar" name="id_usuario_atualizar">
        <label for="nome_usuario_atualizar">Nome:</label>
        <input type="text" id="nome_usuario_atualizar" name="nome_usuario_atualizar">
        <label for="email_usuario_atualizar">Email:</label>
        <input type="text" id="email_usuario_atualizar" name="email_usuario_atualizar">
        <label for="cpf_usuario_atualizar">CPF:</label>
        <input type="text" id="cpf_usuario_atualizar" name="cpf_usuario_atualizar">
        <label for="data_usuario_atualizar">Data de Nascimento:</label>
        <input type="text" id="data_usuario_atualizar" name="data_usuario_atualizar">
        <label for="senha_usuario_atualizar">Senha:</label>
        <input type="password" id="senha_usuario_atualizar" name="senha_usuario_atualizar">
        <label for="endereco_usuario_atualizar">Endereço:</label>
        <input type="text" id="endereco_usuario_atualizar" name="endereco_usuario_atualizar">
        <label for="telefone_usuario_atualizar">Telefone:</label>
        <input type="text" id="telefone_usuario_atualizar" name="telefone_usuario_atualizar">
        <input type="submit" name="atualizar" value="Atualizar">
    </form>

    <h2>Excluir Usuário</h2>
    <form action="" method="POST">
        <label for="id_usuario_excluir">ID do Usuário:</label>
        <input type="text" id="id_usuario_excluir" name="id_usuario_excluir">
        <input type="submit" name="excluir" value="Excluir">
    </
