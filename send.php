<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'nurlibay.ibr.0002@gmail.com'; // Логин на почте
    $mail->Password   = '770005poiqweIBR'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('nurlibay.ibr.0002@gmail.com', 'Ибрахим Нурлибаев'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('nurlibev@mail.ru');  

    // Переменные, которые отправляет пользователь
    if (isset($_POST['submit_3'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Формирование самого письма
    $title_3 = "Новое обращение Best Tour Plan";
    $body_3 = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br>
    <b>Email:</b>$email<br><br>
    <b>Сообщение:</b><br>$message
    ";

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title_3;
    $mail->Body = $body_3; 

    header('Location: thankyou.html');
    }

    // Переменные, которые отправляет пользователь
    if (isset($_POST['submit_1'])) {
    $email = $_POST['email'];

    // отправка почты
    $title_1 = "Новое обращение Best Tour Plan";
    $body_1 = "
    <h2>User email</h2>
    <b>Email:</b><br>$email
    ";

    // скрипт для отправки почты
    $mail->isHTML(true);
    $mail->Subject = $title_1;
    $mail->Body = $body_1; 

    // Отображение результата
    header('Location: thankyou.html');
    }


    // Переменные, которые отправляет пользователь
    if (isset($_POST['submit_2'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Формирование самого письма
    $title_2 = "Новое обращение Best Tour Plan";
    $body_2 = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Сообщение:</b><br>$message
    ";

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title_2;
    $mail->Body = $body_2; 

    header('Location: thankyou.html');
    }

    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
