<? include "header.php";?>

<div class="b-404">
	<div class="b-block">
		<div class="b-404-cont">
			<div class="b-404-img"></div>
			<div class="b-404-text">
				К сожалению, запрашиваемая вами страница не&nbsp;найдена, попробуйте найти на <a href="index.php">главной странице</a> или воспользуйтесь поиском:
			</div>
			<form action="search.php" method="GET" class="search-string">
				<div class="b-input">
					<input type="text" name="q">
					<label for="q">Поиск</label>
					<input type="submit" value="">
				</div>
			</form>
			<div class="b-404-btn-mobile b-center-mobile">
				<a href="loan-application.php" class="b-btn">
					<span class="b-btn-text">Оформить заём</span>
				</a>
			</div>
		</div>
	</div>
</div>

<? include "footer.php"; ?>