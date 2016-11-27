<?php

require_once 'MailSender.php';

$email = array(
    'email' => 'demo@site.com',
    'name'  => 'Имя',
);
$subject = 'Тестовое письмо';
$message = '<p>Это текст тестового письма.</p>';
$unsub = 'http://site.com/';

MainSender::send($email, $subject, $message, $unsub);