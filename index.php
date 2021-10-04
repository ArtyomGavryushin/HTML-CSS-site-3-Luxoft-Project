<?
	$name = $_POST["int1"];
	$email = $_POST["int2"];
	$tel = $_POST["int3"];
	$classArea = $_POST["int4"]

	mail("divan2612@mail.ru", "Привет", "Имя: ". $name ."\nПочта: " . $email ."\nТелефон: " . $tel ."\nСообщение: " . $classArea) ;
	header("Location: http://www.coddybackend.com/ArtemGavryushin/");

?> 