<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['description'];

if (!empty($phone)) {

    $result = mail("ooo_emailomsk@mail.ru", "Ермак: Сообщение с сайта",
        'Имя: ' . $name . "\r\n" .
        'Телефон: ' . $phone . "\r\n" .
        'Сообщение: ' . $message . "\r\n",
        "From: Сайт Ермак <info@ooo-ermakomsk.ru>\r\n"
        . "Reply-To: Сайт Ермак <info@ooo-ermakomsk.ru>\r\n"
        . "X-Mailer: PHP/" . phpversion());

    if ($result) echo json_encode(['status' => 'success']);
    else echo json_encode(['status' => 'fail']);

} else {
    echo json_encode(['status' => 'fail']);
}
