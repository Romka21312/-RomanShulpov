<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "Roman10.shulpov@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Оформление заказа";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Благодарим за заказ, с вами свяжется специалист</p>
