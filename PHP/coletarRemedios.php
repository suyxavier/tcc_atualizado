<?php
    $query = "SELECT * FROM inventario WHERE cod_posto = $posto"; 
    $stmt = $pdo->query($query);
    $remedios = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>