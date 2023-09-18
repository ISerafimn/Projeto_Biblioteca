<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Almanaque</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <style>
        .containers {
            display: flex;
            justify-content: center;
        }
        fieldset{
            border: none;
            background-color: #222327;
            color: #fff;
            text-align: center;
        }
        .corpo{
            background-color: #fff;
            width: 90%;
            margin: auto;
            border-radius: 3%;
            
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
    <!-- Menu com responsividade-->
    <header style="background-color: #222327; border-bottom: 1px solid">
        <a href="index.html" class="logo"><i class="ri-home-3-fill"></i><span>Almanaque</span></a> 

        <ul class="navbar">

            <div class="login-oculto">
                <form action="#" method="get">
                    <div class="search-icon">
                        <input type="search" placeholder="Pesquisar!">
                        <button type="submit" class="icon"><i class="ri-search-line"></i></button>
                    </div>
                </form>
            </div>

            <li><a href="#">Home</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Livros</a></li>
            <li><a href="#">Sobre</a></li>

            <div class="login-oculto">
                <a href="#" class="user"><i class="ri-user-fill"></i>Entrar</a>
                <a href="#" class="user"><i class="ri-user-add-fill"></i>Cadastrar</a>
            </div>
        </ul>

        <div class="main">
            <form action="#" method="get">
                <div class="search-icon">
                    <input type="search" placeholder="Pesquisar!">
                    <button type="submit" class="icon"><i class="ri-search-line"></i></button>
                </div>
            </form>
            <a href="#" class="user"><i class="ri-user-fill"></i>Entrar</a>
            <a href="#">Cadastrar</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <br><br><br><br><br><br><br>

    <div class="corpo">
    <br><br><br>


        <fieldset>
                <h1>BEST-SELERS</h1>
            </fieldset>
            <div class='containers'>
        <?php
            include('../include/conexao.php');
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
            <h1>LANÇAMENTOS</h1>
        </fieldset>
        <div class='containers'>
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
        <div class='containers'>
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

        <br><br><br>
    </div>
    

    <br><br><br><br><br><br><br>

    <hr><br>

    <footer>
        <div class="container">
            <ul>
                <div class="col">
                    <h3 style="font-size: 26px;">Almanaque</h3>
                </div>
                <p style="margin-right: 150px;">Lorem ipsum dolor sit amet consectetur ipisicing elit.</p>
                <div class="rede-sociais">
                    <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="#"><i class="ri-whatsapp-fill"></i></a>
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-mail-fill"></i> </a>
                </div>
            </ul>
            <ul class="link">
                <div class="col">
                    <h3>Link</h3>
                    <div class="links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Categorias</a></li>
                        <li><a href="#">Livros</a></li>
                        <li><a href="#">Sobre</a></li>
                    </div>
                </div>
            </ul>
            <ul class="link">
                <div class="col">
                    <h3>Suporte</h3>
                    <div class="links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Sobre</a></li>
                    </div>
                </div>
            </ul>
            <ul class="link">
                <div class="col">
                    <h3>Nos Contate</h3>
                    <div class="links">
                        <li><p>4002-8922</p>
                        <li><a href="#">Email: almanaque@gmail.com</a></li>
                        <p>Estrada das Lagrimas N° 2461</p>
                    </div>
                </div>
            </ul>
        </div>
    </footer>

    <!-- JavaScript Link-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html> 