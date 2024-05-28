<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pappers\Tests\Request;

use WBW\Library\Pappers\Request\AbstractRequest;
use WBW\Library\Pappers\Request\RechercheDocumentsRequest;
use WBW\Library\Pappers\Response\RechercheDocumentsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche documents request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RechercheDocumentsRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new RechercheDocumentsRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(RechercheDocumentsResponse::class, $res);
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new RechercheDocumentsRequest();
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

        $this->assertEquals("/recherche-documents", RechercheDocumentsRequest::RESOURCE_PATH);

        $obj = new RechercheDocumentsRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(RechercheDocumentsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
