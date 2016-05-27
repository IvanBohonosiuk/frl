<?php

return [
	'title' => 'Меню',
	'single' => 'елемент',
	'model' => 'App\Menu',
	'columns' => [
	    'id',
	    'active',
	    'title',
	    'position'
	],
	'edit_fields' => [
	    'active' => [
	        'title' => 'Активно',
	        'type' => 'bool'
	    ],
	    'weight' => [
	        'title' => 'Порядок',
	        'type' => 'number'
	    ],
	    'title' => [
	    	'title' => 'Заголовок',
	    	'type' => 'text'
	    ],
	    'url' => [
	    	'title' => 'Посилання',
	    	'type' => 'text'
	    ],
	    'position' => [
	    	'title' => 'Позиція',
	    	'type' => 'enum',
	    	'options' => [
	    		'left',
	    		'right',
	    	],
	    ],
	],
	'filters' => [
		'active' => [
	        'title' => 'Активно',
	        'type' => 'bool'
	    ],
	    'title' => [
	    	'title' => 'Заголовок',
	    	'type' => 'text'
	    ],
	    'position' => [
	    	'title' => 'Позиція',
	    	'type' => 'enum',
	    	'options' => [
	    		'left',
	    		'right',
	    	],
	    ],
	],
];