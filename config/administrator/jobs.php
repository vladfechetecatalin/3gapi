<?php

return array(
	'title' => 'Jobs',
	'single' => 'job',
	'model' => 'App\Job',

	'columns' => array(
	    'title' => array(
	        'title' => 'Title'
	    ),
	    'description' => [
	    	'title' => 'Description'
	    ],

	    'image' => array(
	        'title' => 'Image',
	        'output' => '<img src="/uploads/thumbs/(:value)" height="100" />',
	    ),
	    // 'link' => array(
	    //     'title' => 'Link',
	    //     'output' => '<a href="(:value)" target="_blank">(:value)</a>',
	    // )
	),

	'edit_fields' => array(
	    'title' => array(
	        'title' => 'Title',
	        'type' => 'text'
	    ),
	    'description' => array(
		    'title' => 'Body',
		    'type' => 'wysiwyg',
		),
	    'image' => array(
		    'title' => 'Image',
		    'type' => 'image',
		    'location' => public_path() . '/uploads/originals/',
		    'naming' => 'random',
		    'length' => 20,
		    'size_limit' => 2,
		    'sizes' => array(
		        array(65, 57, 'crop', public_path() . '/uploads/thumbs/', 100)
		    )
		),
		'junior' => array(
		    'type' => 'bool',
		    'title' => 'Junior level',
		),
		'mid' => array(
		    'type' => 'bool',
		    'title' => 'Mid level',
		),
		'senior' => array(
		    'type' => 'bool',
		    'title' => 'Senior level',
		),
	),

	'form_width' => 600,

	'filters' => array(
	    'title' => array(
	        'title' => 'Title',
	    ),
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