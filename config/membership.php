<?php

return [
    'gender' => [
        'male' => [
            'text' => env('MALE'),
            'id' => env('MALE_ID'),
        ],
        'female' => [
            'text' => env('FEMALE'),
            'id' => env('FEMALE_ID'),
        ],
    ],

    'flag' => [
        'yes' => [
            'text' => env('YES'),
            'id' => env('YES_ID')
        ],
        'no' => [
            'text' => env('NO'),
            'id' => env('NO_ID')
        ]
    ],

    'marital_status' => [
        'married' => [
            'text' => 'Married',
            'id' => '1'
        ],
        'single' => [
            'text' => 'Single',
            'id' => '2'
        ],
        'divorced' => [
            'text' => 'Divorced',
            'id' => '3'
        ]
    ],

    'employment_status' => [
        'employed' => [
            'text' => 'Employed',
            'id' => '1'
        ],
        'unemployed' => [
            'text' => 'Unemployed',
            'id' => '2'
        ],
        'business' => [
            'text' => 'Business',
            'id' => '3'
        ]
    ],

    'profession' => [
        'finance' => [
            'text' => 'Accounting and Finance',
            'id' => '1'
        ],
        'it' => [
            'text' => 'Information Technology',
            'id' => '2'
        ],
        'education' => [
            'text' => 'Education',
            'id' => '3'
        ],
        'business' => [
            'text' => 'Business',
            'id' => '4'
        ]
    ],

    'level_of_education' => [
        'primary' => [
            'text' => 'Primary School',
            'id' => '1'
        ],
        'high_school' => [
            'text' => 'High School/ O Level',
            'id' => '2'
        ],
        'diploma' => [
            'text' => 'Diploma Certificate',
            'id' => '3'
        ],
        'university' => [
            'text' => 'University - Bachelor"s Degree/Masters Degree/PhD',
            'id' => '4'
        ]
    ]

];