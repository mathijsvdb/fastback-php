<?php

namespace Fastback\Models;

class Upholstery extends FastbackModel
{
    const VALUES = [
        'VELVET' => [
            'nl' => 'Fluweel',
            'fr' => 'Velours',
        ],
        'FABRIC' => [
            'nl' => 'Stof',
            'fr' => 'Tissu',
        ],
        'SKAI' => [
            'nl' => 'Kunstleder',
            'fr' => 'Skaï',
        ],
        'HALFLEATHER' => [
            'nl' => 'Halfleder',
            'fr' => 'Semi-cuir',
        ],
        'LEATHER' => [
            'nl' => 'Leder',
            'fr' => 'Cuir',
        ],
        'ALCANTARA' => [
            'nl' => 'Alcantara',
            'fr' => 'Alcantara',
        ],
    ];
}
