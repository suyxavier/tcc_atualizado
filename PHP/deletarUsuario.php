<?php
if(isset($_GET['deletar'])){
    $query = "DELETE FROM user WHERE email='".$_SESSION['email']."'";

    $stmt = $pdo->query($query);

    echo '<script language="javascript">';
    echo 'alert("usuário deletado com sucesso")';
    echo '</script>';

    header('Location: index.php');    
}