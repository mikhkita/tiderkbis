<? 

$params = array(
	"TITLE" => "Личный кабинет",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>

<div class="b-personal fadeDown anim delay300" data-cont=".b-breadcrumbs">
	<div class="b-block">
		<h3>Викторов Виктор</h3>
		<a href="#" class="b-settings-link b-settings-link-mobile">
			<span class="icon-settings"></span>
			<span>Настройки</span>
		</a>
		<a href="#" class="logout-link"><span class="b-logout-icon"></span>Выход</a>
		<div class="b-personal-top-block">
			<div class="b-personal-tabs">
				<a href="#loan" class="b-personal-tab active">Мои займы</a>
				<a href="#contribution" class="b-personal-tab">
					<span class="b-personal-tab-desktop">Мои сбережения</span>
					<span class="b-personal-tab-mobile">Мои вклады</span>
				</a>
				<a href="#archives" class="b-personal-tab">Архив</a>
				<a href="#settings" class="b-personal-tab b-settings-link b-settings-link-desktop">
					<span class="icon-settings"></span>
					<span>Настройки</span>
				</a>
			</div>
		</div>
	</div>
	<div class="b-tab-content-container">
		<div class="b-tab-content gray" id="loan">
			<div class="b-block">
				<div class="b-personal-tile-list">
					<div class="b-personal-tile-item">
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-item-name">«Доверительный»</div>
							<div class="b-personal-tile-item-info">Договор № КП000000627 от 24 сентября 2018 г.</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Cумма</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>50 000 </b></span><span class="rub-icon"></span>
								</div>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Процентная ставка</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>41,5% </b></span><span class="small">годовых</span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Ближайший платеж</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>24 ноября</b></span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string tile-with-button big-pt big-pb">
							<div class="b-personal-tile-half-string btn-cont">
								<a href="#" class="b-btn">Оплатить</a>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span class="b-res-big"><b>6737 </b><span class="rub-icon"></span></span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span class="b-small gray">до 24.09.2019</span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string tile-with-button big-pt big-pb">
							<div class="b-personal-tile-half-string btn-cont">
								<a href="#" class="b-btn b-white-btn">Закрыть досрочно</a>
							</div>
							<div class="b-personal-tile-half-string">
								<span class="b-res-middle gray">31 763 <span class="rub-icon"></span></span>
							</div>
						</div>
						<div class="b-personal-tile-accordeon b-accordeon-list">
							<div class="b-accordeon">
								<div class="b-accordeon-head">
									<h4>Детальная информация по займу</h4>
									<span class="b-arrow-icon"></span>
								</div>
								<div class="b-accordeon-body">
									<table class="loan-detail-table">
										<tr>
											<th>Остаток <br>долга</th>
											<th class="center">Долг</th>
											<th class="center">Проценты</th>
											<th>Сумма <br>платежа</th>
											<th>Дата <br>платежа</th>
										</tr>
										<tr class="gray">
											<td>15 000</td>
											<td class="center">2 238</td>
											<td class="center">662</td>
											<td><b>2 900</b></td>
											<td>24.05.2019</td>
										</tr>
										<tr class="gray">
											<td>12 762</td>
											<td class="center">2 337</td>
											<td class="center">564</td>
											<td><b>2 900</b></td>
											<td>24.06.2019</td>
										</tr>
										<tr class="gray">
											<td>10 425</td>
											<td class="center">2 440</td>
											<td class="center">460</td>
											<td><b>2 900</b></td>
											<td>24.07.2019</td>
										</tr>
										<tr class="green">
											<td>7 986</td>
											<td class="center">2 548</td>
											<td class="center">353</td>
											<td><b>2 937</b></td>
											<td>24.08.2019</td>
										</tr>
										<tr>
											<td>5 438</td>
											<td class="center">2 660</td>
											<td class="center">240</td>
											<td><b>2 900</b></td>
											<td>24.09.2019</td>
										</tr>
										<tr>
											<td>2 778</td>
											<td class="center">2 778</td>
											<td class="center">123</td>
											<td><b>2 900</b></td>
											<td>24.10.2019</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="b-personal-tile-item">
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-item-name">«Доверительный»</div>
							<div class="b-personal-tile-item-info">Договор № КП000000627 от 24 сентября 2018 г.</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Cумма</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>50 000 </b></span><span class="rub-icon"></span>
								</div>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Процентная ставка</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>41,5% </b></span><span class="small">годовых</span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Ближайший платеж</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>24 ноября</b></span>
								</div>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Штраф</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>37 </b></span><span class="rub-icon"></span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string tile-with-button big-pt big-pb">
							<div class="b-personal-tile-half-string btn-cont">
								<a href="#" class="b-btn">Оплатить</a>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span class="b-res-big"><b>6737 </b><span class="rub-icon"></span></span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span class="b-small red">до 24.09.2019</span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string tile-with-button big-pt big-pb">
							<div class="b-personal-tile-half-string btn-cont">
								<a href="#" class="b-btn b-white-btn">Закрыть досрочно</a>
							</div>
							<div class="b-personal-tile-half-string">
								<span class="b-res-middle gray">31 763 <span class="rub-icon"></span></span>
							</div>
						</div>
						<div class="b-personal-tile-accordeon b-accordeon-list">
							<div class="b-accordeon">
								<div class="b-accordeon-head">
									<h4>Детальная информация по займу</h4>
									<span class="b-arrow-icon"></span>
								</div>
								<div class="b-accordeon-body">
									<table class="loan-detail-table">
										<tr>
											<th>Остаток <br>долга</th>
											<th class="center">Долг</th>
											<th class="center">Проценты</th>
											<th>Штраф</th>
											<th>Сумма <br>платежа</th>
											<th>Дата <br>платежа</th>
										</tr>
										<tr class="gray">
											<td>15 000</td>
											<td class="center">2 238</td>
											<td class="center">662</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.05.2019</td>
										</tr>
										<tr class="gray">
											<td>12 762</td>
											<td class="center">2 337</td>
											<td class="center">564</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.06.2019</td>
										</tr>
										<tr class="gray">
											<td>10 425</td>
											<td class="center">2 440</td>
											<td class="center">460</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.07.2019</td>
										</tr>
										<tr class="green">
											<td>7 986</td>
											<td class="center">2 548</td>
											<td class="center">353</td>
											<td><b>37</b></td>
											<td><b>2 937</b></td>
											<td class="red">24.08.2019</td>
										</tr>
										<tr>
											<td>5 438</td>
											<td class="center">2 660</td>
											<td class="center">240</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.09.2019</td>
										</tr>
										<tr>
											<td>2 778</td>
											<td class="center">2 778</td>
											<td class="center">123</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.10.2019</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-tab-content gray hide" id="contribution">
			<div class="b-block">
				<div class="b-personal-tile-list">
					<div class="b-personal-tile-item">
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-item-name">«Накопление»</div>
							<div class="b-personal-tile-item-info">Договор № КП000000627 от 24 сентября 2018 г.</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Cумма сбережения</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>50 000 </b></span><span class="rub-icon"></span>
								</div>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Процентная ставка</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>41,5% </b></span><span class="small">годовых</span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-string">
								<div class="b-personal-tile-string-top">
									<span>Срок окончания сбережения</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>20.01.2022</b></span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-string">
								<div class="b-personal-tile-string-top">
									<span>Доход по окончанию срока</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span class="b-res-big"><b>20 000 </b><span class="rub-icon"></span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-tab-content gray hide" id="archives">
			<div class="b-block">
				<div class="b-personal-tile-list">
					<div class="b-personal-tile-item">
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-item-name">«Накопление»</div>
							<div class="b-personal-tile-item-info">Договор № КП000000627 от 24 сентября 2018 г.</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Cумма сбережения</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>50 000 </b></span><span class="rub-icon"></span>
								</div>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Процентная ставка</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>41,5% </b></span><span class="small">годовых</span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-string">
								<div class="b-personal-tile-string-top">
									<span>Срок окончания сбережения</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>20.01.2022</b></span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-string">
								<div class="b-personal-tile-string-top">
									<span>Доход по окончанию срока</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span class="b-res-big"><b>20 000 </b><span class="rub-icon"></span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="b-personal-tile-item">
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-item-name">«Доверительный»</div>
							<div class="b-personal-tile-item-info">Договор № КП000000627 от 24 сентября 2018 г.</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Cумма займа</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>15 000 </b></span><span class="rub-icon"></span>
								</div>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Процентная ставка</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>53% </b></span><span class="small">годовых</span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-item-string">
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Процент переплаты</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>16%</b></span>
								</div>
							</div>
							<div class="b-personal-tile-half-string">
								<div class="b-personal-tile-string-top">
									<span>Дата закрытия займа</span>
								</div>
								<div class="b-personal-tile-string-bottom">
									<span><b>24.03.2019 </b></span><span class="rub-icon"></span>
								</div>
							</div>
						</div>
						<div class="b-personal-tile-accordeon b-accordeon-list b-personal-tile-item-string">
							<div class="b-accordeon">
								<div class="b-accordeon-head">
									<h4>Детальная информация по займу</h4>
									<span class="b-arrow-icon"></span>
								</div>
								<div class="b-accordeon-body">
									<table class="loan-detail-table">
										<tr>
											<th>Остаток <br>долга</th>
											<th class="center">Долг</th>
											<th class="center">Проценты</th>
											<th>Штраф</th>
											<th>Сумма <br>платежа</th>
											<th>Дата <br>платежа</th>
										</tr>
										<tr class="gray">
											<td>15 000</td>
											<td class="center">2 238</td>
											<td class="center">662</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.05.2019</td>
										</tr>
										<tr class="gray">
											<td>12 762</td>
											<td class="center">2 337</td>
											<td class="center">564</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.06.2019</td>
										</tr>
										<tr class="gray">
											<td>10 425</td>
											<td class="center">2 440</td>
											<td class="center">460</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.07.2019</td>
										</tr>
										<tr class="gray">
											<td>7 986</td>
											<td class="center">2 548</td>
											<td class="center">353</td>
											<td></td>
											<td><b>2 937</b></td>
											<td>24.08.2019</td>
										</tr>
										<tr class="gray">
											<td>5 438</td>
											<td class="center">2 660</td>
											<td class="center">240</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.09.2019</td>
										</tr>
										<tr class="gray">
											<td>2 778</td>
											<td class="center">2 778</td>
											<td class="center">123</td>
											<td></td>
											<td><b>2 900</b></td>
											<td>24.10.2019</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-tab-content hide" id="settings">
			<div class="b-block">
				<div class="b-settings-block">
					<a href="create-login.php" class="b-white-tile b-cooperative-tile">
						<span class="b-cooperative-tile-title">Создание логина</span>
						<span class="b-cooperative-tile-img b-lk2-illustration"></span>
					</a>
					<a href="change-pass.php" class="b-white-tile b-cooperative-tile">
						<span class="b-cooperative-tile-title">Смена пароля</span>
						<span class="b-cooperative-tile-img b-lk1-illustration"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>




<? include "footer.php"; ?>