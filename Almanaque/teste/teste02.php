<?php

include('php/conexao.php');

$sql = mysqli_query($mysqli, "SELECT  *   FROM  imagem WHERE id_imagem = 14" );
        while ($result = mysqli_fetch_array($sql))

            {
                echo $id_imagem = $result['id_imagem'];
                echo $file_imagem = $result['file_imagem'];



            }
            $hoje = date('d/m/Y'); echo $hoje;

            $filename = "imagem/2.png";

            unlink('imagem/2.png');

?>



