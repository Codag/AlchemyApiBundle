<?php

/*
 * This file is part of the Codag\AlchemyApiBundle
 *
 * (c) Marc Juchli <mj@codag.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Codag\AlchemyApiBundle\Tests\Services;

use Codag\AlchemyApiBundle\Services\AlchemyAPI;

/**
 * Test AlchemyApi
 *
 * @author Marc Juchli <mj@codag.ch>
 */
class AlchemyAPITest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test AlchemyAPI constructor
     * 
     * @covers Codag\AlchemyApiBundle\Services\AlchemyAPI::__construct
     */
    public function testAlchemyApiConstruct()
    {
        $alchemy = new AlchemyAPI('831370096236c6db90393a1d206010ffffffffff');

        $this->assertEquals('831370096236c6db90393a1d206010ffffffffff', $alchemy->getAPIkey());
    }

}
