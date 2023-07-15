<?php

include('../php/conexao.php');

$id_usuario = $_POST['id_usuario'];

$id_usuario2= $id_usuario;

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

echo '<a href="consultarID.html">Voltar</a>';

?>