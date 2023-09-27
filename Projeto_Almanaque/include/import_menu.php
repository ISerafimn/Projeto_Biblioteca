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
                <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Pesquise Aqui!" type="text">
                    <button type="submit" class="icon"><i class="ri-search-line"></i></button>
                </div>
            </form>                
            <a href="usuario_login.php" class="user"><i class="ri-user-fill"></i>Entrar</a>
            <a href="usuario_cadastro.php">Cadastrar</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/card-script.js"></script>
    <!-- JavaScript Link-->
    <script type="text/javascript" src="js/script.js"></script>