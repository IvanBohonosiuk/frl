<?php

return [
	'title' => 'Користувачі',
	'single' => 'користувача',
	'model' => 'App\User',
	'columns' => [
	    'id',
	    'email'
	],
	'edit_fields' => [
	    'email' => [
	        'title' => 'E-mail',
	        'type' => 'text'
	    ],
	],
];