<? 

$params = array(
	"TITLE" => "Вакансии",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>
	
<!-- <div class="b-no-vacancies">
	<div class="b-block">
		<div class="b-no-vacancies-img" style="background-image: url('i/illustration.svg#no-vacancies');"></div>
		<div class="b-no-vacancies-text">К сожалению, на данный момент у нас нет доступных вакансий</div>
	</div>
</div> -->

<div class="b-vacancy-content">
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
			<h4>Доступные вакансии</h4>
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