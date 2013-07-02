<?php

/*
 * This file is part of the Codag\AlchemyApiBundle
 *
 * (c) Marc Juchli <mj@codag.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Codag\AlchemyApiBundle\Services;

use Symfony\Component\HttpFoundation\Request;

/**
 * AlchemyApi
 *
 * @author Marc Juchli <mj@codag.ch>
 */
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

    public function getApiKey(){
        return $this->apiKey;
    }

}