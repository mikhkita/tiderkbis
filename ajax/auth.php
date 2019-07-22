<?php 
	
	//success

	// $arRes = array(
	// 	'RESULT' => 'success',
	// 	'ACTION' => 'reload',
	// );

	//error
	$arRes = array(
		'RESULT' => 'error',
		'ERROR' => 'Введён неправильный логин или пароль'
	);



	echo json_encode($arRes);
?>