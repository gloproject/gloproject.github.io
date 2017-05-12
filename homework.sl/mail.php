<?php
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

//Тут указываем на какой ящик посылать письмо
$to = "yusya_9@mail.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Форма, которую заполнил пользователь: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
Пароль: ".htmlspecialchars($password);
// Отправляем письмо при помощи функции mail();
$headers = "From: homework.sl <mail@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>