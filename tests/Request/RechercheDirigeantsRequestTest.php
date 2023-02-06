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
use WBW\Library\Pappers\Request\RechercheDirigeantsRequest;
use WBW\Library\Pappers\Response\RechercheDirigeantsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche dirigeants request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RechercheDirigeantsRequestTest extends AbstractTestCase {

    /**
     * Tests deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new RechercheDirigeantsRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(RechercheDirigeantsResponse::class, $res);
    }

    /**
     * Tests serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new RechercheDirigeantsRequest();
        $obj->setQ("q");

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);

        $this->assertEquals("q", $res["q"]);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/recherche-dirigeants", RechercheDirigeantsRequest::RESOURCES_PATH);

        $obj = new RechercheDirigeantsRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(RechercheDirigeantsRequest::RESOURCES_PATH, $obj->getResourcePath());
    }
}
