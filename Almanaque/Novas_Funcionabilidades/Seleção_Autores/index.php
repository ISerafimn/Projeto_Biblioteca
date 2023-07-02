<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-cadastro.css">
    <title>Teste</title>
</head>
<style>
    input::placeholder {
        color: rgb(52, 52, 52);
    }
</style>
<body>
<h1>CADASTRO DE LIVRO</h1>
    <form method="post" action="../../php/variaveis_livro.php">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_livro" type="text" placeholder="Digite o nome do livro"></td>
            </tr>
            <tr>
                <td>Autores:</td>
                <td>
                    <select name="name" style="width: 258px; color: rgb(52, 52, 52)">
                        <option>Autores:</option>
                        <?php
                            include('conexao.php');
                            $sql = "SELECT * FROM autor";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {
                                    echo "<option value='".$row['id_autor']."'>".$row['nome_autor']."</option>";
                                }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td><input name="genero_livro" type="text" placeholder="Digite o nome do gênero"></td>
            </tr>
            <tr>
                <td>Editora:</td>
                <td><input name="editora_livro" type="text" placeholder="Digite o nome da editora"></td>
            </tr>
            <tr>
                <td>Número da Edição:</td>
                <td><input name="num_edicao_livro" type="number" placeholder="Digite o número da edição"></td>
            </tr>
                <td>Sinopse:</td>
                <td><input name="sinopse_livro" type="text" placeholder="Digite a sinopse do livro"></td>
            </tr>
            <tr>
                <td>Estoque:</td>
                <td><input name="estoque_livro" type="number" placeholder="Digite o número de livros no estoque"></td>
            </tr>
            <tr>
                <td>Url da Capa</td>
                <td><input type="text" name="url_imagem_livro" placeholder="Digite a URL da capa do livro"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Concluir Cadastro</button>
    </form>
</body>
</html>