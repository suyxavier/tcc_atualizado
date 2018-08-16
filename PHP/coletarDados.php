<?php
    $query = "SELECT * FROM user WHERE email='".$_SESSION['email']."';"; 
    $stmt = $pdo->query($query);
    $usuario = $stmt->fetch()
?>