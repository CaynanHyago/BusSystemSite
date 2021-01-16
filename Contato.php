<?php
	//TRATAMENTO DAS VARIAVEIS
	$name = 'arquivo.txt';
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];
	
	$mensagem1 = '';
	
	if(file_exists($name)){
		$file = fopen($name, "w+");
		fwrite($file, $_POST["nome"] . ",");
		fwrite($file, $_POST["email"] . ",");
		fwrite($file, $_POST["mensagem"] . "\r\n");
		fclose($file);
		$mensagem1 = "<script> alert('Enviado com sucesso'); </script>";
	//AKI O EMAIL NÃO CONTEM O @ OU O .
	}else{
		$file = fopen($name,"a+");
		fwrite($file, $_POST["nome"] . ", ");
		fwrite($file, $_POST["email"] . ", ");
		fwrite($file, $_POST["mensagem"] . "\r\n");
		fclose($file);
		$mensagem1 = "<script> alert('Enviado com sucesso'); </script>";		
	}

	header("Location: Contato.html? Mensagem = ok");
?>