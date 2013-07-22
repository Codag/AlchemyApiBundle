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

use  Buzz\Browser, Buzz\Client\Curl;

/**
 * HttpClient
 *
 * @author Marc Juchli <mj@codag.ch>
 */
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