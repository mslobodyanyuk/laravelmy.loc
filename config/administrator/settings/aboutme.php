<?php
return [
    'title' => 'About me page',
    'edit_fields' => [
        'content' => [
            'type' => 'textarea',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path().'/uploads/aboutme/',
        ]
    ],
];