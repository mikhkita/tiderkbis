<?php 

	/*$arRes = array(
		'RESULT' => 'success',
		// 'RESULT' => 'error',
		'ITEMS' => array(
			0 => array(
				'TITLE' => 'Доверительный',
				'SUBTITLE' => 'с начислением процентов на остаток долга',
				'ITEM_INFO' => 'Без поручителей, без справки о доходах, на сумму / до 15 000 рублей',
				'DETAIL_URL' => 'detail.php',
				'INCOME' => 25000,
				'END_SUM' => 40000,
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
				'ADVATAGES_LIST' => array(
					0 => array(
						'TEXT' => 'Возможность пополнения',
						'ACTIVE' => 'Y'
					),
					1 => array(
						'TEXT' => 'Капитализация или выплата процентов',
					),
					2 => array(
						'TEXT' => 'Досрочный возврат денег',
					),
				)
			),
		),
	);*/

	// $arRes = array(
	// 	'RESULT' => 'success',
	// 	'ITEMS' => array(
	// 		0 => array(
	// 			'ID' => 1,
	// 			'TITLE' => 'Доверительный',
	// 			'ITEM_INFO' => 'Без поручителей, без справки о доходах, на сумму / до 15 000 рублей',
	// 			'DETAIL_URL' => 'detail.php',
	// 			'MONTHLY_PAYMENT' => array(
	// 				'MIN' => 2200,
	// 				'MAX' => 2500
	// 			),
	// 			'OVERPAYMENT' => 16,
	// 			'PERCENT_RATE' => 41.5,
	// 		),
	// 		1 => array(
	// 			'ID' => 2,
	// 			'TITLE' => 'Потребительский',
	// 			'SUBTITLE' => 'с начислением процентов на остаток долга',
	// 			'ITEM_INFO' => 'Без обеспечения, начисление процентов на остаток долга',
	// 			'DETAIL_URL' => 'detail.php',
	// 			'MONTHLY_PAYMENT' => 2900,
	// 			'OVERPAYMENT' => array(
	// 				'MAX' => 26.5
	// 			),
	// 			'PERCENT_RATE' => array(
	// 				'MIN' => 41.5
	// 			),
	// 		),
	// 		2 => array(
	// 			'ID' => 3,
	// 			'TITLE' => 'Потребительский',
	// 			'SUBTITLE' => 'с начислением процентов на остаток долга',
	// 			'ITEM_INFO' => 'Без обеспечения, начисление процентов на остаток долга',
	// 			'DETAIL_URL' => 'detail.php',
	// 			'MONTHLY_PAYMENT' => 2900,
	// 			'OVERPAYMENT' => array(
	// 				'MAX' => 26.5
	// 			),
	// 			'PERCENT_RATE' => array(
	// 				'MIN' => 41.5
	// 			),
	// 		),
	// 	),
	// );

	$arRes = array(
		'RESULT' => 'success',
		'ITEMS' => array(
			0 => array(
				'ID' => 2,
				'TITLE' => 'Доход',
				// 'DETAIL_URL' => 'savings.php',
				'INCOME' => 25000,
				'END_SUM' => 40000,
				'PERCENT_RATE' => 7,
				'ADVATAGES_LIST' => array(
					0 => array(
						'TEXT' => 'Возможность пополнения',
						'ACTIVE' => 'Y'
					),
					1 => array(
						'TEXT' => 'Капитализация или выплата процентов',
						'ACTIVE' => 'Y'
					),
					2 => array(
						'TEXT' => 'Досрочный возврат денег',
					),
				)
			),
			1 => array(
				'ID' => 1,
				'TITLE' => 'Накопление',
				// 'DETAIL_URL' => 'savings.php',
				'INCOME' => 25000,
				'END_SUM' => 40000,
				'PERCENT_RATE' => 7,
				'ADVATAGES_LIST' => array(
					0 => array(
						'TEXT' => 'Возможность пополнения',
						'ACTIVE' => 'Y'
					),
					1 => array(
						'TEXT' => 'Капитализация или выплата процентов',
					),
					2 => array(
						'TEXT' => 'Досрочный возврат денег',
					),
				)
			),
			2 => array(
				'ID' => 1,
				'TITLE' => 'Процент',
				// 'DETAIL_URL' => 'savings.php',
				'INCOME' => 25000,
				'END_SUM' => 40000,
				'PERCENT_RATE' => 7,
				'ADVATAGES_LIST' => array(
					0 => array(
						'TEXT' => 'Возможность пополнения',
					),
					1 => array(
						'TEXT' => 'Капитализация или выплата процентов',
					),
					2 => array(
						'TEXT' => 'Досрочный возврат денег',
					),
				)
			),
			3 => array(
				'ID' => 1,
				'TITLE' => 'Накопление',
				'FOR_PENS' => true,
				// 'DETAIL_URL' => 'savings.php',
				'INCOME' => 25000,
				'END_SUM' => 40000,
				'PERCENT_RATE' => 7,
				'ADVATAGES_LIST' => array(
					0 => array(
						'TEXT' => 'Возможность пополнения',
						'ACTIVE' => 'Y'
					),
					1 => array(
						'TEXT' => 'Капитализация или выплата процентов',
					),
					2 => array(
						'TEXT' => 'Досрочный возврат денег',
					),
				)
			),
		),
	);

	echo json_encode($arRes);

?>