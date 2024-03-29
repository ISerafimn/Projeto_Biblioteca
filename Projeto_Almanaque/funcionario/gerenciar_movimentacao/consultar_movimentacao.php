<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    $consultar = $_SESSION['consultar'];
include('../../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Consultar Movimentação</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .info-container {
            font-size: 14px;
            color: black;
            margin: auto;
            padding: 10px;  
            display: flex;
            margin: 10px;
            background-color: white;
            border-radius: 10px;
        }
        .ri-check-double-fill{
            color: #276daf;
        }
        .ri-edit-2-fill:hover{
            color: #276daf;
        }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_movimentacao_gerenciar.php'); ?>
    
    <br>

<h2 style="text-align: center; margin-bottom: 12px;">Digite para Consultar</h2>

<form action="#" method="post">
    <div class="search-icon">
        <input type="text" placeholder="Pesquisar!" name="valor" required>
        <button type="submit" class="icon"><i class="ri-search-line"></i></button>
    </div>
</form>

<br>
<?php
@$var = $_POST['valor'];
if ($var == ""){
}
else{
?>
<div class="info-container">
    <table>
        <tr>
            <th class="atributo_th">Nome do Usuário e ID</th>
            <th class="atributo_th">Nome do Livro</th>
            <th class="atributo_th">Data</th>
            <th class="atributo_th">Status e ID Movimentação</th>
            <th class="id_th">Atualizar</th>
        </tr>
    
    
<?php
    if($consultar == "id_usuario"){

        $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao id_usuario WHERE id_usuario = '$var'");
        while ($result = mysqli_fetch_array($sql))
        
        { 
                    $id_movimentacao = $result['id_movimentacao'];
                    $id_usuario = $result['id_usuario'];
                    $id_livro = $result['id_livro'];
                    $id_status_movimentacao = $result['id_status_movimentacao'];
                    $data_saida_movimentacao = $result['data_saida_movimentacao'];
                    $data_limite_movimentacao = $result['data_limite_movimentacao'];
                    $data_volta_movimentacao = $result['data_volta_movimentacao'];

                    $icon = "";
                    if($data_saida_movimentacao == ""){
                        $icon = " - ";
                    }else{
                        $icon = " Até ";
                    }
                    $icon2 = "";
                    if($data_volta_movimentacao != ""){
                        $icon2 = "<br> entregue: ";
                    }

                        $sql2 = "SELECT * FROM usuario id_usuario WHERE id_usuario = '$id_usuario'";
                        $resultad2 = $mysqli->query($sql2);
                    
                        while ($row = mysqli_fetch_array($resultad2))
                        { 
                            echo "<tr><td class='atributo_td'><form method='post' action='movimentacao_aberto.php'>
                            <input name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                                <button type='submit' name='Submit' style='border: none; background-color: transparent; cursor: pointer; '>
                                    ".$row['nome_usuario']." (".$id_usuario.")
                                </button>
                            </form></td>";
                        }
                        
                        $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                        $resultad3 = $mysqli->query($sql3);
                    
                        while ($row3 = mysqli_fetch_array($resultad3))
                        { 
                            echo "<td class='atributo_td'>".$row3['nome_livro']."</td>";
                        }

                        echo "<td class='atributo_th'>".$data_saida_movimentacao, $icon, $data_limite_movimentacao, $icon2, $data_volta_movimentacao."</td>";

                        $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                        $resultad4 = $mysqli->query($sql4);
                    
                        while ($row4 = mysqli_fetch_array($resultad4))
                        { 
                        
                            echo "<td class='atributo_td'>".$row4['nome_status_movimentacao']." (".$id_movimentacao.")</td>";

                            if($id_status_movimentacao == 4){
                    
                                echo"<form action='php/variaveis_atualizar_movimentacao.php' method='post'>
                                        <input type='text' value='".$id_usuario."' name='id_usuario' style='display:none;'>
                                        <input type='text' value='id_usuario' name='atualizar_por' style='display:none;'>
                                        <input type='text' value='saida' name='caminho' style='display:none;'>
                                        <td class='id_td'>
                                        <button type='submit' style='border: none; background-color: transparent; cursor: pointer;'>
                                            <i class='ri-edit-2-fill'></i>
                                        </button></td>
                                    </form>";
                            }
                            elseif($id_status_movimentacao == 3){
                                echo "<td class='id_td'><i class='ri-check-double-fill'></i></td>";
                            }
                            else{
    
                                echo"<form action='php/variaveis_atualizar_movimentacao.php' method='post'>
                                    <input type='text' value='".$id_usuario."' name='id_usuario' style='display:none;'>
                                    <input type='text' value='id_usuario' name='atualizar_por' style='display:none;'>
                                    <input type='text' value='entrada' name='caminho' style='display:none;'>
                                    <td class='id_td'>
                                    <button type='submit' class:'button' style='border: none; background-color: transparent; cursor: pointer;' >
                                        <i class='ri-edit-2-fill'></i>
                                    </button></td>
                                </form>";
                            }
                        }
        }
    }
    elseif($consultar == "nome_usuario"){

        $sql = "SELECT * FROM usuario nome_usuario WHERE nome_usuario LIKE '%$var%'";
        $result2 = $mysqli->query($sql);
        
        while ($row = mysqli_fetch_array($result2))
        { 
            $id_usuario = $row['id_usuario'];

            $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao id_usuario WHERE id_usuario = '$id_usuario'");
            while ($result = mysqli_fetch_array($sql))
            
            { 
                        $id_movimentacao = $result['id_movimentacao'];
                        $id_usuario = $result['id_usuario'];
                        $id_livro = $result['id_livro'];
                        $id_status_movimentacao = $result['id_status_movimentacao'];
                        $data_saida_movimentacao = $result['data_saida_movimentacao'];
                        $data_limite_movimentacao = $result['data_limite_movimentacao'];
                        $data_volta_movimentacao = $result['data_volta_movimentacao'];
    
                        $icon = "";
                        if($data_saida_movimentacao == ""){
                            $icon = " - ";
                        }else{
                            $icon = " Até ";
                        }
                        $icon2 = "";
                        if($data_volta_movimentacao != ""){
                            $icon2 = "<br> entregue: ";
                        }
    
                            $sql2 = "SELECT * FROM usuario id_usuario WHERE id_usuario = '$id_usuario'";
                            $resultad2 = $mysqli->query($sql2);
                        
                            while ($row = mysqli_fetch_array($resultad2))
                            { 
                                echo "<tr><td class='atributo_td'><form method='post' action='movimentacao_aberto.php'>
                                <input name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                                    <button type='submit' name='Submit' style='border: none; background-color: transparent; cursor: pointer; '>
                                        ".$row['nome_usuario']." (".$id_usuario.")
                                    </button>
                                </form></td>";
                            }
                            
                            $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                            $resultad3 = $mysqli->query($sql3);
                        
                            while ($row3 = mysqli_fetch_array($resultad3))
                            { 
                                echo "<td class='atributo_td'>".$row3['nome_livro']."</td>";
                            }
    
                            echo "<td class='atributo_th'>".$data_saida_movimentacao, $icon, $data_limite_movimentacao, $icon2, $data_volta_movimentacao."</td>";
    
                            $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                            $resultad4 = $mysqli->query($sql4);
                        
                            while ($row4 = mysqli_fetch_array($resultad4))
                            { 
                            
                                echo "<td class='atributo_td'>".$row4['nome_status_movimentacao']." (".$id_movimentacao.")</td>";

                            }


                            if($id_status_movimentacao == 4){
                    
                                echo"<form action='php/variaveis_atualizar_movimentacao.php' method='post'>
                                        <input type='text' value='".$id_usuario."' name='id_usuario' style='display:none;'>
                                        <input type='text' value='id_usuario' name='atualizar_por' style='display:none;'>
                                        <input type='text' value='saida' name='caminho' style='display:none;'>
                                        <td class='id_td'>
                                        <button type='submit' style='border: none; background-color: transparent; cursor: pointer;'>
                                            <i class='ri-edit-2-fill'></i>
                                        </button></td>
                                    </form>";
                            }
                            elseif($id_status_movimentacao == 3){
                                echo "<td class='id_td'><i class='ri-check-double-fill'></i></td>";
                            }
                            else{
    
                                echo"<form action='php/variaveis_atualizar_movimentacao.php' method='post'>
                                    <input type='text' value='".$id_usuario."' name='id_usuario' style='display:none;'>
                                    <input type='text' value='id_usuario' name='atualizar_por' style='display:none;'>
                                    <input type='text' value='entrada' name='caminho' style='display:none;'>
                                    <td class='id_td'>
                                    <button type='submit' class:'button' style='border: none; background-color: transparent; cursor: pointer;' >
                                        <i class='ri-edit-2-fill'></i>
                                    </button></td>
                                </form>";
                            }
            }
        }
    }
}
?>
    </table>
</div>
    
    <br><br><br>

    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>