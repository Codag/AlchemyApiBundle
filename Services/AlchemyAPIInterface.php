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

    /**
     * Returns the configured API Key
     *
     * @return string
     */
    public function getApiKey();

    /**
     * Returns the url of the specific type
     *
     * @return string The API path
     */
    public function getApiUrl();

    /**
     * Returns the result requested from defined options
     *
     * @return string The message content
     */
    public function getData();

    /**
     * Sets the output mode for further api calls
     *
     * Defined modes are:
     * - xml (default)
     * - json
     * - rdf
     * - rel-tag
     * - rel-tag-raw
     *
     * @param string $outputMode The output mode
     */
    public function setOutputMode($outputMode);

    /**
     * Returns the specified output mode
     *
     * @return string The output mode
     */
    public function getOutputMode();
}