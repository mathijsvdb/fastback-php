<?php

namespace Fastback\Models;

class Model
{
    public function __construct($XMLElement)
    {
        $this->brand = $XMLElement->make;
        $this->name = $XMLElement->model;
    }
}
