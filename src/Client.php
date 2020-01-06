<?php

namespace Fastback;

class Client extends HTTPClient
{
    public $vehicles;

    private function getResponse() {
        $response = $this->makeRequest();
        return $response;
    }

    /**
     * Returns all vehicles
     * @return Fastback\Models\Vehicle[]
     */
    public function getVehicles()
    {
        $response = $this->getResponse();


        if (!isset($response->vehicle)) return [];

        $this->vehicles = Models\Vehicle::FromXMLChildren($response->vehicle, $this->language);

        return $this->vehicles;
    }

    /**
     * Returns all brands
     * @return Fastback\Models\Brand[]
     */
    public function getBrands()
    {
        $vehicles = $this->vehicles ?? $this->getVehicles();
        $brands = [];

        if ($vehicles) {
            foreach($this->vehicles as $vehicle) {
                $brand_exists = array_filter($brands, function($brand) use ($vehicle) {
                    return $brand->name === $vehicle->make;
                });

                if (!$brand_exists) $brands[] = new Models\Brand($vehicle);
            }
        }

        return $brands;
    }

    /**
     * Returns all models with associated brand
     * @return Fastback\Models\Model[]
     */
    public function getModels()
    {
        $vehicles = $this->vehicles ?? $this->getVehicles();
        $models = [];

        if ($vehicles) {
            foreach($this->vehicles as $vehicle) {
                $model_exists = array_filter($models, function($model) use ($vehicle) {
                    return $model->brand === $vehicle->make && $model->name === $vehicle->model;
                });

                if (!$model_exists) $models[] = new Models\Model($vehicle);
            }
        }

        return $models;
    }

    /**
     * Returns all dealers
     * @return Fastback\Models\Dealer[]
     */
    public function getDealers()
    {
        $vehicles = $this->vehicles ?? $this->getVehicles();
        $dealers = [];

        if ($vehicles) {
            foreach ($this->vehicles as $vehicle) {
                $dealer_exists = array_filter($dealers, function($dealer) use ($vehicle) {
                    return $dealer->dealer_id === $vehicle->dealer->dealer_id;
                });

                if (!$dealer_exists) $dealers[] = $vehicle->dealer;
            }
        }

        return $dealers;
    }

    /**
     * Returns all fuel types
     * @return Fastback\Models\FuelType[]
     */
    public function getFuelTypes()
    {
        $fuel_types = $this->getCollection('FuelType');
        return $fuel_types;
    }

    /**
     * Returns all available colors
     * @return Fastback\Models\Color[]
     */
    public function getColors()
    {
        $colors = $this->getCollection('Color');
        return $colors;
    }

    /**
     * Returns all upholsteries
     * @return Fastback\Models\Upholstery[]
     */
    public function getUpholsteries()
    {
        $upholsteries = $this->getCollection('Upholstery');
        return $upholsteries;
    }

    /**
     * Returns all body types
     * @return Fastback\Models\BodyType[]
     */
    public function getBodyTypes()
    {
        $body_types = $this->getCollection('BodyType');
        return $body_types;
    }

    /**
     * Returns all transmission types
     * @return Fastback\Models\Transmission[]
     */
    public function getTransmissions()
    {
        $transmissions = $this->getCollection('Transmission');
        return $transmissions;
    }

    /**
     * Get a collection of values based on a model name
     * @param  string $name
     * @return Fastback\Models\{Model}[]
     */
    private function getCollection($model)
    {
        $class = __NAMESPACE__."\\Models\\{$model}";
        if (!class_exists($class)) throw new \Exception('Unknown model \''.$model.'\'');

        $collection = [];
        if(!$class::VALUES) throw new \Exception('Values for \''.$class.'\' not set');
        foreach (array_keys($class::VALUES) as $value) {
            $collection[] = new $class($value, $this->language);
        }

        return $collection;
    }
}
