<?php

return [
    'title' => 'Resumes',
    'single' => 'resume',
    'model' => 'App\Resume',
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
            'location' => public_path(). '/uploads/resume/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/resume/medium/', 100 ],
                [1000, 800, 'auto', public_path() . '/uploads/resume/large/', 100 ]
            ],
        ],
    ],
    'form_width' => 800,
];