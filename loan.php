<? 

$params = array(
	"BREADCRUMBS_TITLE" => "Займы",
	"TITLE" => "Лучшие условия по займам для вас",
	"SUBTITLE" => "без страхования и до 100 000 рублей без обеспечения",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>

<div class="b-calc-cont fadeDown anim delay500" data-cont=".b-breadcrumbs">
	<div class="b-left-calc">
		<div class="b-calc-tab-list not-tabs">
			<div class="b-block">
				<a href="#" onclick="return false;" class="b-calc-tab-item active">Потребительский заём</a>
				<a href="mother.php" class="b-calc-tab-item">Материнский капитал</a>
			</div>
		</div>
		<div class="b-calc-form-block" id="loan">
			<form action="ajax/loan-json.php" method="POST" data-template="loan-template" class="b-calc-form" data-results-id="loan-results">
				<div class="b-calc-string">
					<div class="b-block">
						<div class="b-block-calc b-block-calc-sliders">
							<div class="b-calc-slider-block">
								<label for="sum">Сумма займа</label>
								<div class="b-calc-slider">
									<div class="b-slider-range" data-input-id="sum" data-range-from="1000" data-range-to="1000000"></div>
									<div class="b-calc-input-cont">
										<input class="b-calc-input-rub b-range-input" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="250 000" default-value="250 000">
									</div>
								</div>
							</div>
							<div class="b-calc-slider-block clearfix">
								<label for="date">Срок займа</label>
								<div class="b-calc-slider">
									<div class="b-slider-range" data-input-id="date" data-range-to="5" data-slider-type="loan"></div>
									<div class="b-calc-input-cont b-calc-input-month-cont">
										<input class="b-calc-input-month" type="text" id="date" oninput="this.value = this.value.replace(/\D/g, '')" value="1" name="loan-term" default-value="1">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-calc-string">
					<div class="b-block">
						<div class="b-block-calc b-tumbler-block">
							<div class="b-tumbler-text b-tumbler-text-left active">С равными <br>платежами</div>
							<label class="b-tumbler-item">
								<input type="checkbox" class="tumbler">
								<div class="b-tumbler"></div>
							</label>
							<div class="b-tumbler-text b-tumbler-text-right">С начислением процентов <br>на остаток долга</div>
						</div>
					</div>
				</div>
				<div class="b-calc-string b-calc-string-without-border">
					<div class="b-block">
						<div class="b-block-calc b-calc-checkboxes">
							<label class="b-calc-checkbox-item b-radio-item">
								<input type="radio" name="retired">
								<div class="b-checkbox-text">Я пенсионер</div>
							</label>
							<label class="b-calc-checkbox-item b-radio-item">
								<input type="radio" name="retired">
								<div class="b-checkbox-text">Я работник бюджетной сферы</div>
							</label>
							<label class="b-calc-checkbox-item b-radio-item">
								<input type="radio" name="retired">
								<div class="b-checkbox-text">Я предприниматель</div>
							</label>
						</div>
					</div>
				</div>
				<div class="b-calc-string">
					<div class="b-block">
						<div class="b-block-calc b-calc-text-block">
							<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться от фактически полученных</div>
							<a href="#" class="ajax b-btn"><span class="b-btn-text">Рассчитать</span></a>
							<a href="#" class="b-btn b-white-btn b-filter-reset">Сбросить фильтр</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="b-calc-results max-4-items b-calc-inner-results" id="loan-results">
		<div class="b-block">
			<h3 class="b-title-mobile">Вам подходит:</h3>
			<div class="b-calc-no-res">К сожалению, по заданным параметрам ничего не найдено</div>
			<div class="b-calc-result-list">
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Доверительный»</div>
						<div class="b-calc-res-subtitle"></div>
						<div class="b-calc-res-info">Без поручителей, без справки о доходах, на сумму / до 15 000 рублей</div>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок займа</span>
								<span class="b-res-big">6</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
								<span class="b-res-middle">15,5%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								<span class="b-res-middle">53%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Потребительский»</div>
						<div class="b-calc-res-subtitle">с равными (аннуитетными) платежами</div>
						<div class="b-calc-res-info">Без обеспечения, оплата равными платежами</div>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок займа</span>
								от <span class="b-res-big">13</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
									до <span class="b-res-middle">25,8%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41,5%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
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
								от <span class="b-res-big">13</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
									до <span class="b-res-middle">22,8%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41.5%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Потребительский»</div>
						<div class="b-calc-res-subtitle">с равными (аннуитетными) платежами</div>
						<div class="b-calc-res-info">Льготный, без поручителей, на сумму до 100 000 рублей, при условии получения пенсии у нас</div>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок займа</span>
								от <span class="b-res-big">13</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
									до <span class="b-res-middle">26,5%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41.5%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
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
								<span class="b-calc-result-sum-info">Срок займа</span>
								<span class="b-res-big">6</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
									<span class="b-res-middle">15,5%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								<span class="b-res-middle">53%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Потребительский»</div>
						<div class="b-calc-res-subtitle">с равными (аннуитетными) платежами</div>
						<div class="b-calc-res-info">Без обеспечения, оплата равными платежами</div>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок займа</span>
								от <span class="b-res-big">13</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
									до <span class="b-res-middle">25,8%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41,5%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
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
								от <span class="b-res-big">13</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
									до <span class="b-res-middle">22,8%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41.5%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Потребительский»</div>
						<div class="b-calc-res-subtitle">с равными (аннуитетными) платежами</div>
						<div class="b-calc-res-info">Льготный, без поручителей, на сумму до 100 000 рублей, при условии получения пенсии у нас</div>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок займа</span>
								от <span class="b-res-big">13</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info"></span>
							</div>
						</div>
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">
									<span class="mobile">Переплата</span>
									<span class="desktop">Переплата за год</span>
								</span>
									до <span class="b-res-middle">26,5%</span>
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
									от <span class="b-res-middle">41.5%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="loan-application.php" class="b-btn b-btn-application" tabindex="0"><span class="b-btn-text">Оформить заявку</span></a>
							<a href="loan-detail-no-calc.php" class="b-btn b-white-btn b-btn-detail" tabindex="0">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			<div class="b-btn-container">
				<a href="#" class="b-btn b-btn-more"><span class="b-btn-text">Показать все</span></a>
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
					<span class="b-calc-result-sum-info {{minMaxClass}}">Ежемесячный платёж</span>
					{{#if monthlyPayment.MIN}}
					Мин. <span class="b-res-big">{{monthlyPayment.MIN}} <span class="rub-icon"></span></span>
					{{else}}
					<span class="b-res-big">{{monthlyPayment}} <span class="rub-icon"></span></span>
					{{/if}}
				</div>
				<div class="b-calc-result-sum">
					<span class="b-calc-result-sum-info"></span>
					{{#if monthlyPayment.MAX}}
					Макс. <span class="b-res-big">{{monthlyPayment.MAX}} <span class="rub-icon"></span></span>
					{{/if}}
				</div>
			</div>
			<div class="b-calc-result-sum-string">
				<div class="b-calc-result-sum">
					<span class="b-calc-result-sum-info">
						<span class="mobile">Переплата</span>
						<span class="desktop">Переплата за год</span>
					</span>
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
				<a href="loan-application.php" class="b-btn b-btn-application b-btn-application"><span class="b-btn-text">Оформить заявку</span></a>
				{{#if detailUrl}}
				<a href="{{detailUrl}}" class="b-btn b-white-btn b-btn-detail">Подробнее</a>
				{{/if}}
			</div>
		</div>
	</div>
</script>

<div class="b-savings-docs fadeDown anim" data-offset="100">
	<div class="b-block">
		<div class="b-title-with-button">
			<h3>Документы</h3>
			<a href="documents.php" class="b-small-btn">Все документы</a>
		</div>
		<div class="b-documents cut-on-mobile clearfix">
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Анкета заёмщика (поручителя, залогодателя)</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Согласие на обработку персональных данных</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Устав КПКГ «Сибирский кредит»</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Положение об обработке и защите персональных данных</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Базовый стандарт</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Информация для получателей финансовых услуг</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Заявление на получение займа</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Справка о доходах пайщика</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Стандарт общих условий предоставления займов</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Заявление на вступлениев кооператив</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Реквизиты</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Реквизиты для оплаты займа</span></a>
		</div>
	</div>
</div>

<? include "advices.php"; ?>

<? include "footer.php"; ?>