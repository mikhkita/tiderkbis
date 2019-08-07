<? 

$params = array(
	"TITLE" => "Полезные советы",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>
<div class="b-all-advises-list fadeDown anim delay500" data-cont=".b-breadcrumbs">
	<div class="b-block">
		<div class="b-advice-list no-slider">
			<a href="advice-detail.php" class="b-advice">
				<div class="b-img" style="background-image: url('i/advice-1.jpg');"></div>
				<div class="b-advice-text">
					<h4>Как получить льготные условия</h4>
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
		<div class="b-pagination">
			<ul>
				<li><span>1</span></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="pagination-dots"><span>...</span></li>
				<li><a href="#">12</a></li>
			</ul>
		</div>
	</div>
</div>

<? include "footer.php"; ?>