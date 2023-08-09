<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="../javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        .container {
            overflow-x: scroll;
            display: flex;
            justify-content: center;
        }
        .livro img{
            width: 175px;
            height: 250px;
        }
        .livro button{
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
        .livro button:hover{
            background-color:rgb(255, 255, 255) ;
            cursor: pointer;
            box-shadow: 5px 5px 5px black;
        }
    </style>  
</head>
<body>
    <div style="background-color: #1f1919;">
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="generos_literario.html">GÊNEROS LITERARIOS</a>
                    <div class="dp-menu">
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Romance">
                            <button type="submit" name="Submit">Romance</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Fantasia">
                            <button type="submit" name="Submit">Fantasia</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Poesia">
                            <button type="submit" name="Submit">Poesia</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Ficcao">
                            <button type="submit" name="Submit">Ficção</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Conto">
                            <button type="submit" name="Submit">Conto</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Terror">
                            <button type="submit" name="Submit">Terror</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Aventura">
                            <button type="submit" name="Submit">Ação e Aventura</button>
                        </form>
                    </div>
                </li>
                <li>
                    <a href="livros.php">LIVROS</a>
                </li>
                <li>
                    <a href="contato.html">CONTATO</a>
                </li>
                <li class="dropdown">
                    <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                    <div class="dp-menu" style="width: 125px; text-align: center;">
                        <a href="perfil.php">Meu Perfil</a>
                        <a href="meus_livros.php">Meus Livros</a>
                        <a href="../php/logout.php">Sair</a>
                    </div>
                </li>
            </ul> 
        </nav>

        <img src="../imagens/estante_digital.png" width="100%" height="auto">
    </div>
        <br>
        <fieldset>
            <h1>BEST-SELERS</h1>
        </fieldset>

        <div class='container'>
    <?php
        include('php/conexao.php');
        $sql = "SELECT * FROM livro ORDER BY id_livro ASC LIMIT 7";
        $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
            {
                echo    "<div  class='livro'>
                            <form method='post' action='livro_aberto.php'>
                                <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                    <button type='submit' name='Submit'>
                                        <div>
                                            <img src='../imagens/livro_capa/".$row['url_imagem_livro']."'>
                                            <p>".$row['nome_livro']."</p>
                                        </div>
                                    </button>
                            </form>
                        </div>";
            }
    ?>
    </div>

    <fieldset>
        <h1 style="color: rgba(0, 0, 0, 0);">SLIDERS</h1>
    </fieldset>

    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="../imagens/banner2.png" alt="Imagem 1">
            </div>
            <div class="slide">
                <img src="../imagens/banner3.png" alt="Imagem 2">
            </div>
            <div class="slide">
                <img src="../imagens/banner.png" alt="Imagem 3">
            </div>
            <div class="slide">
                <img src="../imagens/banner4.png" alt="Imagem 3">
            </div>  
        </div>
            <div class="prev">&#10094;</div>
            <div class="next">&#10095;</div>
    </div>

    <fieldset>
        <h1>LANÇAMENTOS</h1>
    </fieldset>

    <div class='container'>
    <?php
        $sql = "SELECT * FROM livro ORDER BY id_livro DESC LIMIT 7";
        $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
            {
                echo    "<div  class='livro'>
                            <form method='post' action='livro_aberto.php'>
                                <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                    <button type='submit' name='Submit'>
                                        <div>
                                            <img src='../imagens/livro_capa/".$row['url_imagem_livro']."'>
                                            <p>".$row['nome_livro']."</p>
                                        </div>
                                    </button>
                            </form>
                        </div>";
            }
    ?>
    </div>

    <fieldset>
        <h1>RECOMENDAÇÕES</h1>
    </fieldset>

    <div class='container'>
    <?php
        $sql = "SELECT * FROM livro ORDER BY id_livro ASC LIMIT 7";
        $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
            {
                echo    "<div  class='livro'>
                            <form method='post' action='livro_aberto.php'>
                                <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                    <button type='submit' name='Submit'>
                                        <div>
                                            <img src='../imagens/livro_capa/".$row['url_imagem_livro']."'>
                                            <p>".$row['nome_livro']."</p>
                                        </div>
                                    </button>
                            </form>
                        </div>";
            }
    ?>
    </div>
    
        <fieldset>
            <h1 style="color: rgba(0, 0, 0, 0);">SLIDERS</h1>
        </fieldset>
    
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="../imagens/banner2.png" alt="Imagem 1">
                </div>
                <div class="slide">
                    <img src="../imagens/banner3.png" alt="Imagem 2">
                </div>
                <div class="slide">
                    <img src="../imagens/banner.png" alt="Imagem 3">
                </div>
                <div class="slide">
                    <img src="../imagens/banner4.png" alt="Imagem 3">
                </div>  
            </div>
                <div class="prev">&#10094;</div>
                <div class="next">&#10095;</div>
        </div>

   <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Estante Digital</h1>
                <p>O mundo literario</p>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="istagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
                <ul class="footer-list">
                    <li>
                        <h3>Blog</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Literatura</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Audioboks</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">E-book</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <h3>Produtos</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Apps</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Downloand</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Cloud</a>
                    </li>
                </ul>

                <div id="footer_cad">
                    <h3>Cadastre-se</h3>
                    <p>para obter a melhor experiencia literaria da sua vida!.</p>
                    <p>Entre com seu email e sera notoficado diariamente com nossas ultimas novidades</p>

               <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
            <p style="text-align: center; padding-bottom: 10px;"> &#169 2023 direito reservado</p>
    </footer>
</body>
</html>