<?php

/*
 * This file is part of the Codag\AlchemyApiBundle
 *
 * (c) Marc Juchli <mj@codag.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Codag\AlchemyApiBundle\Services\Types;

use Codag\AlchemyApiBundle\Services\AlchemyAPIInterface;
use Codag\AlchemyApiBundle\Services\HttpClient;

abstract class WebApi extends HttpClient implements AlchemyAPIInterface {

    protected $apiUrl;
    protected $apiUrlType = "url/";
    protected $apiUrlExtension = "";
    protected $outputMode;
    protected $url;

    public function __construct($apiKey, $apiUrlPrefix){
        $this->apiUrl = $apiUrlPrefix.$this->apiUrlType.$this->apiUrlExtension;
        parent::__construct($apiKey, $this->apiUrl);
    }

    public function getApiUrl(){
        return $this->getApiUrl();
    }

    public function getApiKey(){
        return $this->apiKey;
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