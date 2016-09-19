 <?php

$sendto = "orhandavidov@gmail.com";
  $contactname = $_POST['contact-name'];
  $contactemailtel = $_POST['contact-email-tel'];
  $textarea = $_POST['textarea'];


 

  $subject = "Новое сообщение с сайта";
  $headers = "From: " . strip_tags($usermail) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 

  $msg = "<html><body>";
  $msg .= "<p><strong>Имя:</strong> ".$contactname."</p>\r\n";
  $msg .= "<p><strong>Email или телефон:</strong> ".$contactemailtel."</p>\r\n";
  $msg .= "<p><strong>Сообщение:</strong> ".$textarea."</p>\r\n";
  $msg .= "</body></html>";
 
// отправка сообщения
  if(@mail($sendto, $subject, $msg, $headers)) {
  echo "<center><img src='images/spasibo.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
  } else {
  echo "<center><img src='images/ne-tpravleno.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
  }
 
?>
