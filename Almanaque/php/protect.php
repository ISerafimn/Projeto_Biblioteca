<?php
// sistema de verificação de login/start de sessão.
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_sessao'])) {
    die("Você não pode acessar essa página, porque não está logado.");
}

?>