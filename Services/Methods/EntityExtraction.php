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

use Codag\AlchemyApiBundle\Services\AlchemyAPI;
use Symfony\Component\HttpFoundation\Request;

/**
 * EntityExtraction
 * http://www.alchemyapi.com/api/entity/
 *
 * @author Marc Juchli <mj@codag.ch>
 */
class EntityExtraction extends AlchemyAPI {

    public function getWeb(){
        return new EntityExtractionWeb($this->apiKey, $this->apiUrlPrefix);
    }

    public function getHTML(){
        //TODO: implement html api call
    }

    public function getText(){
        //TODO: implement text api call
    }

}