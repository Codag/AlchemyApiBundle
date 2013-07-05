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
 * http://www.alchemyapi.com/api/
 *
 * @author Marc Juchli <mj@codag.ch>
 */
class AlchemyAPI {

    protected $apiKey;
    protected $apiUrlPrefix = "http://access.alchemyapi.com/calls/";

    public function __construct($apiKey){
        $this->apiKey = $apiKey;
    }

    public function getEntityExtraction(){
        return new Methods\EntityExtraction($this->apiKey);
    }

    public function getApiKey(){
        return $this->apiKey;
    }

}