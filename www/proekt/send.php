<strong><?
$send = $_POST['button'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$text = $_POST['text'];
if ($send != "button"){
 
$to = "rapemi77@mail.ru";                 // вставте свой емаил
$subject = "Письмо с сайта YourSite.ru";        
$mailheaders .="Reply-To: $mailnn";
 
$msg .= "Имя отправителя:ntt$namen";
$msg .= "E-mail отправителя:ntt$mailn";
$msg .= "Сообщение: n$textnnn";
 session_start();
 if($_POST['capcha'] != $_SESSION['capcha'])
 {echo "<center>Текст із зображення введено не вірно!</center>";
	echo '<center>Через кілька секунд ви будете перенаправлені на попередню сторінку для повторного введення даних.</center>';

 header('Refresh: 5; URL=/contact.php');}
else{
 if(!empty($name) && !empty($mail) && !empty($text)) {
        
mail ($to, $subject, $msg, $mailheaders);
 
    $mess= "Шановний $name, ваше повідомлення було успішно надіслане."; 
 
 echo "<center>$mess</center> ";

header('Refresh: 3; URL=/index.php'); 
echo '<center>Через кілька секунд ви будете перенаправлені на головну сторінку.</center>'; 
exit; 
    } else { 
	header('Refresh: 5; URL=/contact.php');
    echo '<center>Дані не введено.</center>'; 
	echo '<center>Через кілька секунд ви будете перенаправлені на попередню сторінку для коригування даних.</center>'; 
}
}
}
?></strong>
