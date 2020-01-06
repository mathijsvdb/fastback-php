<?php

namespace Fastback\Models;

class BodyType extends FastbackModel
{
    const VALUES = [
        'SAV' => [
            'nl' => 'SAV',
            'fr' => 'SAV',
        ],
        'SUV' => [
            'nl' => 'SUV',
            'fr' => 'SUV',
        ],
        'UTILITY' => [
            'nl' => 'Bedrijfsvoertuig',
            'fr' => 'Utilitaire',
        ],
        'PICKUP' => [
            'nl' => 'Pick up',
            'fr' => 'Pick up',
        ],
        'MONOSPACE' => [
            'nl' => 'MPV',
            'fr' => 'Monospace',
        ],
        'COUPE' => [
            'nl' => 'Coupé',
            'fr' => 'Coupé',
        ],
        'CONVERTIBLE' => [
            'nl' => 'Cabriolet',
            'fr' => 'Cabriolet',
        ],
        'BREAK' => [
            'nl' => 'Break',
            'fr' => 'Break',
        ],
        'OTHER' => [
            'nl' => 'Anders',
            'fr' => 'Autres',
        ],
        '4x4' => [
            'nl' => '4x4',
            'fr' => '4x4',
        ],
        '4/5DOORS' => [
            'nl' => '4/5 deurs',
            'fr' => '4/5 portes',
        ],
        '2/3DOORS' => [
            'nl' => '2/3 deurs',
            'fr' => '2/3 portes',
        ],
    ];
}
