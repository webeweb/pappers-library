<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Provider;

use WBW\Library\Pappers\Provider\APIv1Provider;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * API v1 provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Provider
 */
class APIv1ProviderTest extends AbstractTestCase {

    /**
     * Tests the getEndpointVersion() method.
     *
     * @return void
     */
    public function testGetEndpointVersion():void {

        $obj = new APIv1Provider();

        $this->assertEquals("/v1", $obj->getEndpointVersion());
    }
}