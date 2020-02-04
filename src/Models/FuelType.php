<?php

namespace Fastback\Models;

class FuelType extends FastbackModel
{
    const VALUES = [
        'ETHANOL' => [
            'nl' => 'Ethanol',
            'fr' => 'Ethanol',
        ],
        'OTHER' => [
            'nl' => 'Anders',
            'fr' => 'Autre',
        ],
        'HYDROGEN' => [
            'nl' => 'Waterstof',
            'fr' => 'Hydrogène',
        ],
        'LPG' => [
            'nl' => 'LPG',
            'fr' => 'LPG',
        ],
        'GAS' => [
            'nl' => 'Benzine',
            'fr' => 'Essence',
        ],
        'ELET' => [
            'nl' => 'Elektrisch',
            'fr' => 'Electrique',
        ],
        'DIESEL' => [
            'nl' => 'Diesel',
            'fr' => 'Diesel',
        ],
        'HYBRIDGAS' => [
            'nl' => 'Elektrisch/benzine',
            'fr' => 'Electrique/essence',
        ],
    ];
}
