<? include "header.php";?>

<? $withoutRating = true; ?>
<div class="b-personal-form">
	<div class="b-block">
		<div class="b-personal-form-block" id="auth">
			<h1>Авторизация</h1>
			<div class="b-auth-form">
				<form action="ajax/auth.php">
					<div class="b-input">
						<input type="text" name="login" required>
						<label for="login">Логин</label>
					</div>
					<div class="b-input">
						<input type="password" name="password" required>
						<label for="password">Пароль</label>
					</div>
					<div class="b-btn-cont">
						<a href="#" class="b-remember-pass">Забыли пароль?</a>
					</div>
					<div class="b-popup-error"></div>
					<div class="b-btn-cont">
						<a href="#" class="b-btn ajax"><span class="b-btn-text">Войти</span></a>
					</div>
				</form>
				<div class="b-btn-cont">
					<a href="#reg" class="b-change-form-link">Регистрация</a>
				</div>
			</div>
		</div>
		<div class="b-personal-form-block hide" id="reg">
			<h1>Регистрация</h1>
			<div class="b-reg-form">
				<form action="ajax/auth.php" class="form-with-politics" method="POST">
					<input type="hidden" id="politics-agreement" value="N">
					<h4>Тип регистрации:</h4>
					<div class="b-tumbler-block">
						<div class="b-tumbler-text b-tumbler-text-left active">По номеру договора <br>займа и ФИО</div>
						<label class="b-tumbler-item">
							<input type="checkbox" class="tumbler" name="reg-type">
							<div class="b-tumbler"></div>
						</label>
						<div class="b-tumbler-text b-tumbler-text-right">По номеру договора <br>накопления и ФИО</div>
					</div>
					<div class="b-input">
						<input type="text" name="doc-number" required>
						<label for="doc-number">Номер договора</label>
					</div>
					<div class="b-input">
						<input type="text" name="fio" required>
						<label for="fio">ФИО</label>
					</div>
					<div class="b-btn-cont">
						<a href="#" class="b-remember-pass">Забыли пароль?</a>
					</div>
					<div class="b-popup-error"></div>
					<div class="b-btn-cont">
						<a href="#" class="b-btn ajax"><span class="b-btn-text">Регистрация</span></a>
					</div>
				</form>
				<div class="b-btn-cont">
					<a href="#auth" class="b-change-form-link">Вход</a>
				</div>
			</div>
		</div>
	</div>
</div>

<? include "footer.php"; ?>