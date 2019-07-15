<? 

$params = array(
	"TITLE" => "Лучшие условия по сбережениям",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>

<div class="b-left-calc">
	<div class="b-calc-form">
		<form action="#" method="#">
			<div class="b-calc-string">
				<div class="b-block">
					<div class="b-block-calc b-block-calc-sliders">
						<div class="b-calc-slider-block">
							<label for="sum">Сумма займа</label>
							<div class="b-calc-slider">
								<div class="b-slider-range" data-input-id="sum" data-range-to="25000"></div>
								<div class="b-calc-input-cont">
									<input class="b-calc-input-rub" type="text" id="sum" oninput="this.value = this.value.replace(/\D/g, '')" value="15000">
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
			<div class="b-calc-string">
				<div class="b-block">
					<div class="b-block-calc b-calc-checkboxes">
						<label class="b-calc-checkbox-item">
							<input type="radio" name="replenishment">
							<div class="b-checkbox-text">Возможность пополнения</div>
						</label>
						<label class="b-calc-checkbox-item">
							<input type="radio" name="refund">
							<div class="b-checkbox-text">Досрочный возврат денег</div>
						</label>
						<select name="savings-percent">
							<option value="1">Начисление процентов</option>
							<option value="2">Начисление процентов</option>
							<option value="3">Начисление процентов</option>
							<option value="4">Начисление процентов</option>
						</select>
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



<? include "advices.php"; ?>

<? include "footer.php"; ?>