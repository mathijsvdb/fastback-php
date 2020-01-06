<?php

namespace Fastback\Models;

abstract class FastbackModel
{
    const VALUES = [];

    public function __construct($value, $language = null)
    {
        $this->value = $value;
        if ($language) $this->translation = static::VALUES[$value][$language] ?? null;
    }
}
