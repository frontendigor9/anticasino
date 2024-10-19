<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    

    $mail = new PHPMailer(true);
    $mail->Charset = 'UTF-8';
    $mail->setLanguage('ru','phpmailer/language/');
    $mail->IsHTML(true);

    $mail->setFrom('s.i.y.17321@gmail.com', 'TESTOVYj test');
    $mail->addAddress('barklay.studio@gmail.com');
    $mail->Subject = 'ПРивет, это тестовый тест';

    $name = $_POST['name'];
    $email = $_POST['emeil'];
    $phone = $_POST['phone'];
    $message = $_POST['text'];

    $body = '<h1>Встречайте супер письмо</h1>';
    $body = $name . '' .$email . '' . $phone . '' . $message;
    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'данные отправлены!';
    }

    $response = ['message' => $message];


    header('Content-type: application/json');
    echo json_encode($response);

    ?>

    // $name = $_POST["name"];
    // $email = $_POST["emeil"];
    // $phone = $_POST["phone"];
    // $message = $_POST["text"];

    // $body = $name . '' .$email . '' . $phone . '' . $message;
    // $theme = ['Заявка с формы'];

    // $mail->addAddress("s.i.y.17321@gmail.com");
    // $mail->Subject = $theme;
    // $mail->Body = $body;

    // $mail->send();

