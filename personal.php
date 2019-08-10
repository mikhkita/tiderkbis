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
		<a href="#settings" class="b-personal-tab b-settings-link b-settings-link-mobile">
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
						<div class="b-cooperative-tile-img b-lk2-illustration">
							<div class="b-blob-cont">
								<svg viewbox="-10 -40 234 234">
									<path fill="#FFF4B8">
									    <animate attributeName="d" dur="12s" repeatCount="indefinite" values="
							              M15.1235 54.8552C39.2807 17.115 148.806 -4.74239 191.525 24.5938C244.033 60.6654 247.741 137.296 203.299 156.317C171.719 169.779 146.735 123.834 119.488 123.834C88.4826 123.834 55.4232 137.244 28.3856 128.096C13.6529 123.082 -19.2325 108.548 15.1235 54.8552Z;

							              M48.1605 29.4155C87.1605 2.32257 152.16 -5.67786 193.185 29.416C299.16 130.823 154.661 192.416 104.661 152.823C68.1605 111.416 89.1605 94.416 68.6605 83.416C39.6605 67.855 16.6605 102.416 4.6605 83.416C3.16052 78.916 -6.8395 67.6236 48.1605 29.4155Z;

							              M60.3676 32.8393C99.3675 5.74641 138.343 -9.75477 179.368 25.3391C280.368 148.34 203.868 173.756 132.368 161.839C84.3675 153.839 67.3676 154.839 46.8676 143.839C17.8676 128.278 0.867554 87.8398 5.86755 64.8398C11.072 40.8994 45.3676 43.2597 60.3676 32.8393Z;

							              M112.089 11.9664C151.089 -15.1265 212.089 23.9666 227.089 65.4669C238.668 97.5 202.089 73.4623 173.427 82C149.927 89 161.573 195.5 55.5 159C16.1387 145.456 -4.6196 79.7779 8.08942 59.9668C25.0894 33.4668 87.0894 29.3336 112.089 11.9664Z;

							              M92.5 62.5C131.5 35.4071 185.5 -33.0004 222 21.9998C243.5 58.999 211.245 142.465 186 158.499C149 182 79.5 151.5 51 129.999C21.7637 107.943 -5.20902 84.8106 7.50001 64.9995C24.5 38.4995 67.5 79.8672 92.5 62.5Z;

							              M15.1235 54.8552C39.2807 17.115 148.806 -4.74239 191.525 24.5938C244.033 60.6654 247.741 137.296 203.299 156.317C171.719 169.779 146.735 123.834 119.488 123.834C88.4826 123.834 55.4232 137.244 28.3856 128.096C13.6529 123.082 -19.2325 108.548 15.1235 54.8552Z;"/>
								  </path>
								</svg> 
							</div>
							<div class="illustration-image"></div>
						</div>
					</a>
					<a href="change-pass.php" class="b-white-tile b-cooperative-tile">
						<span class="b-cooperative-tile-title">Смена пароля</span>
						<div class="b-cooperative-tile-img b-lk1-illustration">
							<div class="b-blob-cont">
								<svg viewbox="-10 -40 234 234">
									<path fill="#D8FFC5">
									    <animate attributeName="d" dur="12s" repeatCount="indefinite" values="
							            M60.3676 32.8393C99.3675 5.74641 138.343 -9.75477 179.368 25.3391C280.368 148.34 203.868 173.756 132.368 161.839C84.3675 153.839 67.3676 154.839 46.8676 143.839C17.8676 128.278 0.867554 87.8398 5.86755 64.8398C11.072 40.8994 45.3676 43.2597 60.3676 32.8393Z;

							            M112.089 11.9664C151.089 -15.1265 212.089 23.9666 227.089 65.4669C238.668 97.5 202.089 73.4623 173.427 82C149.927 89 161.573 195.5 55.5 159C16.1387 145.456 -4.6196 79.7779 8.08942 59.9668C25.0894 33.4668 87.0894 29.3336 112.089 11.9664Z;

							            M92.5 62.5C131.5 35.4071 185.5 -33.0004 222 21.9998C243.5 58.999 211.245 142.465 186 158.499C149 182 79.5 151.5 51 129.999C21.7637 107.943 -5.20902 84.8106 7.50001 64.9995C24.5 38.4995 67.5 79.8672 92.5 62.5Z;

							            M15.1235 54.8552C39.2807 17.115 148.806 -4.74239 191.525 24.5938C244.033 60.6654 247.741 137.296 203.299 156.317C171.719 169.779 146.735 123.834 119.488 123.834C88.4826 123.834 55.4232 137.244 28.3856 128.096C13.6529 123.082 -19.2325 108.548 15.1235 54.8552Z;

							            M48.1605 29.4155C87.1605 2.32257 152.16 -5.67786 193.185 29.416C299.16 130.823 154.661 192.416 104.661 152.823C68.1605 111.416 89.1605 94.416 68.6605 83.416C39.6605 67.855 16.6605 102.416 4.6605 83.416C3.16052 78.916 -6.8395 67.6236 48.1605 29.4155Z;

							            M60.3676 32.8393C99.3675 5.74641 138.343 -9.75477 179.368 25.3391C280.368 148.34 203.868 173.756 132.368 161.839C84.3675 153.839 67.3676 154.839 46.8676 143.839C17.8676 128.278 0.867554 87.8398 5.86755 64.8398C11.072 40.8994 45.3676 43.2597 60.3676 32.8393Z;
							            "/>
								  </path>
								</svg> 
							</div>
							<div class="illustration-image"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>




<? include "footer.php"; ?>