<?php

namespace Fastback\Models;

use Fastback\XMLConvertable;
use Fastback\XMLConverter;

class Vehicle extends XMLConvertable
{
    public function __construct($XMLElement, $language = null)
    {
        $converter = new XMLConverter($XMLElement, $this);
        $converter->convertIntProperties('internal_id', 'dealer_id', 'doors', 'engine_size', 'kw', 'hp', 'fisc', 'vat_pourc', 'co2', 'co2WLTP', 'mileage', 'sell_price', 'market_price', 'catalog_price', 'buy_price', 'warranty', 'owners');
        $converter->convertStringProperties('customer_id', 'type', 'make', 'model', 'version', 'body_type', 'motorisation', 'fuel_type', 'gears', 'gears_type', 'transmission', 'bodyColorStandard', 'bodyColorFactory', 'paint_type', 'interiorColor', 'seats', 'vin', 'euroNorm', 'notebook', 'warranty_label', 'options_note', 'video');
        $converter->convertDateProperties('first_reg', 'arrival_date');
        $converter->convertBoolProperties('featured', 'dealer_label');
        $converter->convertFloatProperties('consumption');

        // process car equipment
        $this->equipment = [];
        if (isset($XMLElement->equipment_details->details)) {
            $this->equipment = EquipmentDetail::fromXMLChildren($XMLElement->equipment_details->details);
        }

        // process car images
        $this->images = [];
        if (isset($XMLElement->images->image)) {
            foreach ($XMLElement->images->image as $image) {
                $this->images[] = strval($image);
            }
        }

        $this->original_images = [];
        if (isset($XMLElement->original_images->image)) {
            foreach ($XMLElement->original_images->image as $og_image) {
                $this->original_images[] = strval($og_image);
            }
        }

        // process car dealer
        $this->dealer = null;
        if (isset($XMLElement->dealer)) {
            $this->dealer = new Dealer($XMLElement->dealer);
        }

        // process car notes
        $this->notes = [];
        if (isset($XMLElement->notes->note)) {
            $this->notes = Note::fromXMLChildren($XMLElement->notes->note);
        }

        // determine amount of gears
        if (isset($XMLElement->gears)) {
            $this->gears = intval(substr($XMLElement->gears, 4, 5));
        }

        // update properties with models and translations
        $this->type = new Type($this->type, $language);
        $this->body_type = new BodyType($this->body_type, $language);
        $this->fuel_type = new FuelType($this->fuel_type, $language);
        $this->gears_type = new Transmission($this->gears_type, $language);
        $this->bodyColorStandard = new Color($this->bodyColorStandard, $language);
        $this->paint_type = new PaintType($this->paint_type, $language);
        $this->interiorColor = new Color($this->interiorColor, $language);
        $this->seats = new Upholstery($this->seats, $language);
        $this->notebook = new Notebook($this->notebook, $language);

        // if a language is specified, only provide the fields for that language
        if ($language) {
            $this->equipment = array_filter($this->equipment, function($equipment) use ($language) {
                return $equipment->language === $language;
            });

            $this->notes = array_filter($this->notes, function($note) use ($language) {
                return $note->language === $language;
            });
        }
    }
}
