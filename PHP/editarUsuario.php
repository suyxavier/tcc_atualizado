<?php
if(sizeof($_POST)>1){
    $query = "UPDATE user
                SET tel = '".$_POST['telefone']."', nome = '".$_POST['nome']."', email = '".$_POST['email']."', dt_nasc = '".$_POST['dataNascimento']."', cep = '".$_POST['cep']."', bairro = '".$_POST['bairro']."', rua = '".$_POST['rua']."', numero = '".$_POST['numero']."'
            WHERE email='".$_SESSION['email']."';";

    $stmt = $pdo->query($query);

    echo '<script language="javascript">';
    echo 'alert("usuário editado com sucesso")';
    echo '</script>';
    header("location: home.php");
}