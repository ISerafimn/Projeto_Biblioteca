<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="itens_livros.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens Teste</title>
    <style>
        .container {
            overflow-x: scroll;
            display: flex;
            justify-content: center;
        }
        img{
            width: 175px;
            height: 250px;
        }
        button{
            margin-top: 10px;
            display: flex;
            margin-left: 10px;
            text-align: center;
            font-weight: bold;
            padding: 10px;
            width: 200px;
            height: 300px;
            border: 2px solid #161d3a;
            margin: 12px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px grey;
        }
        button:hover{
            background-color:rgb(255, 255, 255) ;
            cursor: pointer;
            box-shadow: 5px 5px 5px black;
        }
    </style>    
</head>
<body>
    <div class='container'>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM livro ORDER BY id_livro ASC LIMIT 7";
        $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
            {
                echo "<form method='post' action='livro.php'>
                        <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                            <button type='submit' name='Submit'>
                                        <div>
                                            <img src='".$row['url_imagem_livro']."'>
                                            <p>".$row['nome_livro']."</p>
                                        </div>
                            </button>
                        </form>";
            }
    ?>
    </div>
    
    </form>
</body> 
</html>