<? 

$params = array(
	"TITLE" => "Полезные советы",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>
<div class="b-all-advises-list">
	<div class="b-block">
		<div class="b-advice-list">
			<a href="advice-detail.php" class="b-advice">
				<div class="b-img" style="background-image: url('i/advice-1.jpg');"></div>
				<div class="b-advice-text">
					<h4>Как получить  льготные условия</h4>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</div>
			</a>
			<a href="advice-detail.php" class="b-advice">
				<div class="b-img" style="background-image: url('i/advice-2.jpg');"></div>
				<div class="b-advice-text">
					<h4>Как упростить процесс перечисления платежей по займам КПКГ</h4>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</div>
			</a>
			<a href="advice-detail.php" class="b-advice">
				<div class="b-img" style="background-image: url('i/advice-3.jpg');"></div>
				<div class="b-advice-text">
					<h4>Как лучше погасить задолженность по займу</h4>
					<div class="b-green-link">Подробнее<span class="right-arrow-icon"></span></div>
				</div>
			</a>
		</div>
	</div>
</div>

<? include "footer.php"; ?>