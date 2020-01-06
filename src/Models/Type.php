<?php

namespace Fastback\Models;

class Type extends FastbackModel
{
    public function __construct($value, $language = null)
    {
        // Fix a spelling mistake
        if ($value === 'demo') $value = 'Demo';

        parent::__construct($value, $language);
    }

    const VALUES = [
        'Used Car' => [
            'nl' => 'Tweedehandswagen',
            'fr' => 'Voiture d\'occasion',
        ],
        'New Car' => [
            'nl' => 'Nieuwe wagen',
            'fr' => 'Nouvelle voiture',
        ],
        'Demo' => [
            'nl' => 'Demo wagen',
            'fr' => 'Voiture de démonstration',
        ],
        'Service Car' => [
            'nl' => 'Servicewagen',
            'fr' => 'Voiture de service',
        ],

    ];
}
