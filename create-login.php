<? 

$params = array(
	"TITLE" => "Создание логина",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
		"Личный кабинет" => "personal.php",
	),
);

include "header.php";

?>

<div class="b-settings-form fadeDown anim delay300" data-cont=".b-breadcrumbs">
	<div class="b-block">
		<form action="ajax/login-json.php" method="POST" class="settings-form">
			<p>Вы можете задать или изменить логин, который будет использоваться для входа в учетную запись</p>
			<div class="b-input">
				<input type="text" name="login" required>
				<label for="login">Логин</label>
			</div>
			<div class="b-settings-text hide"></div>
			<a href="#" class="b-btn ajax">Сохранить</a>
		</form>
	</div>
</div>

<? include "footer.php"; ?>