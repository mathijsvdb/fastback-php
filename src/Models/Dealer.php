<?php

namespace Fastback\Models;

use Fastback\XMLConvertable;
use Fastback\XMLConverter;

class Dealer extends XMLConvertable
{
    public function __construct($XMLElement)
    {
        $converter = new XMLConverter($XMLElement, $this);
        $converter->convertIntProperties('dealer_id');
        $converter->convertStringProperties('dealer_name', 'dealer_address', 'dealer_zip', 'dealer_city', 'dealer_tel', 'dealer_fax');
    }
}
