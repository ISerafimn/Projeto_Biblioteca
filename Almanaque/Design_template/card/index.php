<!DOCTYPE html>
    <!-- Coding by CodingLab | www.codinglabweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Card Slider</title>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/card-slider.css">
                                        
    </head>
    <body style="background-color: black;">
        <div class="slide-container swiper">
            <div class="slide-content"><div class='card-wrapper swiper-wrapper'>
            <?php
            include('../../include/conexao.php');
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
                                        <span class='overlay'></span>

                                        <div class='card-image'>
                                            <img src='../../imagens/livro_capa/".$row['url_imagem_livro']."' class='card-img'>
                                        </div>
                                    </div>

                                    <div class='card-content'>
                                        <h2 class='name'>".$row['nome_livro']."</h2>
                                        <p class='description'>".$nome_autor."</p>
                                        <button class='button'>Retirar</button>
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

    </body>

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/card-script.js"></script>
</html>