<?php
return [
    'title' => 'Myslides',
    'single' => 'myslide',
    'model' => 'App\Myslider',
    'columns' => [
        'id',
        'active',
        'image' => [
            'output' => '<img src="/uploads/myslides/small/(:value)" />',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool'
        ],
        'weight' =>[
            'type' => 'number'
        ],
        'image' =>[
            'type' => 'image',
            'location' => public_path().'/uploads/myslides/original/',
            'sizes' => [
                [100, 100, 'auto', public_path().'/uploads/myslides/small/', 100],
                [1000, 800, 'auto', public_path().'/uploads/myslides/large/', 100],


            ],
        ],
    ],

];