 <?php

$sendto = "orhandavidov@gmail.com";
  $namefield = $_POST['namefield'];
  $phonefield = $_POST['phonefield']; 


 

  $subject = "Новое сообщение с сайта";
  $headers = "From: " . strip_tags($usermail) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 

  $msg = "<html><body>";
  $msg .= "<p><strong>Имя:</strong> ".$namefield."</p>\r\n";
  $msg .= "<p><strong>Телефон:</strong> ".$phonefield."</p>\r\n";
  $msg .= "</body></html>";
 
// отправка сообщения
  if(@mail($sendto, $subject, $msg, $headers)) {
  echo "<center><img src='images/spasibo.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
  } else {
  echo "<center><img src='images/ne-tpravleno.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
  }
 
?>
