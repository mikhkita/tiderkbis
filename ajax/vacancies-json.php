<?php 

	$arRes = array(
		'RESULT' => 'success',
		'ITEMS' => array(
			0 => array(
				'NAME' => 'Оператор колл-центра',
				'CITY' => 'Барабинск',
				'POSITION' => 'Поддержка, продажи',
				'EXPERIENCE' => 'Без опыта',
				'DETAIL_URL' => 'vacancy-detail.php'
			),
			1 => array(
				'NAME' => 'Управляющий отделом',
				'CITY' => 'Томск',
				'POSITION' => 'Поддержка, продажи',
				'DETAIL_URL' => 'vacancy-detail.php'
			),
			2 => array(
				'NAME' => 'Сотрудник отделения',
				'CITY' => 'Томск',
				'POSITION' => 'Поддержка, продажи',
				'EXPERIENCE' => 'Без опыта',
				'DETAIL_URL' => 'vacancy-detail.php'
			),
		),
	);

	echo json_encode($arRes);

?>