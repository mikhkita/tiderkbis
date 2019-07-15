<?php 

	$arRes = array(
		'RESULT' => 'SUCCESS',
		// 'RESULT' => 'ERROR',
		'ITEMS' => array(
			0 => array(
				'TITLE' => 'Доверительный',
				'SUBTITLE' => 'с начислением процентов на остаток долга',
				'ITEM_INFO' => 'Без поручителей, без справки о доходах,  на сумму / до 15 000 рублей',
				'DETAIL_URL' => 'detail.php',
				'MONTHLY_PAYMENT' => 2900,
				// 'MONTHLY_PAYMENT' => array(
				// 	'MIN' => 2900,
				// 	'MAX' => 3200,
				// ),
				'OVERPAYMENT' => 16,
				// 'OVERPAYMENT' => array(
				// 	'MIN' => 16,
				// 	'MAX' => 20,
				// ),
				'PERCENT_RATE' => 41.5,
				// 'PERCENT_RATE' => array(
				// 	'MIN' => 20,
				// 	'MAX' => 26.5,
				// ),
				'LOAN_TERM' => 6,
				// 'LOAN_TERM' => array(
				// 	'MIN' => 3,
				// 	'MAX' => 12,
				// ),
				'ADVATAGES_LIST' => array(
					0 => array(
						'TEXT' => 'Возможности пополнения',
						'ACTIVE' => 'Y'
					),
					1 => array(
						'TEXT' => 'Капитализация или выплата процентов',
						'ACTIVE' => 'N'
					),
					2 => array(
						'TEXT' => 'Досрочный возврат денег',
						'ACTIVE' => 'N'
					),
				)
			),
		),
	);
	
	echo "<pre>";
	var_dump($arRes);
	echo "</pre>";

?>