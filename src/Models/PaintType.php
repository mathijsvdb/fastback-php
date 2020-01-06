<?php

namespace Fastback\Models;

class PaintType extends FastbackModel
{
    public function __construct($value, $language = null)
    {
        // Fix a spelling mistake
        if ($value === 'OTHRE') $value = 'OTHER';

        parent::__construct($value, $language);
    }

    const VALUES = [
        'METAL' => [
            'nl' => 'Metaalkleur',
            'fr' => 'Couleur métallique',
        ],
        'NONMETAL' => [
            'nl' => 'Niet metaalkleur',
            'fr' => 'Couleur non métallique',
        ],
        'OTHER' => [
            'nl' => 'Anders',
            'fr' => 'Autre',
        ],
    ];
}
