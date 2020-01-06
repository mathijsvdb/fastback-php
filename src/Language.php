<?php

namespace Fastback;

use ReflectionClass;

abstract class Language
{
    const DUTCH = 'nl';
    const FRENCH = 'fr';

    const LANG = [
        1 => 'fr',
        6 => 'en',
        7 => 'nl',
        8 => 'de',
    ];

    public static function supported()
    {
        $language = new ReflectionClass(__CLASS__);
        return $language->getConstants();
    }

    public static function convert(int $reference)
    {
        return self::LANG[$reference];
    }
}
