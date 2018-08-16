<?php 
    if(sizeof($_POST)>1){
		$stmt = $pdo->query("SELECT email FROM user WHERE email='".$_POST['email']."' and senha='".$_POST['password']."'");
		while($row = $stmt->fetch()){
			if(!empty($row['email']) and sizeof($stmt->fetch())>0){
				$_SESSION["email"] = $_POST['email'];
				$_SESSION["senha"] = $_POST['password'];
				header('Location: home.php');
			}
		}
	}