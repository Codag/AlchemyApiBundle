<?php
namespace Codag\AlchemyApiBundle\Services;
use  Buzz\Browser, Buzz\Client\Curl;

class HttpClient {

    protected $apiUrl;
    protected $apiKey;

    public function __construct($apiKey, $apiUrl){
        $this->apiKey = $apiKey;
        $this->apiUrl = $apiUrl;
    }

    protected function makeRequest($options){
        $options['apikey'] = $this->apiKey;
        $curl = new Curl();
        $browser = new Browser($curl);
        $response = $browser->post($this->apiUrl, array(), http_build_query($options));

        return $response->getContent();
    }

}