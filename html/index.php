<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('ee.da.83@mail.ru')
    ->setPassword('kJ73sa6iu$/58(S')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['ee.da.83@mail.ru' => '123456'])
    ->setTo(['dinazyver@gmail.com'])
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);