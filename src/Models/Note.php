<?php

namespace Fastback\Models;

use Fastback\XMLConvertable;
use Fastback\XMLConverter;

class Note extends XMLConvertable
{
    public function __construct($XMLElement)
    {
        $converter = new XMLConverter($XMLElement, $this);
        $converter->convertStringProperties('language', 'title');
        $converter->convertHTMLProperties('description');
    }
}
