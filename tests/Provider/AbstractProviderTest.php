<?php

declare(strict_types = 1);

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Test setApiToken()
     *
     * @retunr void
     */
    public function testSetApiToken(): void {

        $obj = new TestProvider();

        $obj->setApiToken("apiToken");
        $this->assertEquals("apiToken", $obj->getApiToken());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        $this->assertEquals("https://api.pappers.fr", TestProvider::ENDPOINT_PATH);

        $obj = new TestProvider("apiToken", $logger);

        $this->assertSame($logger, $obj->getLogger());

        $this->assertEquals("apiToken", $obj->getApiToken());
    }
}
