<? 

$params = array(
	"TITLE" => "Заявка на заём",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
		"Займы" => "loan.php",
	),
);

include "header.php";

?>

<div class="b-left-calc">
	<div class="b-calc-tab-list">
		<div class="b-block">
			<a href="#b-calc-form-1" class="b-calc-tab-item active">Потребительский заём</a>
			<a href="#b-calc-form-2" class="b-calc-tab-item">Материнский капитал</a>
		</div>
	</div>
	<div class="b-calc-form-block" id="b-calc-form-1">
		<form action="json.php" method="POST" data-template="loan-template" class="b-calc-form">
			<div class="b-calc-string">
				<div class="b-block">
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
			</div>
			<div class="b-calc-string">
				<div class="b-block">
					<div class="b-block-calc b-tumbler-block">
						<div class="b-tumbler-text b-tumbler-text-left active">С равными<br>платежами</div>
						<label class="b-tumbler-item">
							<input type="checkbox" id="tumbler">
							<div class="b-tumbler"></div>
						</label>
						<div class="b-tumbler-text b-tumbler-text-right">С начислением процентов<br>на остаток долга</div>
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
						<label class="b-calc-checkbox-item">
							<input type="checkbox" name="retired">
							<div class="b-checkbox-text">Я работник бюджетной сферы</div>
						</label>
						<label class="b-calc-checkbox-item">
							<input type="checkbox" name="retired">
							<div class="b-checkbox-text">Я предприниматель</div>
						</label>
					</div>
				</div>
			</div>
			<div class="b-calc-string">
				<div class="b-block">
					<div class="b-block-calc b-calc-text-block">
						<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться  от фактически полученных</div>
						<a href="#" class="ajax b-btn">Рассчитать</a>
						<a href="#" class="b-btn b-white-btn">Сбросить фильтр</a>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="b-calc-form-block hide" id="b-calc-form-2">
		<form action="json.php" method="POST" data-template="loan-template" class="b-calc-form">
			<div class="b-calc-string">
				<div class="b-block">
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
			</div>
			<div class="b-calc-string">
				<div class="b-block">
					<div class="b-calc-checkboxes">
						<label class="b-calc-checkbox-item">
							<input type="checkbox" name="replenishment">
							<div class="b-checkbox-text">Возможность пополнения</div>
						</label>
						<label class="b-calc-checkbox-item">
							<input type="checkbox" name="refund">
							<div class="b-checkbox-text">Досрочный возврат денег</div>
						</label>
						<select class="select" name="savings-percent">
							<option value="1">Начисление процентов</option>
							<option value="2">Начисление процентов</option>
							<option value="3">Начисление процентов</option>
							<option value="4">Начисление процентов</option>
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
				<div class="b-block">
					<div class="b-block-calc b-calc-text-block">
						<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться  от фактически полученных</div>
						<a href="#" class="ajax b-btn">Рассчитать</a>
						<a href="#" class="b-btn b-white-btn">Сбросить фильтр</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="b-calc-results max-4-items b-calc-inner-results">
	<div class="b-block">
		<div class="b-calc-result-list">
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
							<span class="b-calc-result-sum-info">Срок займа</span>
							от <span class="b-res-big">6</span> месяцев
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Процентная ставка</span>
							<span class="b-res-big">7%</span> годовых
						</div>
					</div>
					<div class="b-res-btn-container">
						<a href="loan-application.php" class="b-btn">Оформить заявку</a>
						<a href="#" class="b-btn b-white-btn">Подробнее</a>
					</div>
				</div>
			</div>
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
							<span class="b-calc-result-sum-info">Срок займа</span>
							от <span class="b-res-big">6</span> месяцев
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Процентная ставка</span>
							<span class="b-res-big">7%</span> годовых
						</div>
					</div>
					<div class="b-res-btn-container">
						<a href="#" class="b-btn">Оформить заявку</a>
						<a href="#" class="b-btn b-white-btn">Подробнее</a>
					</div>
				</div>
			</div>
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
							<span class="b-calc-result-sum-info">Срок займа</span>
							от <span class="b-res-big">6</span> месяцев
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Процентная ставка</span>
							<span class="b-res-big">7%</span> годовых
						</div>
					</div>
					<div class="b-res-btn-container">
						<a href="#" class="b-btn">Оформить заявку</a>
						<a href="#" class="b-btn b-white-btn">Подробнее</a>
					</div>
				</div>
			</div>
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
							<span class="b-calc-result-sum-info">Срок займа</span>
							от <span class="b-res-big">6</span> месяцев
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Процентная ставка</span>
							<span class="b-res-big">7%</span> годовых
						</div>
					</div>
					<div class="b-res-btn-container">
						<a href="#" class="b-btn">Оформить заявку</a>
						<a href="#" class="b-btn b-white-btn">Подробнее</a>
					</div>
				</div>
			</div>
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
							<span class="b-calc-result-sum-info">Срок займа</span>
							от <span class="b-res-big">6</span> месяцев
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Процентная ставка</span>
							<span class="b-res-big">7%</span> годовых
						</div>
					</div>
					<div class="b-res-btn-container">
						<a href="#" class="b-btn">Оформить заявку</a>
						<a href="#" class="b-btn b-white-btn">Подробнее</a>
					</div>
				</div>
			</div>
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
							<span class="b-calc-result-sum-info">Срок займа</span>
							от <span class="b-res-big">6</span> месяцев
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Процентная ставка</span>
							<span class="b-res-big">7%</span> годовых
						</div>
					</div>
					<div class="b-res-btn-container">
						<a href="#" class="b-btn">Оформить заявку</a>
						<a href="#" class="b-btn b-white-btn">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-btn-container">
			<a href="#" class="b-btn b-btn-more">Показать все</a>
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
				<a href="#" class="b-btn">Оформить заявку</a>
				{{#if detailUrl}}
				<a href="{{detailUrl}}" class="b-btn b-white-btn">Подробнее</a>
				{{/if}}
			</div>
		</div>
	</div>
</script>

<div class="b-savlings-docs">
	<div class="b-block">
		<div class="b-title-with-button">
			<h3>Документы</h3>
			<a href="documents.php" class="b-small-btn">Все документы</a>
		</div>
		<div class="b-documents clearfix">
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Анкета заёмщика (поручителя, залогодателя)</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Согласие на обработку персональных данных</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Устав КПКГ «Сибирский кредит»</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Положение об обрабоке и защите персональных данных</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Базовый стандарт</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Информация для получателей финансовых услуг</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Заявление на получение займа</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Справка о доходах пайщика</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Стандарт для общих условий предоставления займа</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Заявление на вступление в кооператив</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Реквизиты</span></a>
			<a href="#" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Реквизиты для оплаты займа</span></a>
		</div>
	</div>
</div>



<? include "advices.php"; ?>

<? include "footer.php"; ?>