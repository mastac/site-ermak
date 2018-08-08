<?php

// Pear Mail Library
require_once "/home/master/pear/share/pear/Mail.php";

$from = '<mastac777@gmail.com>';
$to = '<drobotov@c-west.ru>';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
    'host' => 'ssl://smtp.gmail.com',
    'port' => '465',
    'auth' => true,
    'username' => 'drobotoff@gmail.com',
    'password' => 'xxxxxx'
));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}