<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Consultar por Status</title>
    <style>
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

    <section class="containers" >
      <form  action="#" method="post" enctype="multipart/form-data" class="form" style="margin-top: 0px;">

            <div class="input-box">
            <h2 style="color: black;">Selecione o Status para Consultar</h2>
            <select name="id_status_movimentacao" class="select-box">
                    <option>Status:</option>
                        <?php
                            $sql = "SELECT * FROM status_movimentacao";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                            {
                                echo "<option value='".$row['id_status_movimentacao']."'>".$row['nome_status_movimentacao']."</option>";
                            }
                        ?>
                </select>
            </div>

        <button type="submit">Consultar</button>
      </form>
    </section>

        <br>
    
    <table>
        <?php
        
        if(isset($_POST['id_status_movimentacao'])){

        ?>
        <tr>
            <th class="atributo_th">Nome do Usuário e ID</th>
            <th class="atributo_th">Nome do Livro</th>
            <th class="atributo_th">Data</th>
            <th class="atributo_th">Status e ID Movimentação</th>
            <th class="id_th">Atualizar</th>
        </tr>

        <?php
        @$id_status_movimentacao = $_POST['id_status_movimentacao'];

        if ($id_status_movimentacao == ""){
        }
        else{

            $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'");
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
                                <button type='submit' name='Submit' style='border: none; background-color: transparent; color: #fff; cursor: pointer; '>
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
                                        <button type='submit' style='border: none; background-color: transparent; color: #fff; cursor: pointer;'>
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
                                    <button type='submit' class:'button' style='border: none; background-color: transparent; color: #fff; cursor: pointer;' >
                                        <i class='ri-edit-2-fill'></i>
                                    </button></td>
                                </form>";
                            }

                        }
                    
                }
        }
            
        ?>
    </table>
    <?php
        }
    ?>
    
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