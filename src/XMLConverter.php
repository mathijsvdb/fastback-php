<?php

namespace Fastback;

use NumberFormatter;
use DateTime;

class XMLConverter
{
    /**
     * The XML element from which properties will be retreived
     * @var \SimpleXMLElement
     */
    protected $XMLElement;

    /**
     * The object that will receive new properties
     * @var object
     */
    protected $target;

    public function __construct(\SimpleXMLElement $XMLElement, $target)
    {
        $this->XMLElement = $XMLElement;
        $this->target = $target;
    }

    /**
    * Retrieve properties from the XML element and convert them to int properties of the target object
    *
    * @param string $property,...
    */
    public function convertIntProperties(string ...$properties)
    {
        foreach($properties as $property)
        {
            $this->setProperty($property, 'intval');
        }
    }

    /**
    * Retrieve properties from the XML element and convert them to float properties of the target object
    *
    * @param string $property,...
    */
    public function convertFloatProperties(string ...$properties)
    {
        foreach($properties as $property)
        {
            $this->setProperty($property, function($float) {
                $formatter = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
                return $formatter->parse($float);
            });
        }
    }

    /**
     * Retrieve properties from the XML element and convert them to string properties of the target object
     *
     * @param  string $properties
     */
    public function convertStringProperties(string ...$properties)
    {
        foreach ($properties as $property) {
            $this->setProperty($property, 'strval');
        }
    }

    /**
     * Retrieve properties from the XML element and convert them to date properties of the target object
     *
     * @param  string $properties
     */
    public function convertDateProperties(string ...$properties)
    {
        foreach ($properties as $property) {
            $this->setProperty($property, function(string $date)
            {
                if (strpos($date, ':') === false) $date .= ' 0:00:00';
                return DateTime::createFromFormat('Y-m-d H:i:s', $date);
            });
        }
    }

    /**
     * Retrieve properties from the XML element and convert them to bool properties of the target object
     *
     * @param  string $properties
     */
    public function convertBoolProperties(string ...$properties)
    {
        foreach ($properties as $property) {
            $this->setProperty($property, function($bool) {
                return (intval($bool) === 1);
            });
        }
    }

    /**
    * Retrieve properties from the XML element and convert them to string properties of the target object, decoding HTML entities
    *
    * @param string $property,...
    */
    public function convertHTMLProperties(string ...$properties)
    {
        foreach ($properties as $property) {
            $this->setProperty($property, function($string) {
                return html_entity_decode($string ,ENT_QUOTES);
            });
        }
    }

    /**
    * Get a property from the XML element, process it using a callback function, and set it on the target
    *
    * @param string $property
    * @param callable $callable
    */
    protected function setProperty(string $property, $callable)
    {
        $targetProperty = $property;
        if (isset($this->XMLElement->$property) && strlen($this->XMLElement->$property) > 0) {
            $this->target->$targetProperty = $callable($this->XMLElement->$property);
        } else {
            $this->target->$targetProperty = null;
        }
    }
}
