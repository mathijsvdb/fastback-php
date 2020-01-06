<?php

namespace Fastback\Models;

use Fastback\XMLConvertable;
use Fastback\XMLConverter;
use Fastback\Models\EquipmentOption;
use Fastback\Language;

class EquipmentDetail extends XMLConvertable
{
    public function __construct($XMLElement)
    {
        $converter = new XMLConverter($XMLElement, $this);
        $converter->convertStringProperties('desc', 'option_code');

        $this->language = Language::convert(intval($XMLElement->langue));
        $this->translation = EquipmentOption::VALUES[$this->option_code][$this->language] ?? null;
    }
}
