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

<div class="b-loan-app-form">
	<form action="#" id="loan-application-form" class="form-with-politics" method="POST">
		<input type="hidden" id="politics-agreement" value="N">
		<div class="b-loan-app-cont">
			<div class="b-block">
				<h3>Информация о займе</h3>
				<div class="b-loan-app-block">
					<div class="b-input b-1-app-input loan-select">
						<select class="select" name="loan-type" data-placeholder="Вид займа" placeholder="Вид займа" required>
							<option value=""></option>
							<option value="2">Начисление процентов</option>
							<option value="3">Начисление процентов</option>
							<option value="4">Начисление процентов</option>
						</select>
						<label for="loan-type">Вид займа<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="text" name="app-sum" id="app-sum" oninput="this.value = this.value.replace(/\D/g, '')" required>
						<label for="app-sum">Сумма займа<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input loan-select">
						<select class="select" name="loan-term" data-placeholder="Срок займа" required>
							<option value=""></option>
							<option value="2">Начисление процентов</option>
							<option value="3">Начисление процентов</option>
							<option value="4">Начисление процентов</option>
						</select>
						<label for="loan-term">Срок займа<span class="required">*</span></label>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-loan-app-cont gray">
			<div class="b-block">
				<h3>Личные данные</h3>
				<div class="b-loan-app-block">
					<div class="b-input b-1-app-input">
						<input type="text" name="name" required>
						<label for="name">Имя<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="text" name="surname" required>
						<label for="surname">Фамилия<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="text" name="patronymic" required>
						<label for="patronymic">Отчество<span class="required">*</span></label>
					</div>
				</div>
				<div class="b-loan-app-block">
					<div class="b-input b-1-app-input">
						<input type="text" class="datepicker-here" name="birthdate" data-view="years" required>
						<label for="birthdate">Дата рождения<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="text" name="birthplace" required>
						<label for="birthplace">Место рождения<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="text" name="passport-address" required>
						<label for="passport-address">Адрес прописки<span class="required">*</span></label>
					</div>
				</div>
				<div class="b-loan-app-block">
					<div class="b-input b-2-app-input">
						<input type="text" name="address" required>
						<label for="address">Адрес фактического проживания<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="phone" name="phone" required>
						<label for="phone">Телефон<span class="required">*</span></label>
					</div>
				</div>
				<div class="b-loan-app-block">
					<div class="b-input b-1-app-input">
						<input type="phone" name="email" required>
						<label for="email">Е-mail<span class="required">*</span></label>
					</div>
				</div>
			</div>
		</div>
		<div class="b-loan-app-cont">
			<div class="b-block">
				<h3>Паспорт</h3>
				<div class="b-loan-app-block">
					<div class="b-input b-1-app-input">
						<input type="phone" name="series" required>
						<label for="series">Серия<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="phone" name="number" required>
						<label for="number">Номер<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input">
						<input type="text" class="datepicker-here" name="give-date" data-view="years" required>
						<label for="give-date">Дата выдачи<span class="required">*</span></label>
					</div>
				</div>
				<div class="b-loan-app-block">
					<div class="b-input b-2-app-input">
						<input type="phone" name="give-by" required>
						<label for="give-by">Кем выдан<span class="required">*</span></label>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-loan-app-cont gray">
			<div class="b-block">
				<h3>Работа и доходы</h3>
				<div class="b-loan-app-block">
					<div class="b-input b-1-app-input">
						<input type="phone" name="work">
						<label for="work">Место работы</label>
					</div>
					<div class="b-input b-1-app-input loan-select">
						<select class="select" name="income-proof" data-placeholder="Подтверждение дохода">
							<option value=""></option>
							<option value="2">Начисление процентов</option>
							<option value="3">Начисление процентов</option>
							<option value="4">Начисление процентов</option>
						</select>
						<label for="income-proof">Подтверждение дохода<span class="required">*</span></label>
					</div>
					<div class="b-input b-1-app-input loan-select">
						<select class="select" name="guarantor" data-placeholder="Поручитель">
							<option value=""></option>
							<option value="2">Начисление процентов</option>
							<option value="3">Начисление процентов</option>
							<option value="4">Начисление процентов</option>
						</select>
						<label for="guarantor">Поручитель<span class="required">*</span></label>
					</div>
				</div>
				<div class="b-loan-app-block">
					<div class="b-loan-app-checkboxes">
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
		</div>
		<div class="b-loan-app-cont">
			<div class="b-block">
				<div class="b-loan-app-cont-string">
					<div class="b-error-text-mobile"></div>
					<a href="#" class="ajax b-btn"><span class="b-btn-text">Оформить заём</span></a>
					<div class="b-error-text hide">Некоторые заполненные поля содержат ошибку</div>
				</div>
				<div class="b-loan-app-cont-string">
					<div class="b-loan-app-btn-text">Нажимая кнопку «Оформить заём», я даю согласие на <a href="#" class="politics">обработку моих персональных данных</a></div>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="b-loan-app-docs">
	<div class="b-block">
		<div class="b-title-with-button">
			<h3>Документы</h3>
			<a href="documents.php" class="b-small-btn">Все документы</a>
		</div>
		<div class="b-documents clearfix">
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Анкета заёмщика(поручителя, залогодателя)</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Согласие на обработкуперсональных данных</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Устав КПКГ«Сибирский кредит»</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Положение об обрабоке и защите персональных данных</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Базовый стандарт</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Информация для получателей финансовых услуг</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Заявление на получение займа</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Справка о доходах пайщика</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Стандарт для общих условий предоставления займа</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Заявление на вступлениев кооператив</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Реквизиты</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Реквизиты для оплаты займа</span></a>
		</div>
	</div>
</div>


<? include "advices.php"; ?>

<? include "footer.php"; ?>