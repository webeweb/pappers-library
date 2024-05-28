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
use WBW\Library\Pappers\Request\SuggestionsRequest;
use WBW\Library\Pappers\Request\SuggestionsRequestInterface;
use WBW\Library\Pappers\Response\SuggestionsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Suggestions request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class SuggestionsRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new SuggestionsRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(SuggestionsResponse::class, $res);
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new SuggestionsRequest();
        $obj->setQ("q");

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);

        $this->assertEquals("q", $res["q"]);
    }

    /**
     * Test setCibles()
     *
     * @return void
     */
    public function testSetCibles(): void {

        $obj = new SuggestionsRequest();

        $obj->setCibles("cibles");
        $this->assertEquals("cibles", $obj->getCibles());
    }

    /**
     * Test setLongueur()
     *
     * @return void
     */
    public function testSetLongueur(): void {

        $obj = new SuggestionsRequest();

        $obj->setLongueur(1);
        $this->assertEquals(1, $obj->getLongueur());
    }

    /**
     * Test __construct()
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/suggestions", SuggestionsRequest::RESOURCE_PATH);

        $obj = new SuggestionsRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);
        $this->assertInstanceOf(SuggestionsRequestInterface::class, $obj);

        $this->assertNull($obj->getQ());

        $this->assertEquals(SuggestionsRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getCibles());
        $this->assertNull($obj->getLongueur());
    }
}
