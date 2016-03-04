<?php
    $name     =   $_POST['nome'];
    $email    =   $_POST['email'];
    $subject  =   "PICT";
    $periodo  =   $_POST['periodo'];
    $opiniao1app1 = $_POST['opiniao1app1'];
    $opiniao2app1 = $_POST['opiniao2app1'];
    $opiniao3app1 = $_POST['opiniao3app1'];
    $opiniao4app1 = $_POST['opiniao4app1'];


    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers  = "From: $email\r\n";
    $headers .= "X-Mailer: PHP v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\n";


    $corpo = "Formulario enviado\n";
    $corpo .= "Nome: " . $name . "\n";
    $corpo .= "Email: " . $email . "\n";
    $corpo .= "Periodo: " . $periodo . "\n";
    $corpo .= "Sentiu falta de alguma coisa que facilitasse na navegação? " . $opiniao1app1 . "\n";
    $corpo .= "Visual do app: " . $opiniao2app1 . "\n";
    $corpo .= "O app é auto-explicativo: " . $opiniao3app1 . "\n";
    $corpo .= "Você achou o app útil? " . $opiniao4app1 . "\n";

    $email_to = "biaaml@hotmail.com";

    $status = mail($email_to, $subject, $corpo, $headers);

	if($status) {
		echo "<script> alert('Formulário enviado com sucesso!'); </script>";
	}
	else {
		echo "<script alert('Falha ao enviar o Formulário.'); </script>";
	}
	echo "<script> window.location.href = 'index.html'; </script>";
?>
