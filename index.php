<? 

$params = array(
	"TITLE" => "Сибирский Кредит",
);

include "header.php";

?>
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

	<div class="b-calc">
		<div class="b-block">
			<h3>Калькулятор услуг</h3>
			<div class="b-calc-with-tabs b-calc-with-shadow">
				<div class="b-calc-tab-list">
					<a href="#b-calc-form-1" class="b-calc-tab-item active">Займы</a>
					<a href="#b-calc-form-2" class="b-calc-tab-item">Сбережения</a>
				</div>
				<div class="b-calc-form" id="b-calc-form-1">
					<form action="#" method="#">
						<div class="b-calc-string">
							<div class="b-block-calc b-block-calc-sliders">
								<div class="b-calc-slider-block">
									<label for="sum">Сумма займа</label>
									<div class="b-calc-slider">
										<div class="b-slider-range" data-input-id="sum" data-range-to="25000"></div>
										<div class="b-calc-input-cont">
											<input class="b-calc-input-rub" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="15 000">
										</div>
									</div>
								</div>
								<div class="b-calc-slider-block">
									<label for="date">Срок займа</label>
									<div class="b-calc-slider">
										<div class="b-slider-range" data-input-id="date" data-range-to="18"></div>
										<div class="b-calc-input-cont b-calc-input-month-cont">
											<input class="b-calc-input-month" type="text" id="date" oninput="this.value = this.value.replace(/\D/g, '')" value="6">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-tumbler-block">
								<div class="b-tumbler-text b-tumbler-text-left active">С равными<br>платежами</div>
								<label class="b-tumbler-item">
									<input type="checkbox" id="tumbler">
									<div class="b-tumbler"></div>
								</label>
								<div class="b-tumbler-text b-tumbler-text-right">С начислением процентов<br>на остаток долга</div>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-calc-checkboxes">
								<label class="b-calc-checkbox-item">
									<input type="radio" name="b-person-type">
									<div class="b-checkbox-text">Я пенсионер</div>
								</label>
								<label class="b-calc-checkbox-item">
									<input type="radio" name="b-person-type">
									<div class="b-checkbox-text">Я работник бюджетной сферы</div>
								</label>
								<label class="b-calc-checkbox-item">
									<input type="radio" name="b-person-type">
									<div class="b-checkbox-text">Я предприниматель</div>
								</label>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-calc-text-block">
								<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться  от фактически полученных</div>
								<div class="b-btn-container">
									<a href="#" class="ajax b-btn">Рассчитать</a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="b-calc-form hide" id="b-calc-form-2">
					<form action="#" method="#">
						<div class="b-calc-string">
							<div class="b-block-calc b-block-calc-sliders">
								<div class="b-calc-slider-block">
									<label for="sum">Сумма займа</label>
									<div class="b-calc-slider">
										<div class="b-slider-range" data-input-id="sum" data-range-to="25000"></div>
										<div class="b-calc-input-cont">
											<input class="b-calc-input-rub" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="15 000">
										</div>
									</div>
								</div>
								<div class="b-calc-slider-block">
									<label for="date">Срок займа</label>
									<div class="b-calc-slider">
										<div class="b-slider-range" data-input-id="date" data-range-to="18"></div>
										<div class="b-calc-input-cont b-calc-input-month-cont">
											<input class="b-calc-input-month" type="text" id="date" oninput="this.value = this.value.replace(/\D/g, '')" value="6">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-calc-checkboxes">
								<label class="b-calc-checkbox-item">
									<input type="radio" name="b-person-type">
									<div class="b-checkbox-text">Я пенсионер</div>
								</label>
								<label class="b-calc-checkbox-item">
									<input type="radio" name="b-person-type">
									<div class="b-checkbox-text">Я работник бюджетной сферы</div>
								</label>
								<label class="b-calc-checkbox-item">
									<input type="radio" name="b-person-type">
									<div class="b-checkbox-text">Я предприниматель</div>
								</label>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-tumbler-block">
								<div class="b-tumbler-text b-tumbler-text-left active">С равными<br>платежами</div>
								<label class="b-tumbler-item">
									<input type="checkbox" id="tumbler">
									<div class="b-tumbler"></div>
								</label>
								<div class="b-tumbler-text b-tumbler-text-right">С начислением процентов<br>на остаток долга</div>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-calc-text-block">
								<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться  от фактически полученных</div>
								<div class="b-btn-container">
									<a href="#" class="ajax b-btn">Рассчитать</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="b-calc-results">
		<div class="b-block">
			<h3>Вам подходит:</h3>
			<div class="b-calc-result-item">
				«Доверительный»
			</div>
		</div>
	</div> -->

	<div class="b b-news-block">
		<div class="b-block">
			<div class="b-title-with-button">
				<h3>Новости</h3>
				<a href="#" class="b-small-btn">Все новости</a>
			</div>
			<div class="b-news-list">
				<a href="#" class="b-news b-white-tile">
					<div class="b-news-date">16 июня 2019</div>
					<div class="b-news-text">КПКГ «Сибирский кредит» выступил спонсором конкурса детского рисунка «Война. Победа. Память»</div>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</a>
				<a href="#" class="b-news b-white-tile">
					<div class="b-news-date">8 июня 2019</div>
					<div class="b-news-text">30 мая 2019 года состоится внеочередное общее собрание членов КПКГ «Сибирский кредит»  в форме собрания уполномоченных</div>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</a>
				<a href="#" class="b-news b-white-tile">
					<div class="b-news-date">10 марта 2019</div>
					<div class="b-news-text">В КПКГ «Сибирский кредит» прошло очередное ежегодное собрание</div>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</a>
			</div>
		</div>
	</div>

	<div class="b b-adv-block">
		<div class="b-block">
			<h3>Нам доверяют<br> более 10 000 пайщиков</h3>
			<div class="b-adv-list">
				<div class="b-adv">
					<div class="b-adv-top">
						<div class="b-1-adv-illustration b-adv-illustration"></div>
						<div class="b-adv-title">Более чем 30 кооперативных  участков</div>
					</div>
					<div class="b-adv-bottom">
						<div class="b-adv-text">На территории Сибирсокого <br>Федерального округа</div>
						<a href="#" class="b-small-btn">КОнтакты</a>
					</div>
				</div>
				<div class="b-adv">
					<div class="b-adv-top">
						<div class="b-2-adv-illustration b-adv-illustration"></div>
						<div class="b-adv-title">Минимум  документов</div>
					</div>
					<div class="b-adv-bottom">
						<div class="b-adv-text">Основной документ —<br>паспорт гражданина РФ</div>
						<a href="#" class="b-small-btn">Документы</a>
					</div>
				</div>
				<div class="b-adv">
					<div class="b-adv-top">
						<div class="b-3-adv-illustration b-adv-illustration"></div>
						<div class="b-adv-title">Быстрое оформление</div>
					</div>
					<div class="b-adv-bottom">
						<div class="b-adv-text">Оформление <br>в течение 1 часа</div>
						<a href="#" class="b-small-btn">Заявка на заём</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b-commercial-block">
		<div class="b-block">
			<div class="b-commercial-inner">
				<h3>Работа  в кооперативе</h3>
				<div class="b-commercial-text">Начинать строить карьеру лучше вместе  с лидером рынка. Мы поможем раскрыть  и реализовать ваш потенциал.</div>
				<div class="b-commercial-text">Мы обладаем всеми инструментами для личного и профессионального развития.  Коллектив - это то, чем мы гордимся  и дорожим!</div>
				<a href="#" class="b-btn">Вакансии</a>
			</div>
		</div>
	</div>







<? include "advices.php"; ?>

<? include "footer.php"; ?>
