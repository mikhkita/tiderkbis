<? if( $withoutRating !== true ): ?>
<div class="b b-rating">
	<div class="b-block">
		<h3>Помогите нам стать лучше</h3>
		<p>Оцените нашу новую страницу</p>
		<div class="b-stars">
			<div class="b-star b-star-icon selected"></div>
			<div class="b-star b-star-icon selected"></div>
			<div class="b-star b-star-icon selected"></div>
			<div class="b-star b-star-icon "></div>
			<div class="b-star b-star-icon "></div>
		</div>
	</div>
</div>
<? endif; ?>
<div class="b b-footer grey">
	<div class="b-block justify">
		<ul class="b-footer-menu">
			<li><a href="#">О кооперативе</a></li>
			<li><a href="#">Онлайн-приёмная</a></li>
			<li><a href="#">Документы</a></li>
		</ul>
		<ul class="b-footer-menu">
			<li><a href="#">Займы</a></li>
			<li><a href="payment.php">Погашение займа</a></li>
			<li><a href="#">Сбережения</a></li>
		</ul>
		<ul class="b-footer-menu">
			<li><a href="#">Вакансии</a></li>
			<li><a href="#">Новости</a></li>
			<li><a href="#">Полезные советы</a></li>
		</ul>
		<div class="b-footer-info">
			<div class="b-footer-search">
				<form action="#" id="footer-search">
					<input type="text" name="q" placeholder="Поиск...">
					<input type="submit" class="b-search-icon">
				</form>
			</div>
			<div class="b-footer-contacts">
				<div class="b-city-btn"><span class="b-city-btn-icon"></span>г. Томск, пер. Совпартшкольный, 12</div>
				<div class="b-phone-cont">
					<a href="tel:83822513614" class="b-phone"><span class="b-phone-icon"></span>(3822) 51-36-14</a>
					<a href="tel:83822514709" class="b-phone">(3822) 51-47-09</a>
				</div>
			</div>
			<div class="b-footer-contacts">
				<div class="b-city-btn"><span class="b-city-btn-icon"></span>г. Томск, пр. Фрунзе, 124</div>
				<div class="b-phone-cont">
					<a href="tel:83822513614" class="b-phone"><span class="b-phone-icon"></span>(3822) 51-36-14</a>
				</div>
			</div>
			<div class="b-footer-bottom">
				<a href="https://paraweb.me/" class="b-paraweb b-paraweb-icon" target="_blank"></a>
				<ul class="b-footer-soc clearfix">
					<li><a href="#" class="b-soc ok-icon" target="_blank"></a></li>
					<li><a href="#" class="b-soc vk-icon" target="_blank"></a></li>
					<li><a href="#" class="b-soc yt-icon" target="_blank"></a></li>
				</ul>
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
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>