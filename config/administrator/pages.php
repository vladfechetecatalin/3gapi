<?php

return array(
	'title' => 'Pages',
	'single' => 'pages',
	'model' => 'App\Page',

	'columns' => array(
	    'title' => array(
	        'title' => 'Title'
	    )
	),

	'edit_fields' => array(
	    'title' => array(
	        'title' => 'Title',
	        'type' => 'text'
	    ),
	    'body' => array(
	        'title' => 'Page content',
	        'type' => 'wysiwyg'
	    ),

		'url' => array(
			'type' => 'enum',
			'title' => 'URL',
			'options' => array(
				'garmin-cluj' => 'About Garmin Cluj page (/garmin-cluj)',
				'garmin-international' => 'About Garmin International page (/garmin-international)',
				'team' => 'About the team page (/team)',
				'terms-and-conditions' => 'Terms and Conditions page (/terms-and-conditions)',
				'privacy' => 'Privacy page (/privacy)',
				'cookies' => 'Cookie usage page (/cookies)',
				'security' => 'Security page (/security)'
			)
		),
	),

	'form_width' => 600,

	'filters' => array(
	    'title' => array(
	        'title' => 'Title',
	    )
	),

	// 'permission'=> function() {
	//     return Auth::user()->hasRole('developer');
	// },

	// 'action_permissions'=> array(
	//     'delete' => function($model)
	//     {
	//         return Auth::user()->has_role('developer');
	//     }
	// ),

	// 'rules' => array(
	//     'name' => 'required',
	//     'age' => 'required|integer|min:18',
	// ),

	'sort' => array(
	    'field' => 'created_at',
	    'direction' => 'asc',
	),

	// 'link' => function($model)
	// {
	//     return URL::route('product', array($model->collection()->first()->uri, $model->uri));
	// },
);