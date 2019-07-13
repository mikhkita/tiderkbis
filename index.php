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
	<link rel="stylesheet" href="css/base.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
</head>
<body>
	<div class="b b-header">
		<div class="b-grey-header clearfix">
			<div class="b-block clearfix">
				<a href="index.php" class="b-logo"><img src="i/logo.svg" alt=""></a>
				<a href="#" class="b-city-btn">
					<span class="b-city-btn-icon"></span><span class="b-city-btn-text">Томск</span><span class="b-city-btn-arrow"></span>
				</a>
				<a href="tel:83822513614" class="b-phone"><span class="b-phone-icon"></span>(3822) 51-36-14</a>
				<div class="b-header-right">
					<a href="#" class="b-personal-btn">
						<span class="b-personal-btn-icon"></span><span class="b-personal-btn-text">Личный кабинет</span>
					</a>
					<a href="#" class="b-search-btn">
						<span class="b-search-btn-icon"></span><span class="b-search-btn-text">Поиск</span>
					</a>
				</div>
			</div>
		</div>
		<div class="b-white-header">
			<div class="b-block clearfix">
				<ul class="b-main-menu justify">
					<li><a href="#">Займы</a></li>
					<li><a href="#">Сбережения</a></li>
					<li><a href="#">Погашение займа</a></li>
					<li><a href="#">О кооперативе</a></li>
					<li><a href="#">Онлайн-приёмная</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				<a href="#" class="b-menu-btn">
					<span class="b-menu-btn-icon"></span>
				</a>
			</div>
		</div>
	</div>
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
	</div>












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
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>