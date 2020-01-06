<?php

namespace Fastback;

class HTTPClient
{
    /**
     * Instance of Guzzle Client
     * @var GuzzleHttp\Client
     */
    protected $Guzzleclient;

    /**
     * Origin for the API requests
     * @var string
     */
    protected $origin;

    /**
     * Language as defined in /Fastback/Language
     * @var int
     */
    public $language;

    /**
     * [__construct description]
     * @param string $origin Origin for the API requests;
     */
    public function __construct()
    {
        $this->Guzzleclient = new \GuzzleHttp\Client();
    }

    public function setOrigin(string $origin)
    {
        $this->origin = $origin;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    protected function makeRequest()
    {
        $responseBody = $this->Guzzleclient->get($this->origin)->getBody()->getContents();
        $responseXML = simplexml_load_string($responseBody);

        if ($responseXML === false) {
            throw new ResponseException("Fastback server did not return valid XML.");
        }

        return $responseXML;
    }
}
