<? 

$params = array(
	"TITLE" => "Сибирский Кредит",
);

include "header.php";

?>
	<div class="b-main-slider">
		<div class="b-slider-item">
			<picture>
			  <source media="(max-width: 767px)" srcset="i/main-back-mobile.jpg">
			  <img src="i/main-back-1-full.jpg">
			</picture>
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Займы на <br>любые цели</h2>
					<div class="b-slider-item-text">Сменить обстановку, отправиться в путешествие или сделать что-то, о чем вы давно мечтали</div>
					<div class="btn-shadow"><a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a></div>
				</div>
			</div>
		</div>
		<div class="b-slider-item">
			<picture>
			  <source media="(max-width: 767px)" srcset="i/main-back-2.jpg">
			  <img src="i/main-back-2-full.jpg">
			</picture>
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Погашайте займы <br>не выходя из дома</h2>
					<div class="b-slider-item-text">В любое время,<br>c любой банковской карты</div>
					<div class="btn-shadow"><a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оплатить заём</span></a></div>
				</div>
			</div>
		</div>
		<div class="b-slider-item">
			<picture>
			  <source media="(max-width: 767px)" srcset="i/main-back-3.jpg">
			  <img src="i/main-back-3-full.jpg">
			</picture>
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Займы под <br>материнский капитал</h2>
					<div class="b-slider-item-text">На покупку<br>и строительство жилья</div>
					<div class="btn-shadow"><a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a></div>
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
				<a href="loan.php" class="b-popular-offer-item">
					<div class="b-popular-offer-item-top">
						<div class="b-popular-offer-item-img" style="background-image: url('i/offer-1.jpg');"></div>
						<div class="b-popular-offer-item-type">займы</div>
					</div>
					<div class="b-popular-offer-item-bottom">
						<div class="b-popular-offer-item-name">Заём под «Материнский&nbsp;капитал»</div>
						<div class="b-small-btn">Подробнее</div>
					</div>
				</a>
				<a href="savings.php" class="b-popular-offer-item">
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

	<div class="b-calc-cont">

		<div class="b-calc">
			<div class="b-block">
				<h3>Калькулятор услуг</h3>
				<div class="b-calc-with-tabs b-calc-with-shadow">
					<div class="b-calc-tab-list">
						<a href="#loan" class="b-calc-tab-item active">Займы</a>
						<a href="#savings" class="b-calc-tab-item">Сбережения</a>
					</div>
					<div class="b-calc-form-block" id="loan">
						<form class="b-calc-form" action="ajax/loan-json.php" method="POST" data-template="loan-template" data-results-id="loan-results">
							<div class="b-calc-string">
								<div class="b-block-calc b-block-calc-sliders">
									<div class="b-calc-slider-block clearfix">
										<label for="sum">Сумма займа</label>
										<div class="b-calc-slider">
											<div class="b-slider-range" data-input-id="sum" data-range-to="25000"></div>
											<div class="b-calc-input-cont">
												<input class="b-calc-input-rub" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="15 000" name="sum">
											</div>
										</div>
									</div>
									<div class="b-calc-slider-block clearfix">
										<label for="date">Срок займа</label>
										<div class="b-calc-slider">
											<div class="b-slider-range" data-input-id="date" data-range-to="18"></div>
											<div class="b-calc-input-cont b-calc-input-month-cont">
												<input class="b-calc-input-month" type="text" id="date" oninput="this.value = this.value.replace(/\D/g, '')" value="6" name="loan-term">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="b-calc-string">
								<div class="b-block-calc b-tumbler-block">
									<div class="b-tumbler-text b-tumbler-text-left active">С равными <br>платежами</div>
									<label class="b-tumbler-item">
										<input type="checkbox" name="payment-type" class="tumbler">
										<div class="b-tumbler"></div>
									</label>
									<div class="b-tumbler-text b-tumbler-text-right">С начислением процентов<br>на остаток долга</div>
								</div>
							</div>
							<div class="b-calc-string">
								<div class="b-block-calc b-calc-checkboxes">
									<label class="b-calc-checkbox-item b-radio-item">
										<input type="radio" name="calcRadio">
										<div class="b-checkbox-text">Я пенсионер</div>
									</label>
									<label class="b-calc-checkbox-item b-radio-item">
										<input type="radio" name="calcRadio">
										<div class="b-checkbox-text">Я работник бюджетной сферы</div>
									</label>
									<label class="b-calc-checkbox-item b-radio-item">
										<input type="radio" name="calcRadio">
										<div class="b-checkbox-text">Я предприниматель</div>
									</label>
								</div>
							</div>
							<div class="b-calc-string">
								<div class="b-block-calc b-calc-text-block">
									<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться от фактически полученных</div>
									<div class="b-btn-container">
										<a href="#" class="ajax b-btn"><span class="b-btn-text">Рассчитать</span></a>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="b-calc-form-block b-calc-form-block-savings hide" id="savings">
						<form class="b-calc-form" action="ajax/savings-json.php" method="POST" data-template="savings-template" data-results-id="savings-results">
							<div class="b-calc-string">
								<div class="b-block-calc b-block-calc-sliders">
									<div class="b-calc-slider-block clearfix">
										<label for="sum">Сумма</label>
										<div class="b-calc-slider">
											<div class="b-slider-range" data-input-id="sum" data-range-to="25000"></div>
											<div class="b-calc-input-cont">
												<input class="b-calc-input-rub" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="15 000">
											</div>
										</div>
									</div>
									<div class="b-calc-slider-block clearfix">
										<label for="date">Срок хранения сбережений</label>
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
										<input type="checkbox" name="replenishment">
										<div class="b-checkbox-text">Возможность пополнения</div>
									</label>
									<label class="b-calc-checkbox-item">
										<input type="checkbox" name="refund">
										<div class="b-checkbox-text">Досрочный возврат денег</div>
									</label>
									<div class="calc-select-cont">
										<select class="select" name="savings-percent">
											<option value="1">Начисление процентов</option>
											<option value="2">Сбережение</option>
											<option value="3">Начисление процентов</option>
											<option value="4">Сбережение</option>
										</select>
									</div>
								</div>
							</div>
							<div class="b-calc-string b-calc-string-without-border">
								<div class="b-block">
									<div class="b-block-calc b-calc-checkboxes">
										<label class="b-calc-checkbox-item">
											<input type="checkbox" name="retired">
											<div class="b-checkbox-text">Я пенсионер</div>
										</label>
									</div>
								</div>
							</div>
							<div class="b-calc-string">
								<div class="b-block-calc b-calc-text-block">
									<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться от фактически полученных</div>
									<div class="b-btn-container">
										<a href="#" class="ajax b-btn"><span class="b-btn-text">Рассчитать</span></a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="b-calc-results invisible not-ajax-results" id="loan-results">
			<div class="b-block">
				<h3>Вам подходит:</h3>
				<div class="b-calc-result-list slider-results">
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Доход»</div>
							<ul>
								<li class="active">Возможности пополнения</li>
								<li>Капитализация или выплата процентов</li>
								<li>Досрочный возврат денег</li>
							</ul>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Доход</span>
									Мин. <span class="b-res-big">25 000 <span class="rub-icon"></span></span>
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">&nbsp;</span>
									Макс. <span class="b-res-big">32 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Сумма в конце срока</span>
									<span class="b-res-middle">40 000 <span class="rub-icon"></span></span>
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">7%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Потребительский»</div>
							<div class="b-calc-res-subtitle">с начислением процентов на остаток долга</div>
							<div class="b-calc-res-info">Без обеспечения, начисление процентов на остаток долга</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Срок займа</span>
									<span class="b-res-big">6</span> месяцев
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41,5%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата за год</span>
									до <span class="b-res-middle">26,5 %</span>
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Доверительный»</div>
							<div class="b-calc-res-subtitle"></div>
							<div class="b-calc-res-info">Без поручителей, без справки о доходах, на сумму / до 15 000 рублей</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
									<span class="b-res-big">2 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата</span>
									от <span class="b-res-middle">16%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">41,5%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Доверительный»</div>
							<div class="b-calc-res-subtitle"></div>
							<div class="b-calc-res-info">Без поручителей, без справки о доходах, на сумму / до 15 000 рублей</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
									<span class="b-res-big">2 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата</span>
									от <span class="b-res-middle">16%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">41,5%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Потребительский»</div>
							<div class="b-calc-res-subtitle">с начислением процентов на остаток долга</div>
							<div class="b-calc-res-info">Без обеспечения, начисление процентов на остаток долга</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Срок займа</span>
									<span class="b-res-big">6</span> месяцев
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41,5%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата за год</span>
									до <span class="b-res-middle">26,5 %</span>
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Доверительный»</div>
							<div class="b-calc-res-subtitle"></div>
							<div class="b-calc-res-info">Без поручителей, без справки о доходах, на сумму / до 15 000 рублей</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
									<span class="b-res-big">2 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата</span>
									от <span class="b-res-middle">16%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">41,5%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="b-calc-results invisible not-ajax-results" id="savings-results">
			<div class="b-block">
				<h3>Вам подходит:</h3>
				<div class="b-calc-result-list slider-results">
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Накопление»</div>
							<ul>
								<li class="active">Возможности пополнения</li>
								<li>Капитализация или выплата процентов</li>
								<li>Досрочный возврат денег</li>
							</ul>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Доход</span>
									Мин. <span class="b-res-big">25 000 <span class="rub-icon"></span></span>
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">&nbsp;</span>
									Макс. <span class="b-res-big">32 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Сумма в конце срока</span>
									<span class="b-res-middle">40 000 <span class="rub-icon"></span></span>
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">7%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Потребительский»</div>
							<div class="b-calc-res-subtitle">с начислением процентов на остаток долга</div>
							<div class="b-calc-res-info">Без обеспечения, начисление процентов на остаток долга</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Срок займа</span>
									<span class="b-res-big">6</span> месяцев
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41,5%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата за год</span>
									до <span class="b-res-middle">26,5 %</span>
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Доверительный»</div>
							<div class="b-calc-res-subtitle"></div>
							<div class="b-calc-res-info">Без поручителей, без справки о доходах, на сумму / до 15 000 рублей</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
									<span class="b-res-big">2 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата</span>
									от <span class="b-res-middle">16%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">41,5%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Доверительный»</div>
							<div class="b-calc-res-subtitle"></div>
							<div class="b-calc-res-info">Без поручителей, без справки о доходах, на сумму / до 15 000 рублей</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
									<span class="b-res-big">2 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата</span>
									от <span class="b-res-middle">16%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">41,5%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Потребительский»</div>
							<div class="b-calc-res-subtitle">с начислением процентов на остаток долга</div>
							<div class="b-calc-res-info">Без обеспечения, начисление процентов на остаток долга</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Срок займа</span>
									<span class="b-res-big">6</span> месяцев
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41,5%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата за год</span>
									до <span class="b-res-middle">26,5 %</span>
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="b-calc-result-item">
						<div class="b-calc-result-item-top">
							<div class="b-calc-res-title">«Доверительный»</div>
							<div class="b-calc-res-subtitle"></div>
							<div class="b-calc-res-info">Без поручителей, без справки о доходах, на сумму / до 15 000 рублей</div>
						</div>
						<div class="b-calc-result-item-bottom">
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
									<span class="b-res-big">2 900 <span class="rub-icon"></span></span>
								</div>
							</div>
							<div class="b-calc-result-sum-string">
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Переплата</span>
									от <span class="b-res-middle">16%</span> годовых
								</div>
								<div class="b-calc-result-sum">
									<span class="b-calc-result-sum-info">Процентная ставка</span>
									<span class="b-res-middle">41,5%</span> годовых
								</div>
							</div>
							<div class="b-res-btn-container">
								<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
								<a href="#" class="b-btn b-white-btn">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script id="loan-template" type="text/x-handlebars-template">
		<div class="b-calc-result-item" id={{id}}>
			<div class="b-calc-result-item-top">
				<div class="b-calc-res-title">«{{title}}»</div>
				<div class="b-calc-res-subtitle">{{subtitle}}</div>
				<div class="b-calc-res-info">{{itemInfo}}</div>
			</div>
			<div class="b-calc-result-item-bottom">
				<div class="b-calc-result-sum-string">
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
						{{#if monthlyPayment.MIN}}
						Мин. <span class="b-res-big">{{monthlyPayment.MIN}} <span class="rub-icon"></span></span>
						{{else}}
						<span class="b-res-big">{{monthlyPayment}} <span class="rub-icon"></span></span>
						{{/if}}
					</div>
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">&nbsp;</span>
						{{#if monthlyPayment.MAX}}
						Макс. <span class="b-res-big">{{monthlyPayment.MAX}} <span class="rub-icon"></span></span>
						{{/if}}
					</div>
				</div>
				<div class="b-calc-result-sum-string">
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">Переплата</span>
						{{#if overpayment.MIN}}
							от <span class="b-res-middle">{{overpayment.MIN}}%</span>
							{{#if overpayment.MAX}}
							 до <span class="b-res-middle">{{overpayment.MAX}}%</span>
							{{/if}}
						{{else}}
							{{#if overpayment.MAX}}
							до <span class="b-res-middle">{{overpayment.MAX}}%</span>
							{{else}}
							<span class="b-res-middle">{{overpayment}}%</span>
							{{/if}}
						{{/if}}
					</div>
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">Процентная ставка</span>
						{{#if percentRate.MIN}}
							от <span class="b-res-middle">{{percentRate.MIN}}%</span>
							{{#if percentRate.MAX}}
							 до <span class="b-res-middle">{{percentRate.MAX}}%</span> годовых
							{{else}}
							 годовых
							{{/if}}
						{{else}}
							{{#if percentRate.MAX}}
							до <span class="b-res-middle">{{percentRate.MAX}}%</span> годовых
							{{else}}
							<span class="b-res-middle">{{percentRate}}%</span> годовых
							{{/if}}
						{{/if}}
					</div>
				</div>
				<div class="b-res-btn-container">
					<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
					{{#if detailUrl}}
					<a href="{{detailUrl}}" class="b-btn b-white-btn">Подробнее</a>
					{{/if}}
				</div>
			</div>
		</div>
	</script>

	<script id="savings-template" type="text/x-handlebars-template">
		<div class="b-calc-result-item" id={{id}}>
			<div class="b-calc-result-item-top">
				<div class="b-calc-res-title">«{{title}}»</div>
				<ul>
					{{#each advatagesList}}
						{{#if this.ACTIVE}}
						<li class="active">{{this.TEXT}}</li>
						{{else}}
					    <li>{{this.TEXT}}</li>
					    {{/if}}
					{{/each}}
				</ul>
			</div>
			<div class="b-calc-result-item-bottom">
				<div class="b-calc-result-sum-string">
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">Доход</span>
						{{#if income.MIN}}
						Мин. <span class="b-res-big">{{income.MIN}} <span class="rub-icon"></span></span>
						{{else}}
						<span class="b-res-big">{{income}} <span class="rub-icon"></span></span>
						{{/if}}
					</div>
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">&nbsp;</span>
						{{#if income.MAX}}
						Макс. <span class="b-res-big">{{income.MAX}} <span class="rub-icon"></span></span>
						{{/if}}
					</div>
				</div>
				<div class="b-calc-result-sum-string">
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">Сумма в конце срока</span>
						{{#if endSum.MIN}}
							от <span class="b-res-middle">{{endSum.MIN}} <span class="rub-icon"></span></span>
							{{#if endSum.MAX}}
							 до <span class="b-res-middle">{{endSum.MAX}} <span class="rub-icon"></span></span> 
							{{/if}}
						{{else}}
							{{#if endSum.MAX}}
							до <span class="b-res-middle">{{endSum.MAX}} <span class="rub-icon"></span></span>
							{{else}}
							<span class="b-res-middle">{{endSum}} <span class="rub-icon"></span></span>
							{{/if}}
						{{/if}}
					</div>
					<div class="b-calc-result-sum">
						<span class="b-calc-result-sum-info">Процентная ставка</span>
						{{#if percentRate.MIN}}
							от <span class="b-res-middle">{{percentRate.MIN}}%</span>
							{{#if percentRate.MAX}}
							 до <span class="b-res-middle">{{percentRate.MAX}}%</span> годовых
							{{else}}
							 годовых
							{{/if}}
						{{else}}
							{{#if percentRate.MAX}}
							до <span class="b-res-middle">{{percentRate.MAX}}%</span> годовых
							{{else}}
							<span class="b-res-middle">{{percentRate}}%</span> годовых
							{{/if}}
						{{/if}}
					</div>
				</div>
				<div class="b-res-btn-container">
					<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
					{{#if detailUrl}}
					<a href="{{detailUrl}}" class="b-btn b-white-btn">Подробнее</a>
					{{/if}}
				</div>
			</div>
		</div>
	</script>

	<div class="b b-news-block">
		<div class="b-block">
			<div class="b-title-with-button">
				<h3>Новости</h3>
				<a href="news.php" class="b-small-btn">Все новости</a>
			</div>
			<div class="b-news-list">
				<a href="news.php" class="b-news b-white-tile">
					<div class="b-news-date">16 июня 2019</div>
					<div class="b-news-text">КПКГ «Сибирский кредит» выступил спонсором конкурса детского рисунка «Война. Победа. Память»</div>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</a>
				<a href="news.php" class="b-news b-white-tile">
					<div class="b-news-date">8 июня 2019</div>
					<div class="b-news-text">30 мая 2019 года состоится внеочередное общее собрание членов КПКГ «Сибирский кредит» в форме собрания уполномоченных</div>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</a>
				<a href="news.php" class="b-news b-white-tile">
					<div class="b-news-date">10 марта 2019</div>
					<div class="b-news-text">В КПКГ «Сибирский кредит» прошло очередное ежегодное собрание</div>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</a>
			</div>
		</div>
	</div>

	<div class="b b-index-bottom-block">
		<div class="b-block">
			<h3>Нам доверяют более 10&nbsp;000 пайщиков</h3>
			<div class="b-index-bottom-list">
				<div class="b-index-bottom-item">
					<div class="b-index-bottom-top">
						<div class="b-1-index-bottom-illustration b-index-bottom-illustration"></div>
						<div class="b-index-bottom-title">Более чем 30 кооперативных участков</div>
					</div>
					<div class="b-index-bottom-bottom">
						<div class="b-index-bottom-text">На территории Сибирского <br>Федерального округа</div>
						<a href="contacts.php" class="b-small-btn">Контакты</a>
					</div>
				</div>
				<div class="b-index-bottom-item">
					<div class="b-index-bottom-top">
						<div class="b-2-index-bottom-illustration b-index-bottom-illustration"></div>
						<div class="b-index-bottom-title">Минимум документов</div>
					</div>
					<div class="b-index-bottom-bottom">
						<div class="b-index-bottom-text">Основной документ — <br>паспорт гражданина РФ</div>
						<a href="documents.php" class="b-small-btn">Документы</a>
					</div>
				</div>
				<div class="b-index-bottom-item">
					<div class="b-index-bottom-top">
						<div class="b-3-index-bottom-illustration b-index-bottom-illustration"></div>
						<div class="b-index-bottom-title">Быстрое оформление</div>
					</div>
					<div class="b-index-bottom-bottom">
						<div class="b-index-bottom-text">Оформление<br> в течение 1 часа</div>
						<a href="loan-application.php" class="b-small-btn">Заявка на заём</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<? include "advices.php"; ?>

	<div class="b-commercial-block">
		<div class="b-block">
			<div class="b-commercial-inner">
				<h3>Работа в кооперативе</h3>
				<div class="b-commercial-text">Начинать строить карьеру лучше вместе с лидером рынка. Мы поможем раскрыть и реализовать ваш потенциал.</div>
				<div class="b-commercial-text">Мы обладаем всеми инструментами для личного и профессионального развития.  Коллектив - это то, чем мы гордимся и дорожим!</div>
				<a href="vacancies.php" class="b-btn"><span class="b-btn-text">Вакансии</span></a>
			</div>
		</div>
	</div>

<? include "footer.php"; ?>
