<?

$version = "8";
$arPage = explode('/', $_SERVER['REQUEST_URI']);
if (end($arPage) == 'loan-detail.php' || end($arPage) == 'loan-detail-no-calc.php') {
	$isDetail = true;
	$detailPageClass = "b-navigation-detail";
}

setcookie('isFirstTime', 'Y', time() + (86400 * 30), "/");
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
	<div class="b-drop-error-block">
		<div class="b-block">
			<div class="b-close clearfix">
				<a href="#" class="b-icon-cross"></a>
			</div>
			<h3>Ошибка отправки</h3>
			<p>Приносим свои извинения, в ходе отправки запроса произошла ошибка. Повторите попытку позже.</p>
			<a href="#" class="b-btn b-close">Принимаю</a>
		</div>
	</div>
	<div class="b-burger-menu-block">
		<div class="b-block">
			<div class="b-top-burger-block">
				<a href="index.php" class="b-burger-logo"></a>
				<div class="b-close clearfix">
					<a href="#" class="b-icon-cross"></a>
				</div>
			</div>
			<a href="personal-forms.php" class="b-burger-lk">
				<span class="b-personal-btn-icon"></span><span class="b-personal-btn-text">Личный кабинет</span>
			</a>
			<ul class="b-burger-menu-list">
				<li><a href="loan.php">Займы</a></li>
				<li><a href="savings.php">Сбережения</a></li>
				<li><a href="payment.php">Погашение займа</a></li>
				<li><a href="cooperative.php">О кооперативе</a></li>
				<li><a href="online-reception.php">Онлайн-приёмная</a></li>
				<li><a href="documents.php">Документы</a></li>
				<li><a href="vacancies.php">Вакансии</a></li>
				<li><a href="news.php">Новости</a></li>
				<li><a href="advices-list.php">Полезные советы</a></li>
				<li><a href="contacts.php">Контакты</a></li>
			</ul>
			<ul class="b-burger-soc clearfix">
				<li><a href="https:\\ok.ru" class="b-soc ok-icon" target="_blank"></a></li>
				<li><a href="https:\\vk.com" class="b-soc vk-icon" target="_blank"></a></li>
				<li><a href="https:\\youtube.com" class="b-soc yt-icon" target="_blank"></a></li>
			</ul>
		</div>
	</div>
	<div class="b-politics-block">
		<div class="b-block">
			<div class="b-politics-block-top clearfix">
				<div class="b-close clearfix">
					<a href="#" class="b-icon-cross"></a>
				</div>
			</div>
			<div class="b-politics-block-bottom">
				<h3>Согласие на обработку персональных данных</h3>
				<p>Указанные мною выше сведения соответствуют действительности. В период подготовки к заключению договора займа и в период его действия я предоставляю КПКГ «Сибирский кредит» право проверять сведения, касающиеся выдачи и возврата займа методами, разрешенными законами РФ. Даю согласие на обработку кооперативом моих персональных данных для достижения целей, предусмотренных уставом КПКГ «Сибирский кредит», в соответствии с законом от 27.07.2006 N 152-ФЗ «О персональных данных»</p>
			</div>
		</div>
	</div>
	<div class="b-politics-block-with-btns">
		<div class="b-block">
			<div class="b-politics-block-top clearfix">
				<div class="b-close clearfix">
					<a href="#" class="b-icon-cross"></a>
				</div>
			</div>
			<div class="b-politics-block-bottom">
				<h3>Согласие на обработку персональных данных</h3>
				<p>Указанные мною выше сведения соответствуют действительности. В период подготовки к заключению договора займа и в период его действия я предоставляю КПКГ «Сибирский кредит» право проверять сведения, касающиеся выдачи и возврата займа методами, разрешенными законами РФ. Даю согласие на обработку кооперативом моих персональных данных для достижения целей, предусмотренных уставом КПКГ «Сибирский кредит», в соответствии с законом от 27.07.2006 N 152-ФЗ «О персональных данных»</p>
				<div class="b-btn-block">
					<a href="#" class="b-btn b-close b-white-btn">Не принимаю</a>
					<a href="#" class="b-btn b-close" id="agree-btn">Принимаю</a>
				</div>
			</div>
		</div>
	</div>
	<? if(!isset($_COOKIE['isFirstTime'])): ?>
	<div class="b-cookies-block">
		<div class="b-cookies-text">КПКГ "Сибирский кредит" использует файлы cookie. Подробная информация в <a href="#" class="green dashed politics">правилах по обработке персональных данных</a>. Вы можете запретить сохранение cookie в настройках своего браузера.</div>
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
								<a href="personal-forms.php" class="b-personal-btn">
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
						<li class="fadeDown anim delay100"><a href="loan.php">Займы</a></li>
						<li class="fadeDown anim delay150"><a href="savings.php">Сбережения</a></li>
						<li class="fadeDown anim delay200"><a href="payment.php">Погашение займа</a></li>
						<li class="fadeDown anim delay250"><a href="cooperative.php">О кооперативе</a></li>
						<li class="fadeDown anim delay300"><a href="online-reception.php">Онлайн-приёмная</a></li>
						<li class="fadeDown anim delay350"><a href="contacts.php">Контакты</a></li>
					</ul>
					<div class="b-menu-right-cont fadeDown anim delay400">
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
				<ul class="b-breadcrumbs fadeDown anim delay100">
					<? foreach ($params["BREADCRUMBS"] as $title => $url): ?>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=$url?>" title="<?=$title?>" itemprop="url"><span itemprop="title"><?=$title?></span></a></li>
					<? endforeach; ?>
					<li><span><?=($params["BREADCRUMBS_TITLE"])?$params["BREADCRUMBS_TITLE"]:$params["TITLE"]?></span></li>
				</ul>
				<? if (!$isDetail): ?>
					<? if (!$params["SUBTITLE"]): ?>
						<h1 class="fadeDown anim delay200"><?=$params["TITLE"]?></h1>
					<? else: ?>
						<h1 class="before-subtitle fadeDown anim delay200"><?=$params["TITLE"]?></h1>
						<h4 class="subtitle fadeDown anim delay300"><?=$params["SUBTITLE"]?></h4>
					<? endif; ?>
				<? endif; ?>
			</div>
		</div>
		<? endif; ?>