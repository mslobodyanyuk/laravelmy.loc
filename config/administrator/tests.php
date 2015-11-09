<?php

return [
    'title' => 'Tests',
    'single' => 'test',
    'model' => 'App\Test',
    'columns' => [
        'id',
        'active',
        'title'
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'content' => [
            'type' => 'wysiwyg',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path(). '/uploads/test/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/test/medium/', 100 ],
                [1000, 800, 'auto', public_path() . '/uploads/test/large/', 100 ]
            ],
        ],
    ],
    'form_width' => 800,
];