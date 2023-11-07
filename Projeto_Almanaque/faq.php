<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>FAQ</title>
    <style>
    section{
        min-height: 100vh;
        width: 80%;
        margin: 0 auto; 
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .titulo{
        font-size: 3rem;
        margin: 2rem 0rem;
        color: #276daf;
    }

    .faq{
        max-width: 700px;
        margin-top: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #276daf;
        cursor: pointer;
    }

    .question{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .question h3 {
        font-size: 1.8rem;
    }

    .responder{
        max-height: 0;
        overflow: hidden;
        transition: max-height 1.4s ease;
    }

    .responder p {
        padding: 1rem;
        line-height: 1.6;
    }

    .faq.active .responder{
        max-height: 300px;
        animation: fade 1s ease-in-out;
    }

    .faq.active i {
        transform: rotate(180deg);
    }

    i {
        transition: transform 0.5s ease-in;
    }

    @keyframes fade {
        from{
            opacity: 0;
            transform:translateY(-10px) ;
        }
        to{
            opacity: 1; 
            transform: translateY(0px);
        }
    }

    @media screen and (max-width: 900px) {
        .faq {
        grid-auto-columns: calc((100% / 2) - 9px);
        }
    }
    </style>
</head>
<body>
    <?php include('include/import_menu.php'); ?>

    <br><br><br><br>

    <section>
        <h2 class="titulo">FAQ</h2>

        <div class="faq">
            <div class="question">
                <h3>Que tipos de materiais eu encontrarei no acervo da Biblioteca Almanaque?</h3>

                <i class="ri-arrow-down-s-line" viewBox="0 0 42 25"></i>
            </div>
            <div class="responder">
                <p>
                    O acervo da Biblioteca Almanaque é especializado na área do gerenciamento de nossa biblioteca Economia, Direito e Ciências Sociais, e é composto de livros, periódicos, teses e dissertações, vídeos, que podem estar disponíveis tanto em formato impresso quanto digital.
                </p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Como faço para acessar o Catálogo da Biblioteca em meu computador ou celular?</h3>

                <i class="ri-arrow-down-s-line" viewBox="0 0 42 25"></i>
            </div>
            <div class="responder">
                <p>
                    infelizmente ainda nao possuímos um aplicativo no sistema android/IOS, porem em nosso sistema web você terá uma seleção de genêros literários em seu canto superior esquerdo com todo o nosso acervo disponível e organizado para você!
                </p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Posso renovar o prazo de empréstimo?</h3>

                <i class="ri-arrow-down-s-line" viewBox="0 0 42 25"></i>
            </div>
            <div class="responder">
                <p>
                    Sim, desde que não existam solicitações de reserva, não haja pendências de atraso ou multa e que o limite de 7 (sete) renovações online consecutivas não seja ultrapassado.
                </p>
            </div>
        </div>
    </section>
    <script src="js/faq.js"></script>


    <br><br><br>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>