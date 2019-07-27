<?

$version = "1";
$arPage = explode('/', $_SERVER['REQUEST_URI']);
if (end($arPage) == 'loan-detail.php') {
	$isDetail = true;
	$detailPageClass = "b-navigation-detail";
}
if (isset($_SESSION['isFirstTime'])) {
	$_SESSION['isFirstTime'] = true;
}

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
	<? if($_SESSION['isFirstTime']): ?>
	<div class="b-cookies-block">
		<div class="b-cookies-text">КПКГ "Сибирский кредит" использует файлы cookie. Подробная информация в <a href="#" class="green dashed">правилах по обработке персональных данных</a>. Вы можете запретить сохранение cookie в настройках своего браузера.</div>
		<a href="#" class="b-btn close-cookie">Продолжить работу</a>
		<a href="#" class="close-cookie icon-cross"></a>
	</div>
	<? endif; ?>
	<div class="b-dark-background"></div>
	<div class="b-panel-page">
		<div class="b b-header grey">
			<div class="b-grey-header clearfix">
				<div class="b-block clearfix">
					<div class="b-header-top">
						<div class="b-logo-cont">
							<a href="index.php" class="b-logo"><img src="i/logo.svg" alt=""></a>
						</div>
						<div class="b-header-top-block clearfix">
							<div class="b-header-left">
								<a href="#" class="b-city-btn">
									<span class="b-city-btn-icon"></span><span class="b-city-btn-text">Томск</span><span class="b-city-btn-arrow"></span>
								</a>
								<a href="tel:83822513614" class="b-phone"><span class="b-phone-icon"></span>(3822) 51-36-14</a>
							</div>
							<div class="b-header-right">
								<a href="personal.php" class="b-personal-btn">
									<span class="b-personal-btn-icon"></span><span class="b-personal-btn-text">Личный кабинет</span>
								</a>
								<div class="b-search-btn">
									<span class="b-search-btn-icon"></span>
									<span class="b-search-btn-text">Поиск</span>
									<form action="search.php" method="GET" class="b-search-input">
										<input type="text" name="q">
										<input type="submit">
										<a href="#" class="search-close b-icon-cross"></a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-white-header">
				<div class="b-block clearfix">
					<a href="index.php" class="b-logo-mobile"></a>
					<ul class="b-main-menu justify">
						<li><a href="loan.php">Займы</a></li>
						<li><a href="savings.php">Сбережения</a></li>
						<li><a href="payment.php">Погашение займа</a></li>
						<li><a href="cooperative.php">О кооперативе</a></li>
						<li><a href="online-reception.php">Онлайн-приёмная</a></li>
						<li><a href="contacts.php">Контакты</a></li>
					</ul>
					<div class="b-menu-right-cont">
						<div class="b-search-btn b-search-btn-mobile">
							<span class="b-search-btn-icon"></span>
							<form action="search.php" method="GET" class="b-search-input">
								<input type="text" name="q">
								<input type="submit">
								<a href="#" class="search-close b-icon-cross"></a>
							</form>
						</div>	
						<a href="#" class="b-menu-btn">
							<span class="b-menu-btn-icon"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<? if( isset($params["BREADCRUMBS"]) ): ?>
		<div class="b b-navigation <?=$detailPageClass?>">
			<div class="b-block">
				<ul class="b-breadcrumbs">
					<? foreach ($params["BREADCRUMBS"] as $title => $url): ?>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=$url?>" title="<?=$title?>" itemprop="url"><span itemprop="title"><?=$title?></span></a></li>
					<? endforeach; ?>
					<li><span><?=$params["TITLE"]?></span></li>
				</ul>
				<? if (!$isDetail): ?>
					<h1><?=$params["TITLE"]?></h1>
				<? endif; ?>
			</div>
		</div>
		<? endif; ?>