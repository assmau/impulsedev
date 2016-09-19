<?php

$sendto = "orhandavidov@gmail.com";
  $username = $_POST['name'];
  $usertel = $_POST['phone']; 


 // сохраняем в переменную данные полученные из поля c адресом электронной почты
// проверяем наличие данных в чекбоксе и сохраняем их
  $adapt = '';
    if (empty($_POST["adapt"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt"]) && is_array($_POST["adapt"]))
    {
       $adapt = implode(" ", $_POST["adapt"]);
    }


      $adapt2 = '';
    if (empty($_POST["adapt-tw"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-tw"]) && is_array($_POST["adapt-tw"]))
    {
       $adapt2 = implode(" ", $_POST["adapt-tw"]);
    }



    $adapt3 = '';
    if (empty($_POST["adapt-th"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-th"]) && is_array($_POST["adapt-th"]))
    {
       $adapt3 = implode(" ", $_POST["adapt-th"]);
    }

    $adapt4 = '';
    if (empty($_POST["adapt-fo"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-fo"]) && is_array($_POST["adapt-fo"]))
    {
       $adapt4 = implode(" ", $_POST["adapt-fo"]);
    }

    $adapt5 = '';
    if (empty($_POST["adapt-fi"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-fi"]) && is_array($_POST["adapt-fi"]))
    {
       $adapt5 = implode(" ", $_POST["adapt-fi"]);
    }


    $adapt6 = '';
    if (empty($_POST["adapt-six"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-six"]) && is_array($_POST["adapt-six"]))
    {
       $adapt6 = implode(" ", $_POST["adapt-six"]);
    }


    $adapt7 = '';
    if (empty($_POST["adapt-sev"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-sev"]) && is_array($_POST["adapt-sev"]))
    {
       $adapt7 = implode(" ", $_POST["adapt-sev"]);
    }

    $adapt8 = '';
    if (empty($_POST["adapt-ei"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-ei"]) && is_array($_POST["adapt-ei"]))
    {
       $adapt8 = implode(" ", $_POST["adapt-ei"]);
    }

    $adapt9 = '';
    if (empty($_POST["adapt-ni"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-ni"]) && is_array($_POST["adapt-ni"]))
    {
       $adapt9 = implode(" ", $_POST["adapt-ni"]);
    }


    $adapt10 = '';
    if (empty($_POST["adapt-ten"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-ten"]) && is_array($_POST["adapt-ten"]))
    {
       $adapt10 = implode(" ", $_POST["adapt-ten"]);
    }


    $adapt11 = '';
    if (empty($_POST["adapt-el"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-el"]) && is_array($_POST["adapt-el"]))
    {
       $adapt11 = implode(" ", $_POST["adapt-el"]);
    }


    $adapt12 = '';
    if (empty($_POST["adapt-twe"]))
    {
       // $adapt = "Адаптивный дизайн не нужен";
    }
    elseif (!empty($_POST["adapt-twe"]) && is_array($_POST["adapt-twe"]))
    {
       $adapt12 = implode(" ", $_POST["adapt-twe"]);
    }
 

  $subject = "Новое сообщение с сайта";
  $headers = "From: " . strip_tags($usermail) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 

  $msg = "<html><body>";
  $msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
  $msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
  $msg .= "<span>".$adapt."</span><br>\r\n"; 
  $msg .= "<span>".$adapt2."</span><br>\r\n";
  $msg .= "<span>".$adapt3."</span><br>\r\n";
  $msg .= "<span>".$adapt4."</span><br>\r\n";
  $msg .= "<span>".$adapt5."</span><br>\r\n";
  $msg .= "<span>".$adapt6."</span><br>\r\n";
  $msg .= "<span>".$adapt7."</span><br>\r\n";
  $msg .= "<span>".$adapt8."</span><br>\r\n";
  $msg .= "<span>".$adapt9."</span><br>\r\n";
  $msg .= "<span>".$adapt10."</span><br>\r\n";
  $msg .= "<span>".$adapt11."</span><br>\r\n";
  $msg .= "<span>".$adapt12."</span><br>\r\n";
  $msg .= "</body></html>";
 
// отправка сообщения
  if(@mail($sendto, $subject, $msg, $headers)) {
  echo "<center><img src='images/spasibo.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
  } else {
  echo "<center><img src='images/ne-tpravleno.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
  }
 
?>
