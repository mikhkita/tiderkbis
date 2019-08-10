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
		<form id="vacancy-item-1" action="ajax/error.php" method="POST" class="b-vacancy-detail-form form-with-politics" data-file-action="addFile.php">
			<input type="hidden" id="politics-agreement" value="N">
			<div class="b-half-input-cont">
				<div class="b-vacancy-detail-form-mobile"></div>
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
				<div class="b-vacancy-detail-form-desktop">
					<div class="b-input">
						<input type="text" name="name" required>
						<label for="name">Имя<span class="required">*</span></label>
					</div>
				</div>
				<div class="b-input">
					<input type="text" name="email" required>
					<label for="email">Электронная почта<span class="required">*</span></label>
				</div>
			</div>
				
			<div class="b-dragndrop-block" id="pluploadCont">
				<input id="original_filename" type="hidden" name="original_filename">
				<input id="random_filename" type="hidden" name="random_filename">
				<div class="b-dragndrop-text"><span class="b-dragndrop-text-desktop">Перетащите или </span><a class="attach" href="javascript:;" id="pickfiles">загрузите</a> сюда ваше резюме<span class="required">*</span></div>
				<div id="plupload-error" class="plupload-error"></div>
			</div>
			<div class="b-resume hide">
				<div class="b-resume-group">
					<span class="b-document-icon"></span>
					<span class="b-resume-name">Resume.doc</span>
				</div>
				<span class="icon-cross"></span>
			</div>
			<div class="b-vacancy-detail-bottom">
				<div class="b-block">
					<div class="b-loan-app-cont-string">
						<a href="#" class="ajax b-btn"><span class="b-btn-text">Откликнуться</span></a>
						<div class="b-error-text hide">Некоторые заполненные поля содержат ошибку</div>
					</div>
					<div class="b-loan-app-cont-string">
						<div class="b-loan-app-btn-text">Нажимая кнопку «Откликнуться», я даю согласие на <a href="#" class="politics">обработку моих персональных данных</a></div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="b-vacancy-detail fadeDown anim delay300" data-cont=".b-breadcrumbs">
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
		<div class="b-center-mobile">
			<a href="#" class="b-btn b-vacancy-btn-mobile vacancy-form-open">Откликнуться</a>
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
			<div class="b-center-mobile">
				<a href="#" class="b-btn vacancy-form-open">Откликнуться</a>
			</div>
		</div>
	</div>
</div>

