<?php

return [
	'title' => 'Ролі користувача',
	'single' => 'роль',
	'model' => 'Bican\Roles\Models\Role',
	'columns' => [
	    'id',
	    'name',
	    'slug',
	    'description',
	    'level'
	],
	'edit_fields' => [
	    'name' => [
	        'title' => 'Назва',
	        'type' => 'text'
	    ],
	    'slug' => [
	        'title' => 'Слаг',
	        'type' => 'text'
	    ],
	    'description' => [
	        'title' => 'Опис',
	        'type' => 'textarea'
	    ],
	    'level' => [
	        'title' => 'Рівень',
	        'type' => 'number'
	    ],
	],
];