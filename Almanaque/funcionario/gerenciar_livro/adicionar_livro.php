<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <link rel="stylesheet" href="../../design/login-cadastro.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        input::placeholder {
            color: rgb(52, 52, 52);
        }
        input{
            width: 250px;
            color: black;
        }
        input::-webkit-inner-spin-button{
            display: none;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../../include/menu_funcionario_gerenciar.php'); ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_livro.php'); ?>

    <br>

    <h1>CADASTRO DE LIVRO</h1>
    <form method="post" action="../../php/variaveis_livro.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_livro" type="text" placeholder="Digite o nome do livro"></td>
            </tr>
            <tr>
                <td>Autores:</td>
                <td>
                    <select name="name" style="width: 250px; color: rgb(52, 52, 52)">
                        <option>Autores:</option>
                        <?php
                            include('../../include/conexao.php');
                            $sql = "SELECT * FROM autor";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {
                                    echo "<option value='".$row['id_autor']."'>".$row['nome_autor']."</option>";
                                }
                        ?>
                    </select>
                </td>
                <td><a href="../gerenciar_autor/adicionar_autor.php">Adicionar Autor</a></td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td>
                    <select name="id_genero" style="width: 250px; color: rgb(52, 52, 52)">
                            <option>Generos:</option>
                            <?php
                                include('../../include/conexao.php');
                                $sql2 = "SELECT * FROM genero";
                                $resultad2 = $mysqli->query($sql2);
                                while ($row2 = mysqli_fetch_array($resultad2))
                                    {
                                        echo "<option value='".$row2['id_genero']."'>".$row2['nome_genero']."</option>";
                                    }
                            ?>
                    </select>
                </td>
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
                <td><input type="file" name="imagem"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Concluir Cadastro</button>
    </form>
    
</body>
</html>