<?php
return [
    'title' => 'Resgalleries',
    'single' => 'image',//'resimage',
    'model' => 'App\Resgallery',
    'columns' => [
        'id',
        'active',
        'image' => [
            'output' => '<img src="/uploads/resimages/small/(:value)" />',
        ],
    ],
    'edit_fields' => [
        'resume' => [
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
            'location' => public_path(). '/uploads/resimages/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/resimages/small/', 100 ],
                [500, 500, 'auto', public_path() . '/uploads/resimages/medium/', 100 ],
                [1000, 800, 'auto', public_path() . '/uploads/resimages/large/', 100 ]
            ],
        ],
    ],
];