<?php
// sistema de verificação de login/start de sessão.
if(!isset($_SESSION)) {
    session_start();
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Almanaque</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
        .button-favorito{
            border: none;
        }
        .ri-heart-fill{
            color: #265DF2;
        }
        .ri-heart-fill, .ri-heart-add-fill{
            background-color: transparent;
            font-size: 1.6rem;
            transition: all 0.3s ease;
        }
        .ri-heart-add-fill:hover{
            color: #265DF2;
        }
        .ri-heart-fill:hover{
            color: black;
        }
    </style>  
</head>
<body>
    <!-- Menu com responsividade-->
    <?php include('include/import_menu.php'); ?>

    <br><br><br><br>

    <div class="all-slider">
        <div class="img-slider">
            <div class="slide active">
              <img src="imagens/banner-01.png" alt="slide 1">
            </div>
            <div class="slide">
              <img src="imagens/banner-02.png" alt="slide 2">
            </div>
            <div class="slide">
              <img src="imagens/banner-03.png" alt="slide 3">
            </div>
            <div class="slide">
              <img src="imagens/banner-04.png" alt="slide 4">
            </div>
            <div class="slide">
              <img src="imagens/banner-05.png" alt="slide 5">
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

                            $id_livro = $row['id_livro'];

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
                                            <p class='description'>".$nome_autor."</p>";


                                echo        "<table>
                                                <tr>
                                                    <td>
                                                        <form action='livro_aberto.php' method='post'>
                                                            <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                                            <button class='button' type='submit' style='padding: 0px 0px;'><p style='padding: 8px 16px;'>Retirar</p></button>
                                                        </form>
                                                    </td>";

                                            if(isset($_SESSION['id_sessao'])){
                                                if($_SESSION['id_sessao'] == 1) {
                                                    $id_usuario = $_SESSION['id_usuario'];
                                                }
                                            }

                                                if(!isset($_SESSION['id_sessao'])){

                                                    echo
                                                    "<form action='usuario_login.php'>
                                                        <td><button class='button-favorito'><i class='ri-heart-add-fill'></i></i></button></td>
                                                    </form>";
                                                }
                                                else{

                                                    if($_SESSION['id_sessao'] != 1) {
                                                        echo
                                                        "<td><button class='button-favorito'><i class='ri-heart-add-fill'></i></i></button></td>";
                                                    }
                                                    else{ 

                                                        $sql_code = "SELECT * FROM favorito WHERE id_usuario = '$id_usuario' AND id_livro = '$id_livro'";
                                                        $sql_query = $mysqli->query($sql_code);
                                                        $num_favorito = $sql_query->num_rows;
                                                        if($num_favorito == 1){
                                                            $sql = mysqli_query($mysqli, "SELECT * FROM favorito WHERE id_usuario = '$id_usuario' AND id_livro = '$id_livro'");
                                                            while ($result = mysqli_fetch_array($sql)){
                                                                $id_favorito = $result['id_favorito'];
                                                            }
                                                        ?>
                                                            <form action="php/favoritar.php" method="post">
                                                                <input type="text" name="sessao" value="index" style="display: none;">
                                                                <input type="text" name="caminho" value="remover" style="display: none;">
                                                                <input type="text" name="id_favorito" value="<?php echo "$id_favorito"?>" style="display: none;">
                                                                <input type="text" name="id_usuario" value="<?php echo "$id_usuario"?>" style="display: none;">
                                                                <input type="text" name="id_livro" value="<?php echo "$id_livro"?>" style="display: none;">
                                                                <td>
                                                                    <button class='button-favorito'><i class='ri-heart-fill'></i></button>
                                                                </td>
                                                            </form>
                                                        <?php
                                                        }
                                                        else{
                                                        ?>
                                                            <form action="php/favoritar.php" method="post">
                                                                <input type="text" name="caminho" value="adicionar" style="display: none;">
                                                                <input type="text" name="sessao" value="index" style="display: none;">
                                                                <input type="text" name="id_favorito" value='NULL' style="display: none;">
                                                                <input type="text" name="id_usuario" value="<?php echo "$id_usuario"?>" style="display: none;">
                                                                <input type="text" name="id_livro" value="<?php echo "$id_livro"?>" style="display: none;">
                                                                <td>
                                                                    <button class='button-favorito'><i class="ri-heart-add-fill"></i></i></button>
                                                                </td>
                                                            </form>
                                                        <?php
                                                        }
                                                    }
                                                }
                                            echo "</tr>
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

                            $id_livro = $row['id_livro'];

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
                                            <p class='description'>".$nome_autor."</p>";


                                echo        "<table>
                                                <tr>
                                                    <td>
                                                        <form action='livro_aberto.php' method='post'>
                                                            <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                                            <button class='button' type='submit' style='padding: 0px 0px;'><p style='padding: 8px 16px;'>Retirar</p></button>
                                                        </form>
                                                    </td>";

                                                    if(isset($_SESSION['id_sessao'])){
                                                        if($_SESSION['id_sessao'] == 1) {
                                                            $id_usuario = $_SESSION['id_usuario'];
                                                        }
                                                    }
        
                                                        if(!isset($_SESSION['id_sessao'])){
        
                                                            echo
                                                            "<form action='usuario_login.php'>
                                                                <td><button class='button-favorito'><i class='ri-heart-add-fill'></i></i></button></td>
                                                            </form>";
                                                        }
                                                        else{
        
                                                            if($_SESSION['id_sessao'] != 1) {
                                                                echo
                                                                "<td><button class='button-favorito'><i class='ri-heart-add-fill'></i></i></button></td>";
                                                            }
                                                            else{ 
        
                                                                $sql_code = "SELECT * FROM favorito WHERE id_usuario = '$id_usuario' AND id_livro = '$id_livro'";
                                                                $sql_query = $mysqli->query($sql_code);
                                                                $num_favorito = $sql_query->num_rows;
                                                                if($num_favorito == 1){
                                                                    $sql = mysqli_query($mysqli, "SELECT * FROM favorito WHERE id_usuario = '$id_usuario' AND id_livro = '$id_livro'");
                                                                    while ($result = mysqli_fetch_array($sql)){
                                                                        $id_favorito = $result['id_favorito'];
                                                                    }
                                                                ?>
                                                                    <form action="php/favoritar.php" method="post">
                                                                        <input type="text" name="sessao" value="index" style="display: none;">
                                                                        <input type="text" name="caminho" value="remover" style="display: none;">
                                                                        <input type="text" name="id_favorito" value="<?php echo "$id_favorito"?>" style="display: none;">
                                                                        <input type="text" name="id_usuario" value="<?php echo "$id_usuario"?>" style="display: none;">
                                                                        <input type="text" name="id_livro" value="<?php echo "$id_livro"?>" style="display: none;">
                                                                        <td>
                                                                            <button class='button-favorito'><i class='ri-heart-fill'></i></button>
                                                                        </td>
                                                                    </form>
                                                                <?php
                                                                }
                                                                else{
                                                                ?>
                                                                    <form action="php/favoritar.php" method="post">
                                                                        <input type="text" name="caminho" value="adicionar" style="display: none;">
                                                                        <input type="text" name="sessao" value="index" style="display: none;">
                                                                        <input type="text" name="id_favorito" value='NULL' style="display: none;">
                                                                        <input type="text" name="id_usuario" value="<?php echo "$id_usuario"?>" style="display: none;">
                                                                        <input type="text" name="id_livro" value="<?php echo "$id_livro"?>" style="display: none;">
                                                                        <td>
                                                                            <button class='button-favorito'><i class="ri-heart-add-fill"></i></i></button>
                                                                        </td>
                                                                    </form>
                                                                <?php
                                                                }
                                                            }
                                                        }
                                                echo "</tr>
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

                            $id_livro = $row['id_livro'];

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
                                            <p class='description'>".$nome_autor."</p>";


                                echo        "<table>
                                                <tr>
                                                    <td>
                                                        <form action='livro_aberto.php' method='post'>
                                                            <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
                                                            <button class='button' type='submit' style='padding: 0px 0px;'><p style='padding: 8px 16px;'>Retirar</p></button>
                                                        </form>
                                                    </td>";

                                                    if(isset($_SESSION['id_sessao'])){
                                                        if($_SESSION['id_sessao'] == 1) {
                                                            $id_usuario = $_SESSION['id_usuario'];
                                                        }
                                                    }
        
                                                        if(!isset($_SESSION['id_sessao'])){
        
                                                            echo 
                                                            "<form action='usuario_login.php'>
                                                                <td><button class='button-favorito'><i class='ri-heart-add-fill'></i></i></button></td>
                                                            </form>";
                                                        }
                                                        else{
        
                                                            if($_SESSION['id_sessao'] != 1) {
                                                                echo
                                                                "<td><button class='button-favorito'><i class='ri-heart-add-fill'></i></i></button></td>";
                                                            }
                                                            else{ 
        
                                                                $sql_code = "SELECT * FROM favorito WHERE id_usuario = '$id_usuario' AND id_livro = '$id_livro'";
                                                                $sql_query = $mysqli->query($sql_code);
                                                                $num_favorito = $sql_query->num_rows;
                                                                if($num_favorito == 1){
                                                                    $sql = mysqli_query($mysqli, "SELECT * FROM favorito WHERE id_usuario = '$id_usuario' AND id_livro = '$id_livro'");
                                                                    while ($result = mysqli_fetch_array($sql)){
                                                                        $id_favorito = $result['id_favorito'];
                                                                    }
                                                                ?>
                                                                    <form action="php/favoritar.php" method="post">
                                                                        <input type="text" name="sessao" value="index" style="display: none;">
                                                                        <input type="text" name="caminho" value="remover" style="display: none;">
                                                                        <input type="text" name="id_favorito" value="<?php echo "$id_favorito"?>" style="display: none;">
                                                                        <input type="text" name="id_usuario" value="<?php echo "$id_usuario"?>" style="display: none;">
                                                                        <input type="text" name="id_livro" value="<?php echo "$id_livro"?>" style="display: none;">
                                                                        <td>
                                                                            <button class='button-favorito'><i class='ri-heart-fill'></i></button>
                                                                        </td>
                                                                    </form>
                                                                <?php
                                                                }
                                                                else{
                                                                ?>
                                                                    <form action="php/favoritar.php" method="post">
                                                                        <input type="text" name="caminho" value="adicionar" style="display: none;">
                                                                        <input type="text" name="sessao" value="index" style="display: none;">
                                                                        <input type="text" name="id_favorito" value='NULL' style="display: none;">
                                                                        <input type="text" name="id_usuario" value="<?php echo "$id_usuario"?>" style="display: none;">
                                                                        <input type="text" name="id_livro" value="<?php echo "$id_livro"?>" style="display: none;">
                                                                        <td>
                                                                            <button class='button-favorito'><i class="ri-heart-add-fill"></i></i></button>
                                                                        </td>
                                                                    </form>
                                                                <?php
                                                                }
                                                            }
                                                        }
                                                echo "</tr>
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
    
    <br><br><br><br><br>

    <!-- Footer -->
    <?php include('include/import_footer.php'); ?>

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
    <?php include('include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html> 