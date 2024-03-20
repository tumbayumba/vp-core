<?php
return [
    'machine_1' => [
        'tools' => [
            'drill' => [
                'operations' => [
                    'drilling' => [
                        'restrictions' => [
                            'min_radius' => 1,
                            'min_indent_to_side' => 50,
                        ],
                    ],
                ],
            ],
            'mill' => [
                'operations' => [
                    'drilling' => [
                        'restrictions' => [
                            'min_radius' => 3,
                            'min_indent_to_side' => 10,
                        ],
                    ],
                    'side_milling',
                    'cutouts',
                ],
            ],
        ],
    ],
    'machine_2' => [
        'tools' => [
            'drill' => [],
            'mill' => [],
            'saw',
            'handmade',
        ],
    ],
];
