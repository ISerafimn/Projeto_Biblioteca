<?php
// desconector da sessão login atual
if(!isset($_SESSION)) {
    session_start();
}

session_destroy();
header("Location: ../index.php");

?>