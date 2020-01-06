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
    ];
}
