<?php

/*
 * This file is part of the Codag\AlchemyApiBundle
 *
 * (c) Marc Juchli <mj@codag.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Codag\AlchemyApiBundle\Services\Methods;

use Codag\AlchemyApiBundle\Services\HttpClient;
use Symfony\Component\HttpFoundation\Request;

/**
 * EntityExtraction
 * http://www.alchemyapi.com/api/entity/urls.html
 *
 * @author Marc Juchli <mj@codag.ch>
 */
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