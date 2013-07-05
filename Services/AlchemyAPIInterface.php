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


interface AlchemyAPIInterface {

    public function getApiKey();

    public function getApiUrl();

}