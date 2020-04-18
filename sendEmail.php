<?php 
	$destinatario = "epsitijuca@gmail.com";

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['message'];
	$assunto = 'Email do site';
	 // monta o e-mail na variavel $body

	$body = "===================================" . "\n";
	$body = $body . "FALE CONOSCO" . "\n";
	$body = $body . "===================================" . "\n\n";
	$body = $body . "Nome: " . $nome . "\n";
	$body = $body . "Email: " . $email . "\n";
	$body = $body . "Mensagem: " . $mensagem . "\n\n";
	$body = $body . "===================================" . "\n";

	echo $nome.$email.$telefone.$mensagem;

	$headers =  "Content-Type:text/html; charset=UTF-8\n";
	$headers = $headers."From: $email\r\n";
	  
	if(mail($destinatario, $assunto , $body, $headers))
		$emailSended= true;
	else
		 $emailSended= false;

	header("location:contato.php?emailSended=false");
?>