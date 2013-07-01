<?php
namespace Codag\AlchemyApiBundle\Services;

use Symfony\Component\HttpFoundation\Request;

class AlchemyAPI {

    protected $apiKey;
    protected $apiUrlPrefix;

    public function __construct($apiKey){
        $this->apiKey = $apiKey;
        $this->apiUrlPrefix = "http://access.alchemyapi.com/calls/url/";
    }

    public function getEntityExtraction(){
        return new Methods\EntityExtraction($this->apiKey, $this->apiUrlPrefix);
    }

}