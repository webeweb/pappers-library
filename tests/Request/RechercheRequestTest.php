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

use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RechercheRequestTest extends AbstractTestCase {

    /**
     * Tests setBases()
     *
     * @return void
     */
    public function testSetBases(): void {

        $obj = new RechercheRequest();

        $obj->setBases("bases");
        $this->assertEquals("bases", $obj->getBases());
    }

    /**
     * Tests setCurseur()
     *
     * @return void
     */
    public function testSetCurseur(): void {

        $obj = new RechercheRequest();

        $obj->setCurseur("curseur");
        $this->assertEquals("curseur", $obj->getCurseur());
    }

    /**
     * Tests setExport()
     *
     * @return void
     */
    public function testSetExport(): void {

        $obj = new RechercheRequest();

        $obj->setExport("export");
        $this->assertEquals("export", $obj->getExport());
    }

    /**
     * Tests setParCurseur()
     *
     * @return void
     */
    public function testSetParCurseur(): void {

        $obj = new RechercheRequest();

        $obj->setParCurseur(1);
        $this->assertEquals(1, $obj->getParCurseur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/recherche", RechercheRequest::RESOURCES_PATH);

        $obj = new RechercheRequest();

        $this->assertEquals(RechercheRequest::RESOURCES_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getBases());
        $this->assertNull($obj->getCurseur());
        $this->assertNull($obj->getExport());
        $this->assertNull($obj->getParCurseur());
    }
}
