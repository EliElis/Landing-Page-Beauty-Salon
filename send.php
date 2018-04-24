<?php

{
  $dt=date("d F Y, H:i:s"); // дата и время
  $mail="alisa.umnova@gmail.com"; // e-mail куда уйдет письмо
  $title="Заявка с сайта ".$_SERVER["SERVER_NAME"]; // заголовок(тема) письма
  $name=$_POST["name"];
  $email=$_POST["email"];
  $text=$_POST["text"];
 
  
  $mess="<b>Имя:</b> $name<br>";
  $mess.="<b>E-mail:</b> $email<br>";
  $mess.="<b>Комментарий:</b> $text<br>";
  $mess.="<b>Дата и Время:</b> $dt";

  $headers="MIME-Version: 1.0\r\n";
  $headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка
  $headers.="From: feedback@".$_SERVER["SERVER_NAME"]; // откуда письмо (необязательнакя строка)
  mail($mail, $title, $mess, $headers); // отправляем
ini_set('short_open_tag', 'On');
header('Refresh: 2; URL=index.html');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Спасибо за заявку! Салон-парикмахерская Дарьяна</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"> </head>

<body>
	<div class="container">
		<div class="bg">
			<header>
				<nav class="nav">
					<ul class="disabled">
						<li><a class="font">О нас</a></li>
						<li><a class="font">Услуги</a></li>
						<li><a class="font">Прайс лист</a></li>
						<li><a class="font">Сотрудники</a></li>
						<li><a class="font">Контакты</a></li>
					</ul>
				</nav>
				<div class="navLogo"> <img id="smallLogo" src="img/logo.png"> </div>
				<div class="navContact">
					<div class="navContactLeft"> <span class="navTel">8 (495) 775-775</span>
						<br> <span class="navAdress">подольск, “остров сокровищ”</span> </div>
					<div class="navIcons">
						<a href="#"><img src="img/instagram.png"></a>
						<a href="#"><img src="img/fb.png"></a>
						<a href="#"><img src="img/vk.png"></a>
					</div>
				</div>
			</header>
			<main id="thanks">
				<p class="mainSubTitle">Спасибо за заявку!</p>
				<p class="mainSubTitle">Наш менеджер свяжется с Вами в ближайшее время</p>
				
			</main>

		</div>

	</div>
	<script type="text/javascript">
setTimeout('location.replace("/index.html")', 2000);
</script> 
	</body>
</html>