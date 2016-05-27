<?php

return [
	'title' => 'Проекти',
	'single' => 'проект',
	'model' => 'App\projects',
	'columns' => [
	    'id',
	    'active' => [
	    	'title' => 'Опубліковано'
	    ],
	    'title',
	    // 'img' => [
	    // 	'output' => '<img src="/uploads/projects/small/(:value)" />'
	    // ],
	    'price',
	    'end_project'
	],
	'edit_fields' => [
		'active' => [
			'title' => 'Опубліковано',
			'type' => 'bool'
		],
	    'title' => [
	        'title' => 'Назва проекту',
	        'type' => 'text'
	    ],
	    'url' => [
	    	'title' => 'Адреса сторінки',
	    	'type' => 'text'
	    ],
	    'description' => [
	        'title' => 'Опис проекту',
	        'type' => 'wysiwyg'
	    ],
	    'tags' => [
	        'title' => 'Теги',
	        'type' => 'text'
	    ],
	    'categories' => [
			'title' => 'Категорія',
			'type' => 'relationship',
			'name_field' => 'title'
		],
	    'price' => [
	        'title' => 'Ціна',
	        'type' => 'number',
	        'symbol' => '$'
	    ],
	    'img' => [
	        'title' => 'Зображення',
	        'type' => 'image',
	        'location' => public_path() . '/uploads/projects/originals/',
	        'sizes' => [
		        [65, 57, 'crop', public_path() . '/uploads/projects/small/', 100],
		        [220, 138, 'landscape', public_path() . '/uploads/projects/medium/', 100],
		        [383, 276, 'fit', public_path() . '/uploads/projects/full/', 100]
		    ]
	    ],
	    'files' => [
	        'title' => 'Файли',
	        'type' => 'file',
	        'location' => public_path() . '/uploads/projects/documents/',
	        'mimes' => 'pdf,psd,doc,docx,xlsx,xls,rar,zip',
	    ],
	    'end_project' => [
	        'title' => 'Закінчення проекту',
	        'type' => 'datetime',
	        'date_format' => 'd.m.yy ', 
    		'time_format' => 'HH:mm'
	    ],
	    'remote' => [
	        'title' => 'Віддалена робота',
	        'type' => 'bool'
	    ],
	],
	'form_width' => 500,
];