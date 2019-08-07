<? 

$params = array(
	"TITLE" => "Смена пароля",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
		"Личный кабинет" => "personal.php",
	),
);

include "header.php";

?>

<div class="b-settings-form fadeDown anim delay300" data-cont=".b-breadcrumbs">
	<div class="b-block">
		<form action="ajax/pass-json.php" method="POST" class="settings-form change-pass-form">
			<p>Вы можете задать или изменить логин, который будет использоваться для входа в учетную запись</p>
			<div class="b-input">
				<input type="password" name="oldpass" required>
				<label for="oldpass">Старый пароль</label>
			</div>
			<div class="b-input">
				<input type="password" name="newpass" required>
				<label for="newpass">Новый пароль</label>
			</div>
			<div class="b-input">
				<input type="password" name="confirmpass" required>
				<label for="confirmpass">Повторите новый пароль</label>
			</div>
			<div class="b-settings-text hide"></div>
			<a href="#" class="b-btn ajax">Сохранить</a>
		</form>
	</div>
</div>

<? include "footer.php"; ?>