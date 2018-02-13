<?php
if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND !empty($_POST['phone'])){

	$theme='новое сообщение';

	$letter = 'Данные сообщения:\r\n';
	$letter .= 'Имя: '.$_POST['name'].'\r\n';
	$letter .= 'Email: '.$_POST['email'].'\r\n';
	$letter .= 'Телефон: '.$_POST['phone'].'\r\n';
	$letter .= 'Сообщение: '.$_POST['message'].'\r\n';

	if(mail('sergeyromanenko911@gmail.com', $theme, $letter,)){
		header('Location:/thank.html');
	}else{
		header('Location:/error.html');
	};
}else{
	header('Location:/index.html')
}