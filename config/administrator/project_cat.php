<?php

return [
	'title' => 'Категорії проектів',
	'single' => 'категорію',
	'model' => 'App\Project_cat',
	'columns' => [
	    'id',
	    'active',
	    'title'
	],
	'edit_fields' => [
	    'active' => [
	        'title' => 'Опубліковано',
	        'type' => 'bool'
	    ],
	    'weight' => [
	        'title' => 'Порядок',
	        'type' => 'number'
	    ],
	    'title' => [
	        'title' => 'Назва',
	        'type' => 'text'
	    ],
	    'slug' => [
	        'title' => 'Слаг',
	        'type' => 'text'
	    ],
	    'img' => [
	        'title' => 'Зображення',
	        'type' => 'image',
	        'location' => public_path() . '/uploads/projects_cat/originals/',
	        'sizes' => [
		        [32, 32, 'auto', public_path() . '/uploads/projects_cat/small/', 100],
		        [100, 100, 'auto', public_path() . '/uploads/projects_cat/medium/', 100]
		    ]
	    ],
	],
];