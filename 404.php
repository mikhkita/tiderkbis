<? include "header.php";?>

<div class="b-404">
	<div class="b-block">
		<div class="b-404-cont">
			<div class="b-404-img"></div>
			<div class="b-404-text">
				К сожалению, запрашиваемая вами страница  не&nbsp;найдена, попробуйте найти на <a href="index.php">главной странице</a> или воспользуйтесь поиском:
			</div>
			<form action="search.php" method="GET" class="search-string">
				<div class="b-input">
					<input type="text" name="q">
					<label for="q">Поиск</label>
					<input type="submit" value="">
				</div>
			</form>
		</div>
	</div>
</div>

<? include "footer.php"; ?>