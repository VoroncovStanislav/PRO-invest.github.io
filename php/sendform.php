<?php 
$name = trim($_POST['name']); 
$phone = trim($_POST['phone']); 
$question = trim($_POST['question']); 
$fromMail = 'info@site.ru'; //Почта отправителя (в домене почты должен быть адрес вашего сайта)
$fromName = 'Поступила заявка с сайта'; //Заголовок письма
$emailTo = 'stasvoroncov2004@gmail.com'; //Ваша почта
$subject = 'Форма обратной связи PRO-инвест.ru'; 
$subject = '=?utf-8?b?'. base64_encode($subject) .'?='; 
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n"; 
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n"; 

// Содержимое письма 
$body = "Получено письмо с сайта \nИмя: $name\nТелефон: $phone\nКомментарий: $question"; 

// сообщение будет отправлено в случае, если поле с номером телефона не пустое 
if (strlen($phone) > 0) { 
$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail ); 
return;
} 

?>