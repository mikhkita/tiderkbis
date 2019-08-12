<? 

$params = array(
	"BREADCRUMBS_TITLE" => "Сбережения",
	"TITLE" => "Лучшие условия по сбережениям",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>

<div class="b-calc-cont fadeDown anim delay300" data-cont=".b-breadcrumbs">
	<div class="b-left-calc">
		<div class="b-calc-form-block">
			<form class="b-calc-form" action="ajax/savings-json.php" method="POST" data-template="savings-template" data-results-id="savings-results">
				<div class="b-calc-string">
					<div class="b-block">
						<div class="b-block-calc b-block-calc-sliders">
							<div class="b-calc-slider-block">
								<label for="sum">Сумма</label>
								<div class="b-calc-slider">
									<div class="b-slider-range" data-input-id="sum" data-range-to="25000"></div>
									<div class="b-calc-input-cont">
										<input class="b-range-input b-calc-input-rub" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="500 000" default-value="500 000">
									</div>
								</div>
							</div>
							<div class="b-calc-slider-block clearfix">
								<label for="date">Срок хранения сбережений</label>
								<div class="b-calc-slider">
									<div class="b-slider-range" data-input-id="date" data-range-to="3" data-slider-type="savings"></div>
									<div class="b-calc-input-cont b-calc-input-month-cont">
										<input class="b-calc-input-month" type="text" id="date" oninput="this.value = this.value.replace(/\D/g, '')" value="2" default-value="2">
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
							<div class="calc-select-cont">
								<select class="select" name="savings-percent">
									<option value="1">Начисление процентов</option>
									<option value="2">Сохранение процентов</option>
									<option value="3">Начисление процентов</option>
									<option value="4">Начисление процентов</option>
								</select>
							</div>
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
							<div class="b-calc-text">Все расчеты являются предварительными и могут отличаться от фактически полученных</div>
							<a href="#" class="ajax b-btn"><span class="b-btn-text">Рассчитать</span></a>
							<a href="#" class="b-btn b-white-btn b-filter-reset">Сбросить фильтр</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="b-calc-results max-4-items b-calc-inner-results" id="savings-results">
		<div class="b-block">
			<h3 class="b-title-mobile">Вам подходит:</h3>
			<div class="b-calc-no-res">К сожалению, по заданным параметрам ничего не найдено</div>
			<div class="b-calc-result-list">
				<div class="b-calc-result-item savings-default-res">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Доход»</div>
						<ul>
							<li>Возможность пополнения</li>
							<li>Капитализация или выплата процентов</li>
							<li>Досрочный возврат денег</li>
						</ul>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок хранения</span>
								от <span class="b-res-big">6</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								до <span class="b-res-big">9%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="savings-application.php" class="b-btn"><span class="b-btn-text">Оставить заявку</span></a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item savings-default-res">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Накопление»</div>
						<ul>
							<li class="active">Возможность пополнения</li>
							<li>Капитализация или выплата процентов</li>
							<li>Досрочный возврат денег</li>
						</ul>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок хранения</span>
								<span class="b-res-big">12</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								<span class="b-res-big">7%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="savings-application.php" class="b-btn"><span class="b-btn-text">Оставить заявку</span></a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item savings-default-res">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Процент»</div>
						<ul>
							<li>Возможность пополнения</li>
							<li class="active">Капитализация или выплата процентов</li>
							<li>Досрочный возврат денег</li>
						</ul>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок хранения</span>
								<span class="b-res-big">12</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								<span class="b-res-big">7%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="savings-application.php" class="b-btn"><span class="b-btn-text">Оставить заявку</span></a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item savings-default-res">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Особый»</div>
						<ul>
							<li>Возможность пополнения</li>
							<li class="active">Капитализация или выплата процентов</li>
							<li>Досрочный возврат денег</li>
						</ul>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок хранения</span>
								<span class="b-res-big">12</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								<span class="b-res-big">3%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="savings-application.php" class="b-btn"><span class="b-btn-text">Оставить заявку</span></a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item savings-default-res">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«Универсальный»</div>
						<ul>
							<li class="active">Возможность пополнения</li>
							<li class="active">Капитализация или выплата процентов</li>
							<li class="active">Досрочный возврат денег</li>
						</ul>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок хранения</span>
								<span class="b-res-big">12</span> месяцев
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								<span class="b-res-big">2%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="savings-application.php" class="b-btn"><span class="b-btn-text">Оставить заявку</span></a>
						</div>
					</div>
				</div>
				<div class="b-calc-result-item savings-default-res for-pens">
					<div class="b-calc-result-item-top">
						<div class="b-calc-res-title">«До востребования»</div>
						<ul>
							<li class="active">Возможность пополнения</li>
							<li>Капитализация или выплата процентов</li>
							<li>Досрочный возврат денег</li>
						</ul>
					</div>
					<div class="b-calc-result-item-bottom">
						<div class="b-calc-result-sum-string">
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Срок хранения</span>
								Не установлен
							</div>
							<div class="b-calc-result-sum">
								<span class="b-calc-result-sum-info">Процентная ставка</span>
								<span class="b-res-big">0,5%</span> годовых
							</div>
						</div>
						<div class="b-res-btn-container">
							<a href="savings-application.php" class="b-btn"><span class="b-btn-text">Оставить заявку</span></a>
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

<script id="savings-template" type="text/x-handlebars-template">
	<div class="b-calc-result-item {{forPens}}" id={{id}}>
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
				<a href="savings-application.php" class="b-btn"><span class="b-btn-text">Оставить заявку</span></a>
				{{#if detailUrl}}
				<a href="{{detailUrl}}" class="b-btn b-white-btn">Подробнее</a>
				{{/if}}
			</div>
		</div>
	</div>
</script>

<div class="b-savings-docs">
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
		</div>
	</div>
</div>



<? include "advices.php"; ?>

<? include "footer.php"; ?>