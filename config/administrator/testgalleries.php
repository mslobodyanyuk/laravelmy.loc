<?php
return [
    'title' => 'Testgalleries',
    'single' => 'image',
    'model' => 'App\Testgallery',
    'columns' => [
        'id',
        'active',
        'image' => [
            'output' => '<img src="/uploads/testimages/small/(:value)" />',
        ],
    ],
    'edit_fields' => [
        'test' => [
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'active' => [
            'type' => 'bool',
        ],
        'weight' => [
            'type' => 'number',
        ],
        'alt' => [
            'type' => 'text',
        ],
        'title' => [
            'type' => 'text',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path(). '/uploads/testimages/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/testimages/small/', 100 ],
                [500, 500, 'auto', public_path() . '/uploads/testimages/medium/', 100 ],
                [1000, 800, 'auto', public_path() . '/uploads/testimages/large/', 100 ]
            ],
        ],
    ],
];