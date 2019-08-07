<? 

$params = array(
	"TITLE" => "Займ «Доверительный»",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
		"Займы" => "loan.php",
	),
);

include "header.php";
?>
<div class="b-loan-detail-cont fadeDown anim delay300" data-cont=".b-breadcrumbs" style="background-image: url('i/loan-detail.jpg');">
	<div class="b-loan-detail-cont-back"></div>
	<div class="b-block">
		<h1><?=$params['TITLE']?></h1>
		<div class="b-calc-result-item big-results">
			<div class="b-calc-result-item-top">
				<div class="b-calc-res-info">Без поручителей, без справки о доходах, на&nbsp;сумму / до 15 000 рублей</div>
			</div>
			<div class="b-calc-result-item-bottom">
				<div class="b-calc-res-bottom-cont">
					<div class="b-res-row">
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Сумма займа</span>
							<span class="b-res-middle gray-text">15 000 <span class="rub-icon"></span></span>
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Ежемесячный платёж</span>
							<span class="b-res-middle">2 900 <span class="rub-icon"></span></span>
						</div>
					</div>
					<div class="b-res-row">
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Срок займа</span>
							<span class="b-res-middle gray-text">6 мес.</span>
						</div>
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Переплата</span>
							<span class="b-res-middle">16%</span>
						</div>
					</div>
					<div class="b-res-row">
						<div class="b-calc-result-sum">
							<span class="b-calc-result-sum-info">Процентная ставка</span>
							<span class="b-res-middle">41,5%</span> годовых
						</div>
					</div>
				</div>
				<div class="b-res-bottom-info">Все расчеты являются предварительными и могут отличаться от фактически полученных</div>
				<div class="b-res-btn-container">
					<a href="loan-application.php" class="b-btn"><span class="b-btn-text">Оформить заявку</span></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="b b-loan-detail-docs gray fadeDown anim">
	<div class="b-block">
		<div class="b-title-with-button">
			<h4>Документы, необходимые для подачи заявки</h4>
			<a href="documents.php" class="b-small-btn">Все документы</a>
		</div>
		<div class="b-documents b-documents-gray clearfix">
			<div class="b-documents-left">
				<div class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Заявление в правление кооператива на выдачу займа</span></div>
				<div class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Копия СНИЛС</span></div>
				<div class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Копия паспорта</span></div>
				<div class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Анкета заёмщика</span></div>
			</div>
			<div class="b-documents-right">
				<div class="b-document">
					<span class="b-document-icon"></span>
					<span class="b-document-text">Справка о доходах за последние 6 месяцев</span>
					<span class="b-document-or">Либо</span>
				</div>
				<div class="b-document">
					<span class="b-document-icon"></span>
					<span class="b-document-text">Свидетельство о регистрации в качестве предпринимателя</span>
					<span class="b-document-or">Либо</span>
				</div>
				<div class="b-document">
					<span class="b-document-icon"></span>
					<span class="b-document-text">Пенсионное удостоверение или справка, подтверждающая статус пенсионера</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="b-detail-other fadeDown anim">
	<div class="b-block">
		<h4>Прочие требования</h4>
		<ul>
			<li>Для пенсионеров ограничение по возрасту— до 75 лет</li>
			<li>Для займа от 100 т.р. в качестве обеспечения принимаются поручительство либо имущественный залог</li>
		</ul>
		<a href="loan-application.php" class="b-btn">Оформить заявку</a>
	</div>
</div>

<? include "advices.php"; ?>

<? include "footer.php"; ?>