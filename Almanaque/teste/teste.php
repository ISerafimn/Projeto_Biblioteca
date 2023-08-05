<?php
    include('php/conexao.php');
    //var_dump($_FILES['imagem']);
    //$name = $_FILES['imagem']['name'];
    $temp = $_FILES['imagem']['tmp_name'];
    $id = "2";
    $name = "$id.png";

    echo "$name";
    //var_dump($name);
    //var_dump($temp);

    $result = mysqli_query($mysqli, "INSERT INTO imagem (file_imagem) VALUES ('$name')");
    move_uploaded_file($temp, "./imagem/". $name);
    echo "<img src='imagem/".$name."'>";
?>