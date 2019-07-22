<? 

$params = array(
	"TITLE" => "Онлайн-приёмная",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
	),
);

include "header.php";

?>

<div class="b-reception-cont">
	<div class="b-block">
		<h3>Задать вопрос</h3>
		<form action="#">
			<div class="b-tumbler-block">
				<div class="b-tumbler-text b-tumbler-text-left active">Хочу, чтобы мне<br>позвонили</div>
				<label class="b-tumbler-item">
					<input type="checkbox" class="tumbler">
					<div class="b-tumbler"></div>
				</label>
				<div class="b-tumbler-text b-tumbler-text-right">Хочу, чтобы мне<br>написали</div>
			</div>
			<div class="b-input-cont">
				<div class="b-half-input-cont">
					<div class="b-input">
						<input type="text" name="name">
						<label for="name">Ваше имя</label>
					</div>
					<div class="b-input">
						<input type="text" name="phone">
						<label for="phone">Ваш телефон</label>
					</div>
				</div>
				<div class="b-half-input-cont">
					<div class="b-input">
						<textarea name="comment" rows="3"></textarea>
						<label for="comment">Ваше сообщение</label>
					</div>
				</div>
			</div>
			<div class="b-reception-bottom-cont">
				<div class="b-block">
					<div class="b-reception-cont-string">
						<a href="#" class="ajax b-btn"><span class="b-btn-text">Задать вопрос</span></a>
						<div class="b-error-text hide">Некоторые заполненные поля  содержат ошибку</div>
					</div>
					<div class="b-reception-cont-string">
						<div class="b-loan-app-btn-text">Нажимая кнопку «Оформить заём», я даю согласие  на <a href="/personal">обработку моих персональных данных</a></div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="b-questions-answers-cont">
	<div class="b-block">
		<h3>Вопросы и ответы</h3>
	</div>
	<div class="b-left-calc">
		<div class="b-calc-tab-list">
			<div class="b-block">
				<a href="#loan" class="b-calc-tab-item active">Вопросы о займах</a>
				<a href="#savings" class="b-calc-tab-item">Вопросы о сбережениях</a>
			</div>
		</div>
		<div class="b-calc-form-block" id="loan">
			<div class="b-block">
				<div class="b-question-tile-list">
					<div class="b-white-tile b-question-tile">
						<div class="b-question-person-block">
							<div class="b-question-name">Екатерина</div>
							<div class="b-question-date">1.07.2019</div>
						</div>
						<div class="b-question-text">
							Сколько нужен стаж работы на последнем месте, чтоб оформить займ в 15000 рублей?
						</div>
						<div class="b-answer-block">
							<div class="b-answer-name">Кредитный консультант:</div>
							<div class="b-answer-text">Здравствуйте, Екатерина. Да, можно. Предлагаем Вам позвонить в офис кооператива, для рассмотрения возможных вариантов получения займа. С номерами телефонов кооперативных участков Вы можете ознакомиться в разделе «Контакты». Также Вы можете заполнить онлайн-заявку и наши специалисты свяжутся с Вами в ближайшее время. Надеемся, что мы смогли Вам помочь.</div>
						</div>
					</div>
					<div class="b-white-tile b-question-tile">
						<div class="b-question-person-block">
							<div class="b-question-name">Виктория</div>
							<div class="b-question-date">1.07.2019</div>
						</div>
						<div class="b-question-text">
							Здравствуйте, если у вас взяли займ 15000, но не внесли ещё платёж, можно оформить займ на 150000 руб.,  с справкой о заработной плате, погасить тот займ в 15000 и платить один этот?
						</div>
						<div class="b-answer-block">
							<div class="b-answer-name">Кредитный консультант:</div>
							<div class="b-answer-text">Здравствуйте, Екатерина. Да, можно. Предлагаем Вам позвонить в офис кооператива, для рассмотрения возможных вариантов получения займа. С номерами телефонов кооперативных участков Вы можете ознакомиться в разделе «Контакты». Также Вы можете заполнить онлайн-заявку и наши специалисты свяжутся с Вами в ближайшее время. Надеемся, что мы смогли Вам помочь.</div>
						</div>
					</div>
					<div class="b-white-tile b-question-tile">
						<div class="b-question-person-block">
							<div class="b-question-name">Анастасия</div>
							<div class="b-question-date">1.07.2019</div>
						</div>
						<div class="b-question-text">
							Здравствуйте, если у вас взяли займ 15000, но не внесли ещё платёж, можно оформить займ на 150000 руб.,  с справкой о заработной плате, погасить тот займ в 15000 и платить один этот?
						</div>
						<div class="b-answer-block">
							<div class="b-answer-name">Кредитный консультант:</div>
							<div class="b-answer-text">Здравствуйте, Екатерина. Да, можно. Предлагаем Вам позвонить в офис кооператива, для рассмотрения возможных вариантов получения займа. С номерами телефонов кооперативных участков Вы можете ознакомиться в разделе «Контакты». Также Вы можете заполнить онлайн-заявку и наши специалисты свяжутся с Вами в ближайшее время. Надеемся, что мы смогли Вам помочь.</div>
						</div>
					</div>
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
		<div class="b-calc-form-block hide" id="savings">
			<div class="b-block">
				<div class="b-question-tile-list">
					<div class="b-white-tile b-question-tile">
						<div class="b-question-person-block">
							<div class="b-question-name">Анастасия</div>
							<div class="b-question-date">1.07.2019</div>
						</div>
						<div class="b-question-text">
							Здравствуйте, если у вас взяли займ 15000, но не внесли ещё платёж, можно оформить займ на 150000 руб.,  с справкой о заработной плате, погасить тот займ в 15000 и платить один этот?
						</div>
						<div class="b-answer-block">
							<div class="b-answer-name">Кредитный консультант:</div>
							<div class="b-answer-text">Здравствуйте, Екатерина. Да, можно. Предлагаем Вам позвонить в офис кооператива, для рассмотрения возможных вариантов получения займа. С номерами телефонов кооперативных участков Вы можете ознакомиться в разделе «Контакты». Также Вы можете заполнить онлайн-заявку и наши специалисты свяжутся с Вами в ближайшее время. Надеемся, что мы смогли Вам помочь.</div>
						</div>
					</div>
					<div class="b-white-tile b-question-tile">
						<div class="b-question-person-block">
							<div class="b-question-name">Екатерина</div>
							<div class="b-question-date">1.07.2019</div>
						</div>
						<div class="b-question-text">
							Сколько нужен стаж работы на последнем месте, чтоб оформить займ в 15000 рублей?
						</div>
						<div class="b-answer-block">
							<div class="b-answer-name">Кредитный консультант:</div>
							<div class="b-answer-text">Здравствуйте, Екатерина. Да, можно. Предлагаем Вам позвонить в офис кооператива, для рассмотрения возможных вариантов получения займа. С номерами телефонов кооперативных участков Вы можете ознакомиться в разделе «Контакты». Также Вы можете заполнить онлайн-заявку и наши специалисты свяжутся с Вами в ближайшее время. Надеемся, что мы смогли Вам помочь.</div>
						</div>
					</div>
					<div class="b-white-tile b-question-tile">
						<div class="b-question-person-block">
							<div class="b-question-name">Виктория</div>
							<div class="b-question-date">1.07.2019</div>
						</div>
						<div class="b-question-text">
							Здравствуйте, если у вас взяли займ 15000, но не внесли ещё платёж, можно оформить займ на 150000 руб.,  с справкой о заработной плате, погасить тот займ в 15000 и платить один этот?
						</div>
						<div class="b-answer-block">
							<div class="b-answer-name">Кредитный консультант:</div>
							<div class="b-answer-text">Здравствуйте, Екатерина. Да, можно. Предлагаем Вам позвонить в офис кооператива, для рассмотрения возможных вариантов получения займа. С номерами телефонов кооперативных участков Вы можете ознакомиться в разделе «Контакты». Также Вы можете заполнить онлайн-заявку и наши специалисты свяжутся с Вами в ближайшее время. Надеемся, что мы смогли Вам помочь.</div>
						</div>
					</div>
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
	</div>
</div>

<? include "advices.php"; ?>

<? include "footer.php"; ?>