<?

$version = "1";

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$params["TITLE"]?></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/chosen.min.css" type="text/css">
	<link rel="stylesheet" href="css/datepicker.min.css" type="text/css">
	<link rel="stylesheet" href="css/base.css?<?=$version?>" type="text/css">
	<link rel="stylesheet" href="css/layout.css?<?=$version?>" type="text/css">

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
</head>
<body>
	<div class="b-city-select-block">
		<div class="b-block">
			<div class="b-close clearfix">
				<a href="#" class="b-icon-cross"></a>
			</div>
			<h3>Выбор города</h3>
			<ul>
				<li><a href="#">Томск</a></li>
				<li><a href="#">Новосибирск</a></li>
				<li><a href="#">Асино</a></li>
				<li><a href="#">Колпашево</a></li>
				<li><a href="#">Кривошеивск</a></li>
				<li><a href="#">Асино</a></li>
				<li><a href="#">Колпашево</a></li>
			</ul>
			<ul>
				<li><a href="#">Томск</a></li>
				<li><a href="#">Новосибирск</a></li>
				<li><a href="#">Асино</a></li>
				<li><a href="#">Колпашево</a></li>
				<li><a href="#">Кривошеивск</a></li>
				<li><a href="#">Асино</a></li>
				<li><a href="#">Колпашево</a></li>
			</ul>
		</div>
	</div>
	<div class="b-dark-background"></div>
	<div class="b-panel-page">
		<div class="b b-header grey">
			<div class="b-grey-header clearfix">
				<div class="b-block clearfix">
					<a href="index.php" class="b-logo"><img src="i/logo.svg" alt=""></a>
					<a href="#" class="b-city-btn">
						<span class="b-city-btn-icon"></span><span class="b-city-btn-text">Томск</span><span class="b-city-btn-arrow"></span>
					</a>
					<a href="tel:83822513614" class="b-phone"><span class="b-phone-icon"></span>(3822) 51-36-14</a>
					<div class="b-header-right">
						<a href="#" class="b-personal-btn">
							<span class="b-personal-btn-icon"></span><span class="b-personal-btn-text">Личный кабинет</span>
						</a>
						<a href="#" class="b-search-btn">
							<span class="b-search-btn-icon"></span><span class="b-search-btn-text">Поиск</span>
						</a>
					</div>
				</div>
			</div>
			<div class="b-white-header">
				<div class="b-block clearfix">
					<ul class="b-main-menu justify">
						<li><a href="loan.php">Займы</a></li>
						<li><a href="savings.php">Сбережения</a></li>
						<li><a href="payment.php">Погашение займа</a></li>
						<li><a href="cooperative.php">О кооперативе</a></li>
						<li><a href="#">Онлайн-приёмная</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
					<a href="#" class="b-menu-btn">
						<span class="b-menu-btn-icon"></span>
					</a>
				</div>
			</div>
		</div>
		<? if( isset($params["BREADCRUMBS"]) ): ?>
		<div class="b b-navigation">
			<div class="b-block">
				<ul class="b-breadcrumbs">
					<? foreach ($params["BREADCRUMBS"] as $title => $url): ?>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=$url?>" title="<?=$title?>" itemprop="url"><span itemprop="title"><?=$title?></span></a></li>
					<? endforeach; ?>
					<li><span><?=$params["TITLE"]?></span></li>
				</ul>

				<h1><?=$params["TITLE"]?></h1>
			</div>
		</div>
		<? endif; ?>