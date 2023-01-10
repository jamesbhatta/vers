<?php
return [
    'mohrain_logo' => [
        'logo' => 'assets/img/mohrain-logo.png',
        'logo_sm' => 'assets/img/mohrain-logo.png'
    ],

    'organization' => [
        'per_page' => 50,
    ],

    'online_application' => [
        'per_page' => 50,
    ],

    'document' => [
        'dir_name' =>  'documents',
        'types' => [
            'नागरिकताको प्रतिलिपि',
            'संचालकको फोटो',
            'घर बहाल सम्झौता',
            'घरजग्गा कर रसिद',
            'निवेदन पत्र',
            'व्यवसाय प्रमाणपत्रको प्रतिलिपी'
        ]
    ],

    'letterhead' => [
        'ward' => [],

        'municipality' => [
            // path relative to public directory
            'logo_url' => 'assets/img/nep-gov-logo-sm.png',
        ]
    ],

    'organization_types' => [
        'headquarter' => 'Headquarter',
        'division' => 'Division',
        'sub-division' => 'Sub Division',
    ],

    'project_type_groups' => ['सिचाई', 'खाने पानी', 'पूर्वधार', 'सहरी विकास', 'यातायात'],
];
