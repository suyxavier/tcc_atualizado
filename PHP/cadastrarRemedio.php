<?php
if(sizeof($_POST)>1){

    print_r($_POST);
    $query = "INSERT INTO inventario (nome_remedio, qtd, cod_posto)
            VALUES ('".$_POST['nome_r']."', '".$_POST['qtd']."','".$_GET['posto']."');";
    $stmt = $pdo->query($query);

    echo '<script language="javascript">';
    echo 'alert("remedio cadastrado com sucesso")';
    echo '</script>';
}