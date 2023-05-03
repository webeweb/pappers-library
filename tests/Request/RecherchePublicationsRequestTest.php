<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Request;

use WBW\Library\Pappers\Request\AbstractRequest;
use WBW\Library\Pappers\Request\RecherchePublicationsRequest;
use WBW\Library\Pappers\Response\RecherchePublicationsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche publications request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RecherchePublicationsRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new RecherchePublicationsRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(RecherchePublicationsResponse::class, $res);
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new RecherchePublicationsRequest();
        $obj->setQ("q");

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);

        $this->assertEquals("q", $res["q"]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/recherche-publications", RecherchePublicationsRequest::RESOURCE_PATH);

        $obj = new RecherchePublicationsRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(RecherchePublicationsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
