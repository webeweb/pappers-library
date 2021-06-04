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

use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * API v2 provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Provider
 */
class APIv2ProviderTest extends AbstractTestCase {

    /**
     * Tests the getEndpointVersion() method.
     *
     * @return void
     */
    public function testGetEndpointVersion(): void {

        $obj = new APIv2Provider();

        $this->assertEquals("/v2", $obj->getEndpointVersion());
    }
}