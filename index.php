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
					<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
				</div>
			</div>
		</div>
		<div class="b-slider-item" style="background-image: url('i/main-back.jpg');">
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Займы на любые цели</h2>
					<div class="b-slider-item-text">Сменить обстановку, отправиться в путешествие  или сделать что-то, о чем вы давно мечтали</div>
					<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
				</div>
			</div>
		</div>
		<div class="b-slider-item" style="background-image: url('i/main-back.jpg');">
			<div class="b-block">
				<div class="b-slider-item-info">
					<h2>Займы на любые цели</h2>
					<div class="b-slider-item-text">Сменить обстановку, отправиться в путешествие  или сделать что-то, о чем вы давно мечтали</div>
					<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
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
					<a href="#loan-form" class="b-calc-tab-item active">Займы</a>
					<a href="#savings-form" class="b-calc-tab-item">Сбережения</a>
				</div>
				<div class="b-calc-form-block" id="loan-form">
					<form class="b-calc-form" action="json.php" method="POST" data-template="loan-template">
						<div class="b-calc-string">
							<div class="b-block-calc b-block-calc-sliders">
								<div class="b-calc-slider-block">
									<label for="sum">Сумма займа</label>
									<div class="b-calc-slider">
										<div class="b-slider-range" data-input-id="sum" data-range-to="25000"></div>
										<div class="b-calc-input-cont">
											<input class="b-calc-input-rub" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="15 000" name="sum">
										</div>
									</div>
								</div>
								<div class="b-calc-slider-block">
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
								<div class="b-tumbler-text b-tumbler-text-left active">С равными<br>платежами</div>
								<label class="b-tumbler-item">
									<input type="checkbox" id="tumbler" name="payment-type">
									<div class="b-tumbler"></div>
								</label>
								<div class="b-tumbler-text b-tumbler-text-right">С начислением процентов<br>на остаток долга</div>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-calc-checkboxes">
								<label class="b-calc-checkbox-item">
									<input type="checkbox" name="isRetired">
									<div class="b-checkbox-text">Я пенсионер</div>
								</label>
								<label class="b-calc-checkbox-item">
									<input type="checkbox" name="isBudget">
									<div class="b-checkbox-text">Я работник бюджетной сферы</div>
								</label>
								<label class="b-calc-checkbox-item">
									<input type="checkbox" name="isBusinessman">
									<div class="b-checkbox-text">Я предприниматель</div>
								</label>
							</div>
						</div>
						<div class="b-calc-string">
							<div class="b-block-calc b-calc-text-block">
								<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться  от фактически полученных</div>
								<div class="b-btn-container">
									<a href="#" class="ajax b-btn"><span class="b-btn-text">Рассчитать</span></a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="b-calc-form-block hide" id="savings-form">
					<form class="b-calc-form" action="json.php" method="POST" data-template="savings-template">
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
									<a href="#" class="ajax b-btn"><span class="b-btn-text">Рассчитать</span></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="b-calc-results">
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
							<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="#" class="b-btn b-white-btn">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Потребительский»</div>
						<div class="b-calc-res-subtitle">с начислением процентов на остаток долга</div>
						<div class="b-calc-res-info">Без обеспечения, начисление процентов  на остаток долга</div>
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
							<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="#" class="b-btn b-white-btn">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Доверительный»</div>
						<div class="b-calc-res-subtitle"></div>
						<div class="b-calc-res-info">Без поручителей, без справки о доходах,  на сумму / до 15 000 рублей</div>
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
							<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="#" class="b-btn b-white-btn">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Доверительный»</div>
						<div class="b-calc-res-subtitle"></div>
						<div class="b-calc-res-info">Без поручителей, без справки о доходах,  на сумму / до 15 000 рублей</div>
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
							<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="#" class="b-btn b-white-btn">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Потребительский»</div>
						<div class="b-calc-res-subtitle">с начислением процентов на остаток долга</div>
						<div class="b-calc-res-info">Без обеспечения, начисление процентов  на остаток долга</div>
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
							<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="#" class="b-btn b-white-btn">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Доверительный»</div>
						<div class="b-calc-res-subtitle"></div>
						<div class="b-calc-res-info">Без поручителей, без справки о доходах,  на сумму / до 15 000 рублей</div>
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
							<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="#" class="b-btn b-white-btn">Подробнее</a>
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
							 до <span class="b-res-middle">{{overpayment.MAX}}%</span> годовых
							{{else}}
							 годовых
							{{/if}}
						{{else}}
							{{#if overpayment.MAX}}
							до <span class="b-res-middle">{{overpayment.MAX}}%</span> годовых
							{{else}}
							<span class="b-res-middle">{{overpayment}}%</span> годовых
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
					<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
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
					<a href="#" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
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

<? include "advices.php"; ?>

	<div class="b-commercial-block">
		<div class="b-block">
			<div class="b-commercial-inner">
				<h3>Работа  в кооперативе</h3>
				<div class="b-commercial-text">Начинать строить карьеру лучше вместе  с лидером рынка. Мы поможем раскрыть  и реализовать ваш потенциал.</div>
				<div class="b-commercial-text">Мы обладаем всеми инструментами для личного и профессионального развития.  Коллектив - это то, чем мы гордимся  и дорожим!</div>
				<a href="#" class="b-btn"><span class="b-btn-text">Вакансии</span></a>
			</div>
		</div>
	</div>

<? include "footer.php"; ?>
