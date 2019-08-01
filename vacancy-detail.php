<? 

$params = array(
	"TITLE" => "Оператор колл-центра",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
		"Вакансии" => 'vacancies.php'
	),
);

include "header.php";

?>

<div class="b-detail-vacancy-form-cont">
	<div class="b-block">
		<div class="b-close clearfix">
			<a href="#" class="b-icon-cross"></a>
		</div>
		<h3>Откликнуться на вакансию</h3>
		<h4>Расскажите о себе</h4>
		<form id="vacancy-item-1" action="#" method="POST" class="b-vacancy-detail-form" data-file-action="addFile.php">
			<div class="b-half-input-cont">
				<div class="b-input">
					<input type="text" name="surname" required>
					<label for="surname">Фамилия<span class="required">*</span></label>
				</div>
				<div class="b-input">
					<input type="text" name="phone" required>
					<label for="phone">Телефон<span class="required">*</span></label>
				</div>
			</div>
			<div class="b-half-input-cont">
				<div class="b-input">
					<input type="text" name="name" required>
					<label for="name">Имя<span class="required">*</span></label>
				</div>
				<div class="b-input">
					<input type="text" name="email" required>
					<label for="email">Электронная почта<span class="required">*</span></label>
				</div>
			</div>
				
			<div class="b-dragndrop-block success" id="pluploadCont">
				<input id="original_filename" type="hidden" name="original_filename">
				<input id="random_filename" type="hidden" name="random_filename">
				<div class="b-dragndrop-text">Перетащите или <a class="attach" href="javascript:;" id="pickfiles">загрузите</a> сюда ваше резюме</div>
				<div id="plupload-error" class="plupload-error"></div>
			</div>
			<div class="b-resume">
				<span class="b-document-icon"></span>
				<span class="b-resume-name">Resume.doc</span>
				<span class="icon-cross"></span>
			</div>
			<div class="b-vacancy-detail-bottom">
				<div class="b-block">
					<div class="b-loan-app-cont-string">
						<a href="#" class="ajax b-btn"><span class="b-btn-text">Откликнуться</span></a>
						<div class="b-error-text hide">Некоторые заполненные поля содержат ошибку</div>
					</div>
					<div class="b-loan-app-cont-string">
						<div class="b-loan-app-btn-text">Нажимая кнопку «Откликнуться», я даю согласие на <a href="/personal">обработку моих персональных данных</a></div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="b-vacancy-detail">
	<div class="b-block">
		<div class="b-vacancy-top-chain">
			<ul>
				<li>
					<span class="b-city-btn-icon"></span>
					<span class="green">Барабинск</span>
				</li>
				<li>
					<span>Поддержка, продажи</span>
				</li>
				<li>
					<span>Без опыта</span>
				</li>
			</ul>
		</div>
		<div class="b-vacancy-text">
			<h4>Обязанности:</h4>
			<ul>
				<li>Обслуживание физических лиц в отделении;</li>
				<li>Информационное и операционное обслуживание клиентов (работа со счетами, пластиковыми картами, денежными переводами);</li>
				<li>Консультирование по банковским продуктам;</li>
				<li>Продажи банковских и страховых продуктов;</li>
				<li>Ведение отчётности.</li>
			</ul>
			<h4>Требования:</h4>
			<ul>
				<li>Не ниже средне-специального образования;</li>
				<li>Уверенный пользователь ПК;</li>
				<li>Опыт работы в банке от одного года;</li>
				<li>Опыт продаж и операционного обслуживания клиентов.</li>
			</ul>
			<h4>Условия:</h4>
			<ul>
				<li>Место работы: отделение банка;</li>
				<li>График работы: 5/2 (фикс.выходной - воскресенье);</li>
				<li>Оклад + бонус по результатам продаж;</li>
				<li>Оформление по ТК РФ;</li>
				<li>ДМС;</li>
				<li>Льготные условия на услуги Банка и компаний-партнеров;</li>
				<li>Отличные возможности для развития и карьерного роста;</li>
				<li>Корпоративное обучение;</li>
				<li>Возможность развития вместе с лидером рынка.</li>
			</ul>
			<a href="#" class="b-btn vacancy-form-open">Откликнуться</a>
		</div>
	</div>
</div>

<div class="b-vanacy-about-block" style="background-image: url('i/vacancy-about.jpg');">
	<div class="b-block">
		<h3>О нас</h3>
		<p>Кредитный потребительский кооператив граждан (КПКГ) «Сибирский кредит» — это добровольный союз жителей Сибирского федерального округа, объединивших личные сбережения для оказания взаимовыгодных финансовых услуг друг другу: выдачи займов, хранения и накопления сбережений.<br><br>
		КПКГ «Сибирский кредит» был создан в Томске 19 августа 2005 года. В&nbsp;настоящее время открыто 31 филиал - кооперативный участок «Сибирского кредита» на территории Томской и Новосибирской областей и 2 офиса кооператива в городе Томск. Собственные средства кооператива к январю 2018 года достигли суммы 77 млн рублей.<br><br>
		<b>Деятельность кооператива регулируется законом РФ №190-ФЗ «О кредитной кооперации» от 18.07.2009 года.</b></p>
	</div>
</div>

<div class="b b-vacancy-bottom-block">
	<div class="b-block">
		<div class="b-index-bottom-list">
			<div class="b-index-bottom-item">
				<div class="b-index-bottom-top">
					<div class="b-1-index-bottom-illustration b-index-bottom-illustration"></div>
					<div class="b-index-bottom-title">Более чем 30 кооперативных участков</div>
				</div>
				<div class="b-index-bottom-bottom">
					<div class="b-index-bottom-text">На территории Сибирсокого<br>Федерального округа</div>
				</div>
			</div>
			<div class="b-index-bottom-item">
				<div class="b-index-bottom-top">
					<div class="b-2-index-bottom-illustration b-index-bottom-illustration"></div>
					<div class="b-index-bottom-title">Минимум документов</div>
				</div>
				<div class="b-index-bottom-bottom">
					<div class="b-index-bottom-text">Основной документ —<br>паспорт гражданина РФ</div>
				</div>
			</div>
			<div class="b-index-bottom-item">
				<div class="b-index-bottom-top">
					<div class="b-3-index-bottom-illustration b-index-bottom-illustration"></div>
					<div class="b-index-bottom-title">Быстрое оформление</div>
				</div>
				<div class="b-index-bottom-bottom">
					<div class="b-index-bottom-text">Оформление<br>в течение 1 часа</div>
				</div>
			</div>
		</div>
	</div>
</div>

<? include "footer.php"; ?>