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
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Request\RechercheRequestInterface;
use WBW\Library\Pappers\Response\RechercheResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RechercheRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new RechercheRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(RechercheResponse::class, $res);
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new RechercheRequest();
        $obj->setBases("bases");

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);

        $this->assertEquals("bases", $res["bases"]);
    }

    /**
     * Test setBases()
     *
     * @return void
     */
    public function testSetBases(): void {

        $obj = new RechercheRequest();

        $obj->setBases("bases");
        $this->assertEquals("bases", $obj->getBases());
    }

    /**
     * Test setCurseur()
     *
     * @return void
     */
    public function testSetCurseur(): void {

        $obj = new RechercheRequest();

        $obj->setCurseur("curseur");
        $this->assertEquals("curseur", $obj->getCurseur());
    }

    /**
     * Test setExport()
     *
     * @return void
     */
    public function testSetExport(): void {

        $obj = new RechercheRequest();

        $obj->setExport("export");
        $this->assertEquals("export", $obj->getExport());
    }

    /**
     * Test setParCurseur()
     *
     * @return void
     */
    public function testSetParCurseur(): void {

        $obj = new RechercheRequest();

        $obj->setParCurseur(1);
        $this->assertEquals(1, $obj->getParCurseur());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/recherche", RechercheRequest::RESOURCE_PATH);

        $obj = new RechercheRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);
        $this->assertInstanceOf(RechercheRequestInterface::class, $obj);

        $this->assertEquals(RechercheRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getBases());
        $this->assertNull($obj->getCurseur());
        $this->assertNull($obj->getExport());
        $this->assertNull($obj->getParCurseur());
    }
}
