<?php

namespace Fastback\Models;

class Notebook extends FastbackModel
{
    const VALUES = [
        'MISSING' => [
            'nl' => 'Ontbrekend',
            'fr' => 'Absent',
        ],
        'PARTIAL' => [
            'nl' => 'Onvolledig',
            'fr' => 'Incomplet',
        ],
        'COMPLETE' => [
            'nl' => 'Volledig',
            'fr' => 'Complet',
        ],
    ];
}
