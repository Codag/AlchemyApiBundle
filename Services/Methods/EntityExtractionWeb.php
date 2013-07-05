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

use Codag\AlchemyApiBundle\Services\Types\WebApi;
use Symfony\Component\HttpFoundation\Request;

/**
 * EntityExtraction
 * http://www.alchemyapi.com/api/entity/urls.html
 *
 * @author Marc Juchli <mj@codag.ch>
 */
class EntityExtractionWeb extends WebApi {

    protected $apiUrlExtension = "URLGetRankedNamedEntities";

}