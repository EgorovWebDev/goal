<?php 

$email = $_POST['email'];
// var_dump($_POST);
// var_dump($email);

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ivori1991@mail.ru';                 // Наш логин
$mail->Password = 'blackhorse1991';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->setFrom('ivori1991@mail.ru', 'goal@mail.ru');   // От кого письмо 
$mail->addAddress($email, 'san jose');     // кому письмо

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Подписка на скидки от GOAL!';
$mail->Body    = '
	Благодарим за подписку '.$email.' на скидки <br> 
	Мы будем уведовлять вас о распродажах и скидках <br>';
$mail->AltBody = 'С уважением GOAL!';

if(!$mail->send()) {
   echo 'Сообщение не отправлено ';
   echo 'Ошибка '.$mail->ErrorInfo;
} else {
    header ('location: ../');
}

?>