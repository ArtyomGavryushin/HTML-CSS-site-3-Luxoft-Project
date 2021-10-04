<?
	$name = $_POST["int1"];
	$email = $_POST["int2"];
	$tel = $_POST["int3"];
	$classArea = $_POST["int4"];

	mail("divan2612@mail.ru", "Сообщение от формы,с сайта", "Имя: ". $name ."\nПочта: " . $email ."\nТелефон: " . $tel ."\nСообщение: " . $classArea) ;
	mail($email, "Огромное спасибо, что выбрали наш сервис!", "Ваше сообщение отправлено,позже с вами свяжется администратор.");
	header("Location: http://www.coddybackend.com/ArtemGavryushin/");

?> 