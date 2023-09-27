<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Almanaque</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/card-slider.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <style>
        fieldset{
            border: none;
            background-color: #222327;
            color: #fff;
            text-align: center;
        }
        .name{
            background-color: #fff;
        }
        .bt-card{
            border: none;
        }
    </style>  
</head>
<body>
    <!-- Menu com responsividade-->
    <header style="background-color: #222327; border-bottom: 1px solid">
        <a href="index.php" class="logo"><i class="ri-home-3-fill"></i><span>Almanaque</span></a> 

        <ul class="navbar">

            <div class="login-oculto">
                <form action="resultado_pesquisa.php">
                    <div class="search-icon">
                        <input type="search" placeholder="Pesquisar!" name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>">
                        <button type="submit" class="icon"><i class="ri-search-line"></i></button>
                    </div>
                </form>
            </div>

            <li><a href="index.php">Home</a></li>
            <li><a href="generos_literario.php">Categorias</a></li>
            <li><a href="livros.php">Livros</a></li>
            <li><a href="sobre.php">Sobre</a></li>

            <div class="login-oculto">
                <a href="usuario_login.php" class="user"><i class="ri-user-fill"></i>Entrar</a>
                <a href="usuario_cadastro.php" class="user"><i class="ri-user-add-fill"></i>Cadastrar</a>
            </div>
        </ul>

        <div class="main">
            <form action="resultado_pesquisa.php">
                <div class="search-icon">
                    <input type="search" placeholder="Pesquisar!" name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>">
                    <button type="submit" class="icon"><i class="ri-search-line"></i></button>
                </div>
            </form>                
            <a href="usuario_login.php" class="user"><i class="ri-user-fill"></i>Entrar</a>
            <a href="usuario_cadastro.php">Cadastrar</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <br><br><br><br>

    <div class="all-slider">
        <div class="img-slider">
            <div class="slide active">
              <img src="imagens/banner-01.png" alt="">
            </div>
            <div class="slide">
              <img src="imagens/banner-02.png" alt="">
            </div>
            <div class="slide">
              <img src="imagens/banner-03.png" alt="">
            </div>
            <div class="slide">
              <img src="imagens/banner-04.png" alt="">
            </div>
            <div class="slide">
              <img src="imagens/banner-05.png" alt="">
            </div>
            <div class="navigation">
              <div class="btn active"></div>
              <div class="btn"></div>
              <div class="btn"></div>
              <div class="btn"></div>
              <div class="btn"></div>
            </div>
          </div>
    </div>

    <br>


        <fieldset>
                <h1>BEST-SELERS</h1>
        </fieldset>

            <div class="slide-container swiper">
            <div class="slide-content"><div class='card-wrapper swiper-wrapper'>

                <?php
                include('include/conexao.php');
                    $sql = "SELECT * FROM livro ORDER BY id_livro ASC LIMIT 9";
                    $resultad = $mysqli->query($sql);
                    while ($row = mysqli_fetch_array($resultad))
                        {
                            $id_autor = $row['id_autor'];
    
                            $sql2 = "SELECT * FROM autor WHERE id_autor='$id_autor'";
                            $resultad2 = $mysqli->query($sql2);
                            while ($row2 = mysqli_fetch_array($resultad2)){
                                $nome_autor = $row2['nome_autor'];
                            }
                            echo   "<div class='card swiper-slide'>
                                        <div class='image-content'>
                                            <div class='card-image'>
                                                <img src='imagens/livro_capa/".$row['url_imagem_livro']."' class='card-img'>
                                            </div>
                                        </div>
    
                                        <div class='card-content'>
                                            <form method='post' action='livro_aberto.php'>
                                            <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                                <button type='submit' class='bt-card'>
                                                    <div>
                                                        <h2 class='name'>".$row['nome_livro']."</h2>
                                                    </div>
                                                </button>
                                            </form>
                                            <p class='description'>".$nome_autor."</p>
                                            <table>
                                                <tr>
                                                    <td><button class='button'>Retirar</button></td>
                                                    <td><button class='icone'><i class='ri-heart-fill'></i></button></td>  
                                                </tr>
                                            </table>
                                        </div>
                                    </div>";
                        }
                        ?>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>


        <br><br>


        <fieldset>
                <h1>LANÇAMENTOS</h1>
        </fieldset>

            <div class="slide-container swiper">
            <div class="slide-content"><div class='card-wrapper swiper-wrapper'>

                <?php
                include('include/conexao.php');
                    $sql = "SELECT * FROM livro ORDER BY id_livro DESC LIMIT 9";
                    $resultad = $mysqli->query($sql);
                    while ($row = mysqli_fetch_array($resultad))
                        {
                            $id_autor = $row['id_autor'];
    
                            $sql2 = "SELECT * FROM autor WHERE id_autor='$id_autor'";
                            $resultad2 = $mysqli->query($sql2);
                            while ($row2 = mysqli_fetch_array($resultad2)){
                                $nome_autor = $row2['nome_autor'];
                            }
                            echo"  
                                    <div class='card swiper-slide'>
                                        <div class='image-content'>
                                            <div class='card-image'>
                                                <img src='imagens/livro_capa/".$row['url_imagem_livro']."' class='card-img'>
                                            </div>
                                        </div>
    
                                        <div class='card-content'>
                                            <form method='post' action='livro_aberto.php'>
                                            <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                                <button type='submit' class='bt-card'>
                                                    <div>
                                                        <h2 class='name'>".$row['nome_livro']."</h2>
                                                    </div>
                                                </button>
                                            </form>
                                            <p class='description'>".$nome_autor."</p>
                                            <table>
                                                <tr>
                                                    <td><button class='button'>Retirar</button></td>
                                                    <td><button class='icone'><i class='ri-heart-fill'></i></button></td>  
                                                </tr>
                                            </table>
                                        </div>
                                    </div>";
                        }
                        ?>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

        <br>

        <fieldset>
                <h1>RECOMENDAÇÕES</h1>
        </fieldset>

    <div class="slide-container swiper">
    <div class="slide-content"><div class='card-wrapper swiper-wrapper'>

        <?php
        include('include/conexao.php');
            $sql = "SELECT * FROM livro ORDER BY id_livro ASC LIMIT 9";
            $resultad = $mysqli->query($sql);
            while ($row = mysqli_fetch_array($resultad))
                {
                    $id_autor = $row['id_autor'];

                    $sql2 = "SELECT * FROM autor WHERE id_autor='$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                    while ($row2 = mysqli_fetch_array($resultad2)){
                        $nome_autor = $row2['nome_autor'];
                    }
                    echo"  
                            <div class='card swiper-slide'>
                                <div class='image-content'>
                                    <div class='card-image'>
                                        <img src='imagens/livro_capa/".$row['url_imagem_livro']."' class='card-img'>
                                    </div>
                                </div>

                                <div class='card-content'>
                                    <form method='post' action='livro_aberto.php'>
                                    <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                        <button type='submit' class='bt-card'>
                                            <div>
                                                <h2 class='name'>".$row['nome_livro']."</h2>
                                            </div>
                                        </button>
                                    </form>
                                    <p class='description'>".$nome_autor."</p>
                                    <table>
                                        <tr>
                                            <td><button class='button'>Retirar</button></td>
                                            <td><button class='icone'><i class='ri-heart-fill'></i></button></td>  
                                        </tr>
                                    </table>
                                </div>
                            </div>";
                }
                ?>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
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
    </footer>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/card-script.js"></script>
    <!-- JavaScript Link-->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- JavaScript Sliders -->

    <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;
    
        // Javascript for image slider manual navigation
        var manualNav = function(manual){
          slides.forEach((slide) => {
            slide.classList.remove('active');
    
            btns.forEach((btn) => {
              btn.classList.remove('active');
            });
          });
    
          slides[manual].classList.add('active');
          btns[manual].classList.add('active');
        }
    
        btns.forEach((btn, i) => {
          btn.addEventListener("click", () => {
            manualNav(i);
            currentSlide = i;
          });
        });
    
        // Javascript for image slider autoplay navigation
        var repeat = function(activeClass){
          let active = document.getElementsByClassName('active');
          let i = 1;
    
          var repeater = () => {
            setTimeout(function(){
              [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
              });
    
            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;
    
            if(slides.length == i){
              i = 0;
            }
            if(i >= slides.length){
              return;
            }
            repeater();
          }, 10000);
          }
          repeater();
        }
        repeat();
    </script>
</body>
</html> 