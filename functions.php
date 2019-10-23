<?php

// カスタムヘッダー
add_theme_support(
	'custom-header',
	array(
		'width'         => 950,
		'height'        => 295,
		'header-text'   => false,
		'default-image' => '%s/images/top/main_image.png',
	)
);

// カスタムメニュー
register_nav_menus(
	array(
		'place_global'  => 'グローバル',
		'place_utility' => 'ユーティリティ',
	)
);
