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

namespace WBW\Library\Pappers\Tests\Request;

use WBW\Library\Pappers\Request\AbstractRequest;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Request\EntrepriseRequestInterface;
use WBW\Library\Pappers\Response\EntrepriseResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Entreprise request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class EntrepriseRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new EntrepriseRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(EntrepriseResponse::class, $res);
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new EntrepriseRequest();
        $obj->setSiren("siren");

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);

        $this->assertEquals("siren", $res["siren"]);
    }

    /**
     * Test setFormatPublicationsBodacc()
     *
     * @return void
     */
    public function testSetFormatPublicationsBodacc(): void {

        $obj = new EntrepriseRequest();

        $obj->setFormatPublicationsBodacc(EntrepriseRequest::FORMAT_PUBLICATIONS_BODACC_OBJET);
        $this->assertEquals(EntrepriseRequest::FORMAT_PUBLICATIONS_BODACC_OBJET, $obj->getFormatPublicationsBodacc());
    }

    /**
     * Test setMarques()
     *
     * @return void
     */
    public function testSetMarques(): void {

        $obj = new EntrepriseRequest();

        $obj->setMarques(true);
        $this->assertTrue($obj->getMarques());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/entreprise", EntrepriseRequest::RESOURCE_PATH);

        $obj = new EntrepriseRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);
        $this->assertInstanceOf(EntrepriseRequestInterface::class, $obj);

        $this->assertEquals(EntrepriseRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getSiret());

        $this->assertNull($obj->getFormatPublicationsBodacc());
        $this->assertNull($obj->getMarques());
    }
}
