<?php
namespace Codag\AlchemyApiBundle\Services\Methods;

use Codag\AlchemyApiBundle\Services\HttpClient;
use Symfony\Component\HttpFoundation\Request;

class EntityExtraction extends HttpClient {

    protected $apiUrlExtension = "URLGetRankedNamedEntities";
    protected $apiUrl;
    protected $outputMode;

    public function __construct($apiKey, $apiUrlPrefix){
        $this->apiUrl = $apiUrlPrefix.$this->apiUrlExtension;
        parent::__construct($apiKey, $this->apiUrl);
    }

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getOutputMode(){
        return $this->outputMode;
    }

    public function setOutputMode($outputMode){
        $this->outputMode = $outputMode;
    }

    protected function options(){
        $option = array(
            'url' => $this->url,
            'outputMode' => $this->outputMode
        );

        return $option;
    }

    public function getData(){
        $options = $this->options();
        $data = $this->makeRequest($options);
        return $data;
    }

}