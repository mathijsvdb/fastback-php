<?php

namespace Fastback\Models;

class Transmission extends FastbackModel
{
    const VALUES = [
        'AUTO' => [
            'nl' => 'Automaat',
            'fr' => 'Automatique',
        ],
        'MANUAL' => [
            'nl' => 'Handgeschakeld',
            'fr' => 'Transmission manuelle',
        ],
        'ROBOT' => [
            'nl' => 'Geautomatiseerde manuele transmissie',
            'fr' => 'Transmission manuelle automatisée',
        ],
        'CVT' => [
            'nl' => 'Continu variabele transmissie',
            'fr' => 'Transmission à variation continue',
        ],
    ];
}
