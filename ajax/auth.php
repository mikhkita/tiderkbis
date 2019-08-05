<?php 
	
	//error

	// $arRes = array(
	// 	'RESULT' => 'error',
	// );

	//success

	$arRes = array(
		'RESULT' => 'success',
		'MOVETO' => 'personal.php'
	);

	echo json_encode($arRes);
?>