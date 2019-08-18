<? include "header.php";?>

<? $withoutRating = true;?>

<div class="b-search fadeDown anim delay300">
	<div class="b-block">
		<div class="b-search-block">
			<form action="" method="GET" class="search-string">
				<? if (isset($_GET['q'])): ?>
					<? $inputClass = 'not-empty focus' ?>
					<? $inputValue = $_GET['q'];?>
				<? endif ?>
				<div class="b-input <?=$inputClass?>">
					<input type="text" name="q" value="<?=$inputValue?>">
					<label for="q">Поиск</label>
					<input type="submit" value="">
				</div>
			</form>
		</div>
		<div class="b-search-results">
			<? if ($_GET['q']): ?>
				<a href="loan.php" class="b-search-res b-white-tile">
					<div class="b-search-res-img"></div>
					<div class="b-search-right">
						<div class="b-search-breadcrumbs">
							<ul class="b-breadcrumbs">
								<li><span>Главная</span></li>
								<li><span>Займы</span></li>
							</ul>
						</div>
						<div class="b-search-res-title">Займы</div>
						<div class="b-search-res-type">Раздел сайта</div>
					</div>
				</a>
				<a href="payment.php" class="b-search-res b-white-tile">
					<div class="b-search-res-img" style="background-image: url('i/illustration.svg#repayment-1');"></div>
					<div class="b-search-right">
						<div class="b-search-breadcrumbs">
							<ul class="b-breadcrumbs">
								<li><span>Главная</span></li>
								<li><span>Погашение займа</span></li>
							</ul>
						</div>
						<div class="b-search-res-title">Погашение займа</div>
						<div class="b-search-res-type">Раздел сайта</div>
					</div>
				</a>
				<a href="payment.php" class="b-search-res b-white-tile">
					<div class="b-search-res-img" style="background-image: url('i/advice-3.jpg');"></div>
					<div class="b-search-right">
						<div class="b-search-breadcrumbs">
							<ul class="b-breadcrumbs">
								<li><span>Главная</span></li>
								<li><span>Погашение займа</span></li>
							</ul>
						</div>
						<div class="b-search-res-title">Как лучше погасить задолженность по займу?</div>
						<div class="b-search-res-type">Полезный совет</div>
					</div>
				</a>
			<? else: ?>
				<div class="b-no-search-res">
					К сожалению, по вашему запросу ничего не найдено
				</div>
			<? endif; ?>
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