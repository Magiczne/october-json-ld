<?php

return [
    'plugin' => [
        'name' => 'Komponenty JSON-LD',
        'description' => 'Dodaj JSON-LD do swojej strony za pomocą komponentów.'
    ],
    'permissions' => [
        'settings' => 'Zarządzaj ustawieniami renderowania JSON-LD'
    ],
    'settings' => [
        'description' => 'Zarządzaj ustawieniami JSON-LD',
        'fields' => [
            'pretty_print' => [
                'label' => 'Wyświetlaj sformatowany JSON',
                'comment' => 'Wyświetlaj sformatowany kod JSON zamiast skompresowanego'
            ]
        ],
        'tabs' => [
            'general' => 'Ogólne'
        ]
    ],
    'global' => [
        'yes' => 'Tak',
        'no' => 'Nie',
        'noData' => 'Brak informacji',
        'value' => 'Wartość'
    ]
];
