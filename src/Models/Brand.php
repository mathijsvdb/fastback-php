<?php

namespace Fastback\Models;

use Fastback\XMLConvertable;
use Fastback\XMLConverter;

class Brand extends XMLConvertable
{
    public function __construct($XMLElement)
    {
        $this->name = $XMLElement->make;
    }
}
