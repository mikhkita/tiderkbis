<? 

$params = array(
	"TITLE" => "Вакансии",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>
	
<!-- <div class="b-no-vacancies fadeDown anim delay300">
	<div class="b-block">
		<div class="b-no-vacancies-img">
			<div class="b-blob-cont">
				<svg viewbox="0 -50 234 234">
					<path fill="#D8FFC5">
					    <animate attributeName="d" dur="12s" repeatCount="indefinite" values="
					    M48.1605 29.4155C87.1605 2.32257 152.16 -5.67786 193.185 29.416C299.16 130.823 154.661 192.416 104.661 152.823C68.1605 111.416 89.1605 94.416 68.6605 83.416C39.6605 67.855 16.6605 102.416 4.6605 83.416C3.16052 78.916 -6.8395 67.6236 48.1605 29.4155Z;

					    M60.3676 32.8393C99.3675 5.74641 138.343 -9.75477 179.368 25.3391C280.368 148.34 203.868 173.756 132.368 161.839C84.3675 153.839 67.3676 154.839 46.8676 143.839C17.8676 128.278 0.867554 87.8398 5.86755 64.8398C11.072 40.8994 45.3676 43.2597 60.3676 32.8393Z;

			            M112.089 11.9664C151.089 -15.1265 212.089 23.9666 227.089 65.4669C238.668 97.5 202.089 73.4623 173.427 82C149.927 89 161.573 195.5 55.5 159C16.1387 145.456 -4.6196 79.7779 8.08942 59.9668C25.0894 33.4668 87.0894 29.3336 112.089 11.9664Z;

			            M92.5 62.5C131.5 35.4071 185.5 -33.0004 222 21.9998C243.5 58.999 211.245 142.465 186 158.499C149 182 79.5 151.5 51 129.999C21.7637 107.943 -5.20902 84.8106 7.50001 64.9995C24.5 38.4995 67.5 79.8672 92.5 62.5Z;

			            M15.1235 54.8552C39.2807 17.115 148.806 -4.74239 191.525 24.5938C244.033 60.6654 247.741 137.296 203.299 156.317C171.719 169.779 146.735 123.834 119.488 123.834C88.4826 123.834 55.4232 137.244 28.3856 128.096C13.6529 123.082 -19.2325 108.548 15.1235 54.8552Z;

			            M48.1605 29.4155C87.1605 2.32257 152.16 -5.67786 193.185 29.416C299.16 130.823 154.661 192.416 104.661 152.823C68.1605 111.416 89.1605 94.416 68.6605 83.416C39.6605 67.855 16.6605 102.416 4.6605 83.416C3.16052 78.916 -6.8395 67.6236 48.1605 29.4155Z;"/>
				  </path>
				</svg> 
			</div>
			<div class="illustration-image"></div>
		</div>
		<div class="b-no-vacancies-text">К сожалению, на данный момент у нас нет доступных вакансий</div>
	</div>
</div> -->

<div class="b-vacancy-content fadeDown anim delay300">
	<div class="b-block clearfix">
		<div class="b-right-block b-right-vacancies sticky">
			<h4>Поиск по вакансиям</h4>
			<form action="ajax/vacancies-json.php" method="POST" id="vacancy-form">
				<div class="b-input">
					<input type="text" name="position">
					<label for="position">Должность</label>
				</div>
				<div class="b-input loan-select">
					<select class="select" name="city" data-placeholder="Населенный пункт">
						<option value=""></option>
						<option value="2">Томск</option>
						<option value="3">Новосибирск</option>
						<option value="4">Москва</option>
					</select>
					<label for="city">Населенный пункт</label>
				</div>
				<div class="b-input loan-select">
					<select class="select" name="exp" data-placeholder="Опыт работы">
						<option value=""></option>
						<option value="2">Без опыта</option>
						<option value="3">С опытом</option>
					</select>
					<label for="exp">Опыт работы</label>
				</div>
				<a href="#" class="b-btn mobile-search">Поиск</a>
				<a href="#" class="b-btn b-white-btn b-filter-reset">Сбросить фильтр</a>
			</form>
		</div>
		<div class="b-left-block b-left-vacancies">
			<a href="vacancy-detail.php" class="b-white-tile b-vacancy-tile">
				<div class="b-city-btn">
					<span class="b-city-btn-icon"></span><span class="b-city-btn-text">Барабинск</span>
				</div>
				<h4>Оператор колл-центра</h4>
				<div class="grey-text b-vacancy-section">Поддержка, продажи</div>
				<div class="b-vacancy-skill">Без опыта</div>
			</a>
			<a href="vacancy-detail.php" class="b-white-tile b-vacancy-tile">
				<div class="b-city-btn">
					<span class="b-city-btn-icon"></span><span class="b-city-btn-text">Томск</span>
				</div>
				<h4>Сотрудник отделения</h4>
				<div class="grey-text b-vacancy-section">Поддержка, продажи</div>
				<div class="b-vacancy-skill">Без опыта</div>
			</a>
			<a href="vacancy-detail.php" class="b-white-tile b-vacancy-tile">
				<div class="b-city-btn">
					<span class="b-city-btn-icon"></span><span class="b-city-btn-text">Томск</span>
				</div>
				<h4>Управляющий отделом</h4>
				<div class="grey-text b-vacancy-section">Поддержка, продажи</div>
				<div class="b-vacancy-skill">&nbsp;</div>
			</a>
		</div>
	</div>
</div>

<script id="vacancy-template" type="text/x-handlebars-template">
	<a href="{{detailUrl}}" class="b-white-tile b-vacancy-tile">
		<div class="b-city-btn">
			<span class="b-city-btn-icon"></span><span class="b-city-btn-text">{{city}}</span>
		</div>
		<h4>{{name}}</h4>
		<div class="grey-text b-vacancy-section">{{position}}</div>
		<div class="b-vacancy-skill"></div>
		{{#if experience}}
		<div class="b-vacancy-skill">{{experience}}</div>
		{{else}}
		<div class="b-vacancy-skill">&nbsp;</div>
		{{/if}}
	</a>
</script>

<? include "footer.php"; ?>