<div class="b-vanacy-about-block fadeDown anim">
	<!-- <div class="b-vanacy-mobile-back" style="background-image: url('i/vacancy-about.jpg');"></div> -->
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
			<div class="b-index-bottom-item fadeDown anim delay100">
				<div class="b-index-bottom-top">
					<div class="b-1-index-bottom-illustration b-index-bottom-illustration">
						<div class="b-blob-cont">
							<svg viewbox="0 0 228 162">
								<path fill="#D8FFC5">
								    <animate attributeName="d" dur="12s" repeatCount="indefinite" values="
						            	M221.67,18.62 C236.51,42.52 218.89,104.62 186.83,125.96 C154.77,147.3 108.23,127.96 70.5,97.19 C32.77,66.42 4,24.26 12.42,10 C20.84,-4.26 66.67,9.42 113.16,9.17 C159.65,8.92 206.83,-5.35 221.67,18.62 Z;

										M105,137.27 C57.09,147.05 30.06,160.14 14.35,145.76 C-1.36,131.38 -5.75,89.56 14.48,55.11 C34.71,20.66 79.28,-6.39 129.38,4.74 C179.38,16.02 234.69,65.34 228.12,93.25 C221.55,121.16 152.91,127.49 105,137.27 Z;

										M129.66,131.09 C87.18,144.54 43.29,150.16 31.45,133.5 C19.61,116.84 28.77,87.81 51.45,57.86 C123.02,-36.71 109.72,41.67 139.66,57.86 C168.56,73.5 209,66.17 211.21,81.25 C214.9,106.42 172.14,117.65 129.66,131.09 Z;

										M220.8,62.72 C228.4,86.83 205,141 179.4,149.89 C152.56,159.2 82.4,139.89 43,111.01 C3.6,82.13 -1.92,47.67 7,34 C18.2,16.83 68,42.87 120,48 C172,53.13 213.2,38.74 220.8,62.72 Z;

										M115.35,12.53 C154.72,4 180.06,-7.22 198.27,8.22 C216.48,23.66 227.6,65.79 206.63,102.74 C185.66,139.69 132.63,171.44 87.71,158.9 C42.79,146.36 6,89.46 14.29,58.17 C28.4894677,4.5751456 61.1632822,24.2702261 115.35,12.53 Z;

										M221.67,18.62 C236.51,42.52 218.89,104.62 186.83,125.96 C154.77,147.3 108.23,127.96 70.5,97.19 C32.77,66.42 4,24.26 12.42,10 C20.84,-4.26 66.67,9.42 113.16,9.17 C159.65,8.92 206.83,-5.35 221.67,18.62 Z;"/>
							  </path>
							</svg> 
						</div>
						<div class="illustration-image"></div>
					</div>
					<div class="b-index-bottom-title">Более чем 30 кооперативных участков</div>
				</div>
				<div class="b-index-bottom-bottom">
					<div class="b-index-bottom-text">На территории Сибирского <br>Федерального округа</div>
				</div>
			</div>
			<div class="b-index-bottom-item fadeDown anim delay200">
				<div class="b-index-bottom-top">
					<div class="b-2-index-bottom-illustration b-index-bottom-illustration">
						<div class="b-blob-cont">
							<svg viewbox="0 0 228 160">
								<path fill="#fff4b8">
								    <animate attributeName="d" dur="12s" repeatCount="indefinite" values="
										M105,137.27 C57.09,147.05 30.06,160.14 14.35,145.76 C-1.36,131.38 -5.75,89.56 14.48,55.11 C34.71,20.66 79.28,-6.39 129.38,4.74 C179.38,16.02 234.69,65.34 228.12,93.25 C221.55,121.16 152.91,127.49 105,137.27 Z;
										
										M220.8,62.72 C228.4,86.83 205,141 179.4,149.89 C152.56,159.2 82.4,139.89 43,111.01 C3.6,82.13 -1.92,47.67 7,34 C18.2,16.83 68,42.87 120,48 C172,53.13 213.2,38.74 220.8,62.72 Z;

										M221.67,18.62 C236.51,42.52 218.89,104.62 186.83,125.96 C154.77,147.3 108.23,127.96 70.5,97.19 C32.77,66.42 4,24.26 12.42,10 C20.84,-4.26 66.67,9.42 113.16,9.17 C159.65,8.92 206.83,-5.35 221.67,18.62 Z;

										M105,137.27 C57.09,147.05 30.06,160.14 14.35,145.76 C-1.36,131.38 -5.75,89.56 14.48,55.11 C34.71,20.66 79.28,-6.39 129.38,4.74 C179.38,16.02 234.69,65.34 228.12,93.25 C221.55,121.16 152.91,127.49 105,137.27 Z;"/>
							  </path>
							</svg> 
						</div>
						<div class="illustration-image"></div>
					</div>
					<div class="b-index-bottom-title">Минимум документов</div>
				</div>
				<div class="b-index-bottom-bottom">
					<div class="b-index-bottom-text">Основной документ — <br>паспорт гражданина РФ</div>
				</div>
			</div>
			<div class="b-index-bottom-item fadeDown anim delay300">
				<div class="b-index-bottom-top">
					<div class="b-3-index-bottom-illustration b-index-bottom-illustration">
						<div class="b-blob-cont">
							<svg viewbox="0 0 228 160">
								<path fill="#D8FFC5">
								    <animate attributeName="d" dur="12s" repeatCount="indefinite" values="
								    M15.1235 54.8552C39.2807 17.115 148.806 -4.74239 191.525 24.5938C244.033 60.6654 247.741 137.296 203.299 156.317C171.719 169.779 146.735 123.834 119.488 123.834C88.4826 123.834 55.4232 137.244 28.3856 128.096C13.6529 123.082 -19.2325 108.548 15.1235 54.8552Z;

									M48.1605 29.4155C87.1605 2.32257 152.16 -5.67786 193.185 29.416C299.16 130.823 154.661 192.416 104.661 152.823C68.1605 111.416 89.1605 94.416 68.6605 83.416C39.6605 67.855 16.6605 102.416 4.6605 83.416C3.16052 78.916 -6.8395 67.6236 48.1605 29.4155Z;

									M60.3676 32.8393C99.3675 5.74641 138.343 -9.75477 179.368 25.3391C280.368 148.34 203.868 173.756 132.368 161.839C84.3675 153.839 67.3676 154.839 46.8676 143.839C17.8676 128.278 0.867554 87.8398 5.86755 64.8398C11.072 40.8994 45.3676 43.2597 60.3676 32.8393Z;

									M112.089 11.9664C151.089 -15.1265 212.089 23.9666 227.089 65.4669C238.668 97.5 202.089 73.4623 173.427 82C149.927 89 161.573 195.5 55.5 159C16.1387 145.456 -4.6196 79.7779 8.08942 59.9668C25.0894 33.4668 87.0894 29.3336 112.089 11.9664Z;

									M92.5 62.5C131.5 35.4071 185.5 -33.0004 222 21.9998C243.5 58.999 211.245 142.465 186 158.499C149 182 79.5 151.5 51 129.999C21.7637 107.943 -5.20902 84.8106 7.50001 64.9995C24.5 38.4995 67.5 79.8672 92.5 62.5Z;

									M15.1235 54.8552C39.2807 17.115 148.806 -4.74239 191.525 24.5938C244.033 60.6654 247.741 137.296 203.299 156.317C171.719 169.779 146.735 123.834 119.488 123.834C88.4826 123.834 55.4232 137.244 28.3856 128.096C13.6529 123.082 -19.2325 108.548 15.1235 54.8552Z;"/>
							  </path>
							</svg> 
						</div>
						<div class="illustration-image"></div>
					</div>
					<div class="b-index-bottom-title">Быстрое оформление</div>
				</div>
				<div class="b-index-bottom-bottom">
					<div class="b-index-bottom-text">Оформление<br> в течение 1 часа</div>
				</div>
			</div>
		</div>
	</div>
</div>

<? include "footer.php"; ?>