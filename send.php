<?php

$number = $_POST['number'];

$email = $_POST['email'];

$number = htmlspecialchars($number);

$email = htmlspecialchars($email);

$number = urldecode($number);

$email = urldecode($email);

$fio = trim($number);

$email = trim($email);







if (mail("example@mail.ru", "Заявка с сайта", "Number:".$number.". E-mail: ".$email ,"From: v02178786@gmail.com \r\n"))

 {     echo "сообщение успешно отправлено";

} else {

    echo "при отправке сообщения возникли ошибки";

}?>
