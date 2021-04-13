<?php

$login = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$login = htmlspecialchars($login);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);

$login = urldecode($login);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);

$login = trim($login);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);

if (mail("kurakov99@gmail.com",
         "Новое письмо с сайта",
         "Имя: " .$login. "\n".
         "E-mail: " .$email. "\n".
         "Телефон: " .$phone. "\n".
         "Сообщение: " .$message,
         "From: no-reply@mydomain.ru \r\n")
   
   ) {
    echo ('Письмо успешно отправлено!');
} 

else {
    echo ('Ошибка отправки!');
}

?>
