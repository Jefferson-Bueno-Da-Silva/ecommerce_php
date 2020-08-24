<?php

if(isset($_post['email']) && !empty($_post['email']))
{
	$nome = addcslashes($_post['name']);
	$email = addcslashes($_post['email']);
	$subject = addcslashes($_post['subject']);
	$mensagem = addcslashes($_post['message']);

	$to = "ericakekabueno@gmail.com";
	$assunto = "CONTATO LOJA";
	$body = "Nome: ". "\r\n".
			"Email: " . "\r\n".
			"Mensagem: " . "\r\n";
	$header = "From: ericakekabueno@gmail.com" . "\r\n" . "Reply-To: " . $email. "\r\n" . "X=Mailer:PHP/" . phpversion();


	if(mail($to,$subject,$body,$header))
	{
		include 'confirmacao.php';

	}else
	{
		include 'error.php';
	}
}

?>