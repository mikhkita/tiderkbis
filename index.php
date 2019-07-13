<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/base.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
</head>
<body>
	<? include "header.php"; ?>
	<div class="b-main-slider">
		<div class="b-slider-item" style="background-image: url('i/main-back.jpg');">
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Займы на любые цели</h2>
					<div class="b-slider-item-text">Сменить обстановку, отправиться в путешествие  или сделать что-то, о чем вы давно мечтали</div>
					<a href="#" class="b-btn">Оформить заявку</a>
				</div>
			</div>
		</div>
		<div class="b-slider-item" style="background-image: url('i/main-back.jpg');">
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Займы на любые цели</h2>
					<div class="b-slider-item-text">Сменить обстановку, отправиться в путешествие  или сделать что-то, о чем вы давно мечтали</div>
					<a href="#" class="b-btn">Оформить заявку</a>
				</div>
			</div>
		</div>
		<div class="b-slider-item" style="background-image: url('i/main-back.jpg');">
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Займы на любые цели</h2>
					<div class="b-slider-item-text">Сменить обстановку, отправиться в путешествие  или сделать что-то, о чем вы давно мечтали</div>
					<a href="#" class="b-btn">Оформить заявку</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b-main-illustrations">
		<div class="b-block">
			<div class="b-illustration-list">
				<div class="b-illustration-item">
					<div class="b-1-illustration b-illustration"></div>
					<div class="b-illustration-text">Пайщиков</div>
					<div class="b-illustration-info">
						<span class="illustration-bold-num">11 959</span>
						<span class="illustration-bold-text">Чел.</span>
					</div>
				</div>
				<div class="b-illustration-item">
					<div class="b-2-illustration b-illustration"></div>
					<div class="b-illustration-text">Принято сбережений</div>
					<div class="b-illustration-info">
						<span class="illustration-bold-num">424 481 608</span>
						<span class="rub-icon"></span>
					</div>
				</div>
				<div class="b-illustration-item">
					<div class="b-3-illustration b-illustration"></div>
					<div class="b-illustration-text">Выдано займов </div>
					<div class="b-illustration-info">
						<span class="illustration-bold-num">5 746 662 874</span>
						<span class="rub-icon"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b-popular-offers">
		<div class="b-block">
			<h3>Популярные предложения</h3>
			<div class="b-popular-offers-list">
				<a href="#" class="b-popular-offer-item">
					<div class="b-popular-offer-item-top">
						<div class="b-popular-offer-item-img" style="background-image: url('i/offer-1.jpg');"></div>
						<div class="b-popular-offer-item-type">займы</div>
					</div>
					<div class="b-popular-offer-item-bottom">
						<div class="b-popular-offer-item-name">Заём под  «Материнский&nbsp;капитал»</div>
						<div class="b-small-btn">Подробнее</div>
					</div>
				</a>
				<a href="#" class="b-popular-offer-item">
					<div class="b-popular-offer-item-top">
						<div class="b-popular-offer-item-img" style="background-image: url('i/offer-2.jpg');"></div>
						<div class="b-popular-offer-item-type">сбережения</div>
					</div>
					<div class="b-popular-offer-item-bottom">
						<div class="b-popular-offer-item-name">Сберегательный счёт «Пенсионный»</div>
						<div class="b-small-btn">Подробнее</div>
					</div>
				</a>
			</div>
		</div>
	</div>










	<? include "footer.php"; ?>

	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup" id="b-popup-1">
			<h3>Оставьте заявку</h3>
			<h4>и наши специалисты<br>свяжутся с Вами в ближайшее время</h4>
			<form action="kitsend.php" data-goal="CALLBACK" method="POST" id="b-form-1">
				<div class="b-popup-form">
					<label for="name">Введите Ваше имя</label>
					<input type="text" id="name" name="name" required/>
					<label for="tel">Введите Ваш номер телефона</label>
					<input type="text" id="tel" name="phone" required/>
					<label for="tel">Введите Ваш E-mail</label>
					<input type="text" id="tel" name="email" required/>
					<input type="hidden" name="subject" value="Заказ"/>
					<input type="submit" style="display:none;">
					<a href="#" class="b-btn b-blue-btn ajax">Заказать</a>
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
				</div>
			</form>
		</div>
		<div class="b-thanks b-popup" id="b-popup-success">
			<h3>Спасибо!</h3>
			<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
		<div class="b-thanks b-popup" id="b-popup-error">
			<h3>Ошибка отправки!</h3>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&key=AIzaSyD6Sy5r7sWQAelSn-4mu2JtVptFkEQ03YI"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>