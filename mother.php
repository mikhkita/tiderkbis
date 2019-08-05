<? 

$params = array(
	"TITLE" => "Материнский капитал",
	"SUBTITLE" => "без страхования и до 100 000 рублей без обеспечения",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>

<div class="b-calc-cont">
	<div class="b-left-calc">
		<div class="b-calc-tab-list not-tabs">
			<div class="b-block">
				<a href="loan.php" class="b-calc-tab-item">Потребительский заём</a>
				<a href="#" onclick="return false;" class="b-calc-tab-item active">Материнский капитал</a>
			</div>
		</div>
		<div class="b-content b-mother-block">
			<div class="b-block clearfix">
				<div class="b-left-block">
					<div class="b-text">
						<h3>Займы под материнский капитал</h3>
						<p>Займы «Сибирского кредита» на улучшение жилищных условий под материнский капитал позволят Вам купить квартиру или начать строительство жилого дома в короткий срок. Также Вы можете использовать материнский капитал на долевое строительство жилья в многоквартирных  домах. Займы предоставляются в размере остатка суммы материнского капитала. <br><br> Займы «Сибирского кредита» под материнский капитал это удобно  и просто.</p>
					</div>
					<a href="loan-application.php" class="b-btn">Оформить заявку</a>
				</div>
				<span class="b-mother-illustration"></span>
			</div>
		</div>
	</div>
</div>

<div class="b b-loan-detail-docs gray">
	<div class="b-block">
		<div class="b-title-with-button">
			<h4>Документы, необходимые для подачи заявки</h4>
			<a href="documents.php" class="b-small-btn">Все документы</a>
		</div>
		<div class="b-documents b-documents-gray clearfix">
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Копии паспортов заемщика и поручителя</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Анкета заемщика и поручителя </span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Справка из пенсионного фонда о размере материнского капитала</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Копии СНИЛС заёмщика и поручителя</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Сертификат на материнский капитал</span></a>
			<a href="javascript:void(0);" class="b-document"><span class="b-document-icon"></span><span class="b-document-text">Копия Свидетельства о регистрации права на приобретаемое жилье или копия Разрешения на строительство жилого дома или Договор долевого участия (при долевом строительстве).</span></a>
		</div>
	</div>
</div>

<div class="b-content b-mother-block b-mother-more-block">
	<div class="b-block">
		<h3>Дополнительная информация</h3>
		<div class="b-text">
			<p>Деньги перечисляются в день заключения договора займа и сдачи документов на регистрацию права (1 день).<br><br></p>
			<p>Подробнее о возможностях получения займа под материнский капитал можно узнать в офисе кооперативного участка.<br><br></p>
			<p>Также Вы можете заполнить Онлайн-заявку на заем и наши специалисты свяжутся с Вами в ближайшее время.</p>
		</div>
		<a href="loan-application.php" class="b-btn">Оформить заявку</a>
	</div>
</div>

<? include "advices.php"; ?>

<? include "footer.php"; ?>