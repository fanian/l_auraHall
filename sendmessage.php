<?php
$sendto   = "diana.aurahall@gmail.com"; //Адреса, куда будут приходить письма
$phone  = $_POST['phone'];
$name  = $_POST['name'];
$email  = $_POST['email'];
$date = $_POST['date'];
$time_start = $_POST['start'];
$time_finish = $_POST['finish'];
// Формирование заголовка письма
$subject  = "Новая заявка";
$headers  = "From: " . strip_tags($name) . "\r\n";
$headers .= "Reply-To: ". strip_tags($name) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на бронирование</h2>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Дата:</strong> ".$date."</p>\r\n";
$msg .= "<p><strong>Время начала:</strong> ".$time_start."</p>\r\n";
$msg .= "<p><strong>Время окончания:</strong> ".$time_finish."</p>\r\n";
$msg .= "<p><strong>Реферальная ссылка:</strong> ".$_COOKIE['referallink']."</p>\r\n";
$msg .= "<p><strong>Площадка:</strong> ".$_COOKIE['utmlink']."</p>\r\n";
$msg .= "<p><strong>Ключевое слово:</strong> ".$_COOKIE['termlink']."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>