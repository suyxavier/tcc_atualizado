<?php
if(sizeof($_POST)>1){
    if($_POST['senha'] == $_POST['confirmarSenha']){
        print_r($_POST);
        
    if($_POST['telefone']=="")	{
			$error[] = "Insira um telefone.";	
	}
        // else if($pcpf == "" and $pcnpj == ""){
        //     $error[] = "Coloque seu cpf ou cnpj";
        // }
		// else if($pmail=="")	{
		// 	$error[] = "Insira um endereco de email.";	
		// }
		// else if($ptelf=="")	{
		// 	$error[] = "Insira um número de telefone.";
		// }
		// else if($pnome=="")	{
		// 	$error[] = "Insira o nome completo.";
		// }
		// else if($pnacio=="nada")	{
		// 	$error[] = "Selecione nacionalidade.";
		// }
		// else if ($cpfvalido == false) {
		// 	$error[] = "Coloque seu cpf VALIDO";
		// }	    
            $query = "INSERT INTO user (tel, dt_nasc, nome, cpf, email, cep, senha, confir_senha, rua, numero, bairro)
                    VALUES ('".$_POST['telefone']."', '".$_POST['dataNascimento']."', '".$_POST['nome']."', ".$_POST['cpf'].", '".$_POST['email']."', '".$_POST['cep']."', '".$_POST['senha']."',  '".$_POST['confirmarSenha']."', '".$_POST['rua']."', '".$_POST['numero']."', '". $_POST['bairro']."');";
            $stmt = $pdo->query($query);
        }
        echo '<script language="javascript">';
        echo 'alert("usuário cadastrado com sucesso")';
        echo '</script>';
        header("location: index.php");
    // else{
    // //     echo '<script language="javascript">';
    // //     echo 'alert("senhas inválidas")';
    // //     echo '</script>';        
    // // }
